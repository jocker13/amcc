<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("nota_model");
		$this->load->model("kegiatan_model");
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array(
			"container" => "nota"
		);
		$data['op']='tambah';
		$data['sql']=$this->nota_model->getnota()->result();
		$data['kegiatan']=$this->kegiatan_model->getKegiatan()->result();
		$this->load->view("template", $data);
	}
	public function simpan()
	{
		$no_nota=$this->input->post("no_nota");
		$id=$this->input->post("id");
		$op=$this->input->post("op");
		$id_kegiatan=$this->input->post("id_kegiatan");
		$gambar=$this->input->post("gambar");
		$data = array(
			'no_nota' => $no_nota , 
			'id_kegiatan' => $id_kegiatan, 
			'gambar' => $gambar
		);
		// echo $op;
		// exit();
		if ($op=="tambah") {
			$this->nota_model->save($data);
		}
		else{
			$this->nota_model->ubah($id, $data);
		}

		redirect('nota');
	}
	public function hapus($id)
	{
		$this->nota_model->delete($id);
		redirect('nota');
	}

	public function edit($id)
	{
		$data = array(
			"container" => "nota"
		);
		$data['op']='edit';
		$data['sql']=$this->nota_model->edit($id)->result();
		$this->load->view("template", $data);
	}
}
