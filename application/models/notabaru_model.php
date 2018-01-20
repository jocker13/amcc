<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notabaru_model extends CI_Model {


	public function getNotaBaru()
	{
		$sql =$this->db->query("select * from notabaru");
		return $sql;
	}
	public function save($data)
	{
		$this->db->insert('notabaru',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('notabaru');
	}
	public function edit($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('notabaru');
	}
	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('notabaru', $data);
	}
}
