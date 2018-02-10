<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nota_model extends CI_Model {


	public function getnota()
	{
		$sql =$this->db->query("select n.*, k.nama_kegiatan as nama_kegiatan, k.tahun_kep as tahun from nota n join kegiatan k on n.id_kegiatan = k.id_kegiatan");
		return $sql;
	}
	public function save($data)
	{
		$this->db->insert('nota',$data);
	}
	public function delete($id)
	{
		$this->db->where('id_nota',$id_nota);
		$this->db->delete('nota');
	}
	public function edit($id_nota)
	{
		$this->db->where('id_nota',$id_nota);
		return $this->db->get('nota');
	}
	public function ubah($id_nota,$data)
	{
		$this->db->where('id_nota',$id_nota);
		$this->db->update('nota', $data);
	}
}
