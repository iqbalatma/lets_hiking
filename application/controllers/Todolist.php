<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todolist extends CI_Controller
{

    public function index()
    {
        // $data['title'] = "FTIK | UNIKOM";
        // $this->load->view('write/index', $data);



        $data['title'] = "To Do List";
        $data['nama'] = $_SESSION['username'];
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('todolist/index');
        $this->load->view('admin/footer_admin');
    }
}
