<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sorry extends CI_Controller
{

    public function index()
    {

        $this->load->view('belum.php');
    }
}
