<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{

    public function index()
    {
        $data['title'] = "FTIK | UNIKOM";
        $this->load->view('Content/index', $data);
    }
}
