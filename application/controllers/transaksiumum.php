<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiUmum extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("transaksiumum_model");
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array(
			"container" => "transaksiumum"
		);
		$data['op']='tambah';
		$data['sql']=$this->transaksiumum_model->getTransaksiUmum()->result();
		$this->load->view("template", $data);
	}
	public function simpan()
	{
		$nama_transaksi=$this->input->post("nama_transaksi");
		$id=$this->input->post("id");
		$op=$this->input->post("op");
		$tanggal=$this->input->post("tanggal");
		$jenis=$this->input->post("jenis");
		$jumlah=$this->input->post("jumlah");
		$saldo=$this->input->post("saldo");
		$data = array(
			'nama_transaksi' => $nama_transaksi , 
			'tanggal' => $tanggal,
			'jenis' => $jenis, 
			'jumlah' => $jumlah, 
			'saldo' => $saldo 
		);
		// echo $op;
		// exit();
		if ($op=="tambah") {
			$this->transaksiumum_model->save($data);
		}
		else{
			$this->transaksiumum_model->ubah($id, $data);
		}

		redirect('transaksiumum');
	}
	public function hapus($id)
	{
		$this->transaksiumum_model->delete($id);
		redirect('transaksiumum');
	}

	public function edit($id)
	{
		$data = array(
			"container" => "transaksiumum"
		);
		$data['op']='edit';
		$data['sql']=$this->transaksiumum_model->edit($id)->result();
		$this->load->view("template", $data);
	}
}
