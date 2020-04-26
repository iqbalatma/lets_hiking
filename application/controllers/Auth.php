<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules("password", "Password", "trim|required");

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Login Page";
            $this->load->view('admin/header_admin', $data);
            $this->load->view('login/login');
            $this->load->view('admin/footer_admin');
        } else {
            $this->_login();
        }
    }



    // BELUM ADA VALIDASI

    private function _login()
    {

        // unset($this->input->post('username'));
        // unset($this->input->post('password'));
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $user_data = [
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'is_logged' => TRUE
                ];
                $this->session->set_userdata($user_data);
                // $this->session->mark_as_temp($user_data, 28800);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username or Password incorrect </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username or Password incorrect </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('is_logged');

        redirect('auth');
    }
}
