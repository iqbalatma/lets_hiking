<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Write extends CI_Controller
{

    public function index()
    {
        // $data['title'] = "FTIK | UNIKOM";
        // $this->load->view('write/index', $data);


        

        $data['title'] = "FTIK | UNIKOM";
        $data['nama'] = $_SESSION['username'];
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('write/index');
        $this->load->view('admin/footer_admin');
    }
}