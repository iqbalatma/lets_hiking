<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gunung_model');
	}

	public function index()
	{
		$data['title'] = "Edit a Post";
		$data['nama'] = $_SESSION['username'];
		$data['content'] = 'admin/edit';

		$this->load->view('layout_admin/wraper', $data);
	}


	// public function tambah()
	// {


	// 	$username = $_SESSION['username'];
	// 	$user = $this->db->get_where('user', ['username' => $username])->row_array();
	// 	$t = $user['id_user'];
	// 	$i = $this->input;
	// 	$data = array(
	// 		'slug_gunung'			=> url_title($i->post('nama_gunung'), 'dash', TRUE),
	// 		'nama_gunung'			=> $i->post('nama_gunung'),
	// 		'id_kategori'			=> $i->post('kategori_gunung'),
	// 		'id_status'			=> $i->post('status_gunung'),
	// 		'gambar'                => 'tes.jpg',
	// 		'konten'				=> $i->post('isi_konten'),
	// 		'provinsi'				=> $i->post('provinsi'),
	// 		'kabupaten'				=> $i->post('kabupaten'),
	// 		'kecamatan'				=> $i->post('kecamatan'),
	// 		'id_user'				=> $t

	// 	);

	// 	$this->gunung_model->tambah($data);
	// 	redirect(base_url('write'));
	// }

	public function hapus($id)
	{
		$this->gunung_model->delete($id);
	}

	public function ubah($id)
	{
		$data    = $this->gunung_model->edit($id);
		$data->title = "Edit a Post";
		$data->nama = $_SESSION['username'];
		$data->content = 'admin/form_edit';
		$this->load->view('layout_admin/wraper', $data);
	}

	public function update($id_gunung)
	{
		$username = $_SESSION['username'];
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		$id_user = $user['id'];
		$i = $this->input;
		$data = array(
			'id_gunung' => $id_gunung,
			'slug_gunung'			=> url_title($i->post('nama_gunung'), 'dash', TRUE),
			'nama_gunung'			=> $i->post('nama_gunung'),
			'id_kategori'			=> $i->post('kategori_gunung'),
			'id_status'				=> $i->post('status_gunung'),
			'gambar'                => 'tes.jpg',
			'konten'				=> $i->post('isi_konten'),
			'provinsi'				=> $i->post('provinsi'),
			'kabupaten_kota'		=> $i->post('kabupaten'),
			'kecamatan'				=> $i->post('kecamatan'),
			'id_user'				=> $id_user,
			'time' => date('Y-m-d'),

		);

		$this->gunung_model->update($data);
		redirect(base_url('Edit'));
	}
}
