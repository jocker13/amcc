<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kegiatan_model extends CI_Model {


	public function getKegiatan()
	{
		$sql =$this->db->query("select * from kegiatan");
		return $sql;
	}
	public function getKegiatanestimasi($id_users)
	{
		$sql =$this->db->query("select * from kegiatan where id_users = $id_users" );
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
	public function delete($id_kegiatan)
	{
		$this->db->where('id_kegiatan',$id_kegiatan);
		$this->db->delete('kegiatan');
	}
	public function edit($id_kegiatan)
	{
		$this->db->where('id_kegiatan',$id_kegiatan);
		return $this->db->get('kegiatan');
	}
	public function ubah($id_kegiatan,$data)
	{
		$this->db->where('id_kegiatan',$id_kegiatan);
		$this->db->update('kegiatan', $data);
	}
}
