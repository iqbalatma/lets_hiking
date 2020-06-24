<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Write extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gunung_model');
		// $this->load->model('kategori_berita_model');
	}

	public function index()
	{
		$data['title'] = "Write a Post";
		$data['nama'] = $_SESSION['username'];
		$data['content'] = 'admin/write';
		$this->load->view('layout_admin/wraper', $data);
	}
	public function tambah()
	{

		// $config['upload_path'] 		= './assets/upload/image/';
		// $config['allowed_types'] 	= 'gif|jpg|png|svg';
		// $config['max_size']			= '12000'; // KB	
		// $this->load->library('upload', $config);


		// $upload_data				= array('uploads' =>$this->upload->data());
		// 	// Image Editor
		// $config['image_library']	= 'gd2';
		// $config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
		// $config['new_image'] 		= './assets/upload/image/thumbs/';
		// $config['create_thumb'] 	= TRUE;
		// $config['quality'] 			= "100%";
		// $config['maintain_ratio'] 	= TRUE;
		// $config['width'] 			= 360; // Pixel
		// $config['height'] 			= 200; // Pixel
		// $config['x_axis'] 			= 0;
		// $config['y_axis'] 			= 0;
		// $config['thumb_marker'] 	= '';
		// $this->load->library('image_lib', $config);
		// $this->image_lib->resize();

		$username = $_SESSION['username'];
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		$id_user = $user['id'];
		$i = $this->input;
		$data = array(
			'slug_gunung'			=> url_title($i->post('nama_gunung'), 'dash', TRUE),
			'nama_gunung'			=> $i->post('nama_gunung'),
			'id_kategori'			=> $i->post('kategori_gunung'),
			'id_status'				=> $i->post('status_gunung'),
			'gambar'                => 'tes.jpg',
			'harga' 				=> $i->post('harga'),
			'konten'				=> $i->post('isi_konten'),
			'provinsi'				=> $i->post('provinsi'),
			'kabupaten_kota'		=> $i->post('kabupaten'),
			'kecamatan'				=> $i->post('kecamatan'),
			'id_user'				=> $id_user,
			'time' => date('Y-m-d'),
			// 'gambar'				=> $upload_data['uploads']['file_name'],
		);
		$this->gunung_model->tambah($data);
		// $this->session->set_flashdata('sukses','gunung telah ditambah');
		// 	$data2['pesan'] = '<div class="alert alert-success" role="alert">
		//     <h4 class="alert-heading text-center">Input Data Success !</h4>
		// </div>';
		redirect(base_url('write'));
	}





	// Tambah
	// public function tambah() {
	// 	// $kategori	= $this->kategori_gunung_model->listing();

	// 	// Validasi
	// 	$v = $this->form_validation;

	// 	// $v->set_rules('nama_gunung','Nama gunung','required|is_unique[gunung.nama_gunung]',
	// 	// 	array(	'required'		=> 'Nama gunung harus diisi',
	// 	// 			'is_unique'		=> 'Nama gunung: <strong>'.$this->input->post('nama_gunung').
	// 	// 							   '</strong> sudah ada. Buat nama yang berbeda'));

	// 	// $v->set_rules('keterangan','Keterangan gunung','required',
	// 	// 	array(	'required'		=> 'Keterangan gunung harus diisi'));

	// 	if($v->run()) {
	// 		$config['upload_path'] 		= './assets/upload/image/';
	// 		$config['allowed_types'] 	= 'gif|jpg|png|svg';
	// 		$config['max_size']			= '12000'; // KB	
	// 		$this->load->library('upload', $config);
	// 		if(! $this->upload->do_upload('gambar')) {
	// 	// End validasi

	// 	$data = array(	'title'		=> 'Tambah gunung',
	// 					'kategori'	=> 'asdf',
	// 					'error'		=> $this->upload->display_errors(),
	// 					'isi'		=> 'admin/gunung/tambah');
	// 	$this->index();
	// 	// Masuk database
	// 	}else{
	// 		$upload_data				= array('uploads' =>$this->upload->data());
	// 		// Image Editor
	// 		$config['image_library']	= 'gd2';
	// 		$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
	// 		$config['new_image'] 		= './assets/upload/image/thumbs/';
	// 		$config['create_thumb'] 	= TRUE;
	// 		$config['quality'] 			= "100%";
	// 		$config['maintain_ratio'] 	= TRUE;
	// 		$config['width'] 			= 360; // Pixel
	// 		$config['height'] 			= 200; // Pixel
	// 		$config['x_axis'] 			= 0;
	// 		$config['y_axis'] 			= 0;
	// 		$config['thumb_marker'] 	= '';
	// 		$this->load->library('image_lib', $config);
	// 		$this->image_lib->resize();

	// 		// Proses ke database
	// 		$i = $this->input;
	// 		$data = array(	'slug_gunung'			=> url_title($i->post('nama_gunung'),'dash',TRUE),
	// 						'nama_gunung'			=> $i->post('nama_gunung'),
	// 						'keterangan'			=> $i->post('keterangan'),
	// 						'jenis_gunung'			=> $i->post('jenis_gunung'),
	//                         'status_gunung'			=> $i->post('status_gunung'),
	//                         'gambar'                => 'tes'
	// 						// 'gambar'				=> $upload_data['uploads']['file_name'],
	// 						);
	// 		$this->gunung_model->tambah($data);
	// 		$this->session->set_flashdata('sukses','gunung telah ditambah');
	// 		redirect(base_url());
	// 	}}
	// 	// End masuk database
	// 	$data = array(	'title'		=> 'Tambah gunung',
	// 					'kategori'	=> 'tes',
	// 					'isi'		=> 'admin/gunung/tambah');
	//     // $this->load->view('admin/layout/wrapper', $data);
	//     $this->index();
	// }

}
