<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gunung_model extends CI_Model
{

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	// public function listing() {
	// 	$this->db->select('gunung.*, kategori_gunung.nama_kategori_gunung, users.nama');
	// 	$this->db->from('gunung');
	// 	// Join
	// 	$this->db->join('kategori_gunung','kategori_gunung.id_kategori_gunung = gunung.id_kategori_gunung', 'LEFT');
	// 	$this->db->join('users','users.id_user = gunung.id_user','LEFT');
	// 	// End join
	// 	$this->db->order_by('id_gunung','DESC');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	//Read
	public function read($slug_gunung)
	{
		$this->db->select('*');
		$this->db->from('gunung');
		// // Join
		// End join
		$this->db->join('kategori_gunung', 'kategori_gunung.id_kategori = gunung.id_kategori', 'LEFT');
		$this->db->join('status_gunung', 'status_gunung.id_status = gunung.id_status', 'LEFT');
		$this->db->where('slug_gunung', $slug_gunung);
		$this->db->order_by('id_gunung', 'DESC');
		// $this->db->query('SELECT * FROM gunung WHERE `slug_gunung` =' .$slug_gunung.'');
		$query = $this->db->get();
		return $query->row();
	}

	//Kategori
	// public function kategori($id_kategori_gunung) {
	// 	$this->db->select('gunung.*, kategori_gunung.nama_kategori_gunung, users.nama');
	// 	$this->db->from('gunung');
	// 	// Join
	// 	$this->db->join('kategori_gunung','kategori_gunung.id_kategori_gunung = gunung.id_kategori_gunung', 'LEFT');
	// 	$this->db->join('users','users.id_user = gunung.id_user','LEFT');
	// 	// End join
	// 	$this->db->where('gunung.id_kategori_gunung',$id_kategori_gunung);
	// 	$this->db->order_by('id_gunung','DESC');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	//Home
	public function home()
	{
		$this->db->select('*');
		$this->db->from('gunung');
		// Join
		$this->db->join('kategori_gunung', 'kategori_gunung.id_kategori = gunung.id_kategori', 'LEFT');
		$this->db->join('status_gunung', 'status_gunung.id_status = gunung.id_status', 'LEFT');
		// $this->db->join('users','users.id_user = gunung.id_user','LEFT');
		// End join
		// $this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}

	// detail pergunung
	// public function detail($id_gunung){
	// 	$query = $this->db->get_where('gunung',array('id_gunung'  => $id_gunung));
	// 	return $query->row();
	// }

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('gunung', $data);
	}

	// // Edit 
	public function edit($data)
	{
		$this->db->select('*');
		$this->db->from('gunung');
		$this->db->where('id_gunung', $data);
		// $this->db->order_by('id_gunung', 'DESC');
		// $this->db->query('SELECT * FROM gunung WHERE `slug_gunung` =' .$slug_gunung.'');
		$query = $this->db->get();
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_gunung', $data);
		$this->db->delete('gunung');
	}
	public function update($data)
	{
		$this->db->where('id_gunung', $data['id_gunung']);
		$this->db->update('gunung', $data);
	}
}
