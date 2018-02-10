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
			$id_kegiatan=$this->input->post("id_kegiatan");
			$op=$this->input->post("op");
			$nama_kegiatan=$this->input->post("nama_kegiatan");
			$tanggal=$this->input->post("tanggal");
			$data = array(
				'tahun_kep' => $tahun_kep, 
				'nama_kegiatan' => $nama_kegiatan, 
				'tanggal' => $tanggal,
				'id_users' => $this->session->userdata['logged_in']['id_users']

			);
			// echo $op;
			// exit();
			if ($op=="tambah") {
				$this->kegiatan_model->save($data);
			}
			else{
				$this->kegiatan_model->ubah($id_kegiatan, $data);
			}
			
			redirect('kegiatan');
	}
	public function hapus($id_kegiatan)
	{
			$this->kegiatan_model->delete($id_kegiatan);
			redirect('kegiatan');
	}
	public function edit($id_kegiatan)
	{
			$data = array(
				"container" => "kegiatan"
			);
			$data['op']='edit';
			$data['sql']=$this->kegiatan_model->edit($id_kegiatan)->result();
			$this->load->view("template", $data);
	}
}

