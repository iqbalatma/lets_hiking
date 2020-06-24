<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		// $this->load->model('konfigurasi_model');
		$this->load->model('gunung_model');
		// $this->load->model('kategori_produk_model');
	}
	public function index()
	{
		$data['title'] = "Let's Hiking";
		$data['content'] = 'Home/home';
		$this->load->view('layout_home/wraper', $data);
		
	}

	// slug mengambil data slug untuk kemudian datanya dikirimkan dan ditampilkan

	public function read($slug_gunung) {
		// kalau slug gini terisi, atau parameternya ada maka method read akan mengirimkan data jika tidak maka akan berupa list
		// $site	= $this->konfigurasi_model->listing();
		// $gunung	= $this->gunung_model->home();
		$read	= $this->gunung_model->read($slug_gunung);
		
		$data	= array( 'nama_gunung'	=> $read->nama_gunung,
						 'keywords' => $read->nama_gunung,
						 'isi_konten' => $read->konten,
						 'read'		=> $read,
						 'status_gunung'	=> $read->status_gunung,
						 'kategori_gunung' => $read->kategori_gunung,
						 'isi'		=> 'home/index');
		// $this->load->view('layout/wrapper',$data); 
		// echo $this->read();
		$data['title'] = "Let's Hiking";
		$data['content'] = 'Home/home';		//konten yang akan tampil
		$this->load->view('layout_home/wraper', $data);
		// echo $read->nama_gunung;
	}
}