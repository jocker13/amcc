<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kegiatan_model extends CI_Model {


	public function getKegiatan()
	{
		$sql =$this->db->query("select * from kegiatan");
		return $sql;
	}
	public function getKegiatanBytahun($tahun_kep)
	{
		$this->db->where('tahun_kep',$tahun_kep);
		return $this->db->get('kegiatan');
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
