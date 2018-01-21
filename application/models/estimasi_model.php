<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estimasi_model extends CI_Model {


	public function getEstimasi()
	{
		$sql =$this->db->query("select e.*, k.nama_kegiatan from estimasi e join kegiatan k on e.id_kegiatan = k.id");
		return $sql;
	}
	public function getEstimasiSekertasris()
	{
		$sql =$this->db->query("select e.*, k.nama_kegiatan from estimasi e join kegiatan k on e.id_kegiatan = k.id where nama_sie ='sekertaris'");
		return $sql;
	}
	public function getEstimasiSd()
	{
		$sql =$this->db->query("select e.*, k.nama_kegiatan from estimasi e join kegiatan k on e.id_kegiatan = k.id where nama_sie ='sumber dana'");
		return $sql;
	}
	public function save($data)
	{
		$this->db->insert('kegiatan',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kegiatan');
	}
	public function edit($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('kegiatan');
	}
	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('kegiatan', $data);
	}
}
