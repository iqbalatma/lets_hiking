<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

		if (isset($_SESSION['is_logged'])) {
			$data['title'] = "Dashboard";
			$data['nama'] = $_SESSION['username'];
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/navbar', $data);
			$this->load->view('admin/sidebar', $data);
			$this->load->view('admin/index');
			$this->load->view('admin/footer_admin');
			// var_dump($_SESSION);
		} else {
			redirect('auth');
			// var_dump($_SESSION);
			// echo "gagal";
		}
	}
}
