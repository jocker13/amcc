<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("kegiatan_model");
		$this->load->helper('url');
	}
	public function index()
	{
		$data = array(
			"container" => "kegiatan"
		);
		$data['op']='tambah';
		$data['sql']=$this->kegiatan_model->getKegiatan()->result();
		$this->load->view("template", $data);	
	}
	public function simpan()
	{
			$tahun_kep=$this->input->post("tahun_kep");
			$id=$this->input->post("id");
			$op=$this->input->post("op");
			$nama_kegiatan=$this->input->post("nama_kegiatan");
			$tanggal=$this->input->post("tanggal");
			$data = array(
				'tahun_kep' => $tahun_kep, 
				'nama_kegiatan' => $nama_kegiatan, 
				'tanggal' => $tanggal
			);
			// echo $op;
			// exit();
			if ($op=="tambah") {
				$this->kegiatan_model->save($data);
			}
			else{
				$this->kegiatan_model->ubah($id, $data);
			}
			
			redirect('kegiatan');
	}
	public function hapus($id)
	{
			$this->kegiatan_model->delete($id);
			redirect('kegiatan');
	}
	public function edit($id)
	{
			$data = array(
				"container" => "kegiatan"
			);
			$data['op']='edit';
			$data['sql']=$this->kegiatan_model->edit($id)->result();
			$this->load->view("template", $data);
	}
}

