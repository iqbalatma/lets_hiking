<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todolist extends CI_Controller
{

    public function index()
    {
        $data['title'] = "To Do List";
        $data['nama'] = $_SESSION['username'];
        $data['content'] = 'admin/todolist';
        $this->load->view('layout_admin/wraper', $data);
    }
}
