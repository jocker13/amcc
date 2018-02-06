<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class realisasi_model extends CI_Model {


	public function getRealisasi()
	{
		$sql =$this->db->query("select r.*, e.nama_estimasi from realisasi r  join estimasi e on r.id_estimasi = e.id");
		return $sql;
	}
	public function save($data)
	{
		$this->db->insert('realisasi',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('realisasi');
	}
	public function edit($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('realisasi');
	}
	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('realisasi', $data);
	}
}
