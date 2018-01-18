<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {


	public function getUser()
	{
		$sql =$this->db->query("select * from users");
		return $sql;
	}
	public function save($data)
	{
		$this->db->insert('users',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users');
	}
	public function edit($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('users');
	}
	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('users', $data);
	}
}
