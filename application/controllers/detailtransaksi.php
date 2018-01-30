<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailTransaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("detailtran_model");
		$this->load->helper('url');
	}
	public function index()
	{
		$data = array(
			"container" => "detailtransaksi"
		);
		$data['op']='tambah';
		$data['sql']=$this->detailtran_model->getDetail()->result();
		$this->load->view("template", $data);
	}
	public function simpan()
	{
		$nama_sie=$this->input->post("nama_sie");
		$id=$this->input->post("id");
		$op=$this->input->post("op");
		$nama_transaksi=$this->input->post("nama_transaksi");
		$banyak=$this->input->post("banyak");
		$harga_satuan=$this->input->post("harga_satuan");
		$no_nota=$this->input->post("no_nota");
		$data = array(
			'nama_sie' => $nama_sie , 
			'nama_transaksi' => $nama_transaksi, 
			'banyak' => $banyak, 
			'harga_satuan' => $harga_satuan, 
			'no_nota' => $no_nota
		);
		// print_r($data);
		// echo $op;
		// exit();
		if ($op=="tambah") {
			$this->detailtran_model->save($data);
		}
		else{
			$this->detailtran_model->ubah($id, $data);
		}
		// $this->user_model->save($data);
		redirect('detailtransaksi');
	}
	public function hapus($id)
	{
		$this->detailtran_model->delete($id);
		redirect('detailtransaksi');
	}

	public function edit($id)
	{
		$data = array(
			"container" => "detailtransaksi"
		);
		$data['op']='edit';
		$data['sql']=$this->detailtran_model->edit($id)->result();
		$this->load->view("template", $data);
	}
}

