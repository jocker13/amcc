<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estimasi_model extends CI_Model {


	public function getEstimasi()
	{
		$sql =$this->db->query("select e.*, k.nama_kegiatan from estimasi e left join kegiatan k on e.id_kegiatan = k.id");
		return $sql;
	}
	public function save($data)
	{
		$this->db->insert('estimasi',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('estimasi');
	}
	public function edit($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('estimasi');
	}
	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('estimasi', $data);
	}
}
