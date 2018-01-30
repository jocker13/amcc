<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estimasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("estimasi_model");
		$this->load->model("kegiatan_model");
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array(
			"container" => "estimasi"
		);
		$data['op']='tambah';
		$data['sql']=$this->estimasi_model->getEstimasi()->result();
		$data['kegiatan']=$this->kegiatan_model->getKegiatan()->result();
		$this->load->view("template", $data);
	}
	public function simpan()
	{
		$nama_sie=$this->input->post("nama_sie");
		$id=$this->input->post("id");
		$op=$this->input->post("op");
		$nama_estimasi=$this->input->post("nama_estimasi");
		$banyak=$this->input->post("banyak");
		$harga_satuan=$this->input->post("harga_satuan");
		$jumlah=$this->input->post("jumlah");
		$data = array(
			'nama_sie' => $nama_sie, 
			'nama_estimasi' => $nama_estimasi, 
			'banyak' => $banyak,
			'harga_satuan' => $harga_satuan,
	
		);
			// echo $op;
			// exit();
		if ($op=="tambah") {
			$this->estimasi_model->save($data);
		}
		else{
			$this->estimasi_model->ubah($id, $data);
		}

		redirect('estimasi');
	}
	public function hapus($id)
	{
		$this->estimasi_model->delete($id);
		redirect('estimasi');
	}
	public function edit($id)
	{
		$data = array(
			"container" => "estimasi"
		);
		$data['op']='edit';
		$data['sql']=$this->estimasi_model->edit($id)->result();
		$this->load->view("template", $data);
	}
}
