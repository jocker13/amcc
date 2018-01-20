<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nota_model extends CI_Model {


	public function getnota()
	{
		$sql =$this->db->query("select * from nota");
		return $sql;
	}
	public function save($data)
	{
		$this->db->insert('nota',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('nota');
	}
	public function edit($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('nota');
	}
	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('nota', $data);
	}
}
