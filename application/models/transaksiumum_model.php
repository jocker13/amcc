<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksiumum_model extends CI_Model {


	public function getTransaksiUmum()
	{
		$sql =$this->db->query("select * from transaksiumum");
		return $sql;
	}
	public function getSaldoakhir()
	{
		$sql =$this->db->query("select saldo from transaksiumum where id=(select max(id)from transaksiumum)");
		$ret = $sql->row();
		return $ret->saldo;
	}
	public function save($data)
	{
		$this->db->insert('transaksiumum',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('transaksiumum');
	}
	public function edit($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('transaksiumum');
	}
	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('transaksiumum', $data);
	}
}
