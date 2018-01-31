<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realisasi extends CI_Controller {
public function __construct(){
		parent::__construct();
		$this->load->model("realisasi_model");
		$this->load->model("kegiatan_model");
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array(
			"container" => "realisasi"
		);
		$data['op']='tambah';
		$data['sql']=$this->realisasi_model->getRealisasi()->result();
		$data['kegiatan']=$this->kegiatan_model->getKegiatan()->result();
		$this->load->view("template", $data);
	}
	public function simpan()
	{
		$jenis=$this->input->post("jenis");
		$id=$this->input->post("id");
		$op=$this->input->post("op");
		$nama_sie=$this->input->post("nama_sie");
		$nama_estimasi=$this->input->post("nama_transaksi");
		$banyak=$this->input->post("banyak");
		$harga_satuan=$this->input->post("harga_satuan");
		$jumlah=$this->input->post("jumlah");
		$no_nota=$this->input->post("no_nota");
		$data = array(
			'jenis'=> $jenis,
			'nama_sie' => $nama_sie, 
			'nama_estimasi' => $nama_estimasi, 
			'banyak' => $banyak,
			'harga_satuan' => $harga_satuan,
			'no_nota' => $no_nota
	
		);
			// echo $op;
			// exit();
		if ($op=="tambah") {
			$this->realisasi_model->save($data);
		}
		else{
			$this->realisasi_model->ubah($id, $data);
		}

		redirect('realisasi');
	}
	public function hapus($id)
	{
		$this->realisasi_model->delete($id);
		redirect('realisasi');
	}
	public function edit($id)
	{
		$data = array(
			"container" => "realisasi"
		);
		$data['op']='edit';
		$data['sql']=$this->realisasi_model->edit($id)->result();
		$this->load->view("template", $data);
	}
}
