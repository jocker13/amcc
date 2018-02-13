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
		$tahun  = $this->input->post('tahun');
		$kegiatan  = $this->input->post('kegiatan');
		$data = array(
			"container" => "estimasi"
		);
		$data['op']='tambah';
		$data['kegiatan_id']=$kegiatan; 
		$data['nama_kegiatan']=$this->kegiatan_model->getKegiatanByID($kegiatan)->result();
		$data['sql']=$this->estimasi_model->getEstimasis($kegiatan)->result();
		$id_users = $this->session->userdata()['logged_in']['id_users'];
		$data['kegiatan']=$this->kegiatan_model->getKegiatanestimasi($id_users)->result();
		$this->load->view("template", $data);
	}
	public function simpan()
	{
		/*echo "tested";
		exit();*/
		$jenis=$this->input->post("jenis");
		$id_estimasi=$this->input->post("id_estimasi");
		$id_kegiatan=$this->input->post("id_kegiatan");
		$op=$this->input->post("op");
		$nama_sie=$this->input->post("nama_sie");
		$nama_estimasi=$this->input->post("nama_estimasi");
		$banyak=$this->input->post("banyak");
		$harga_satuan=$this->input->post("harga_satuan");
		$jumlah=$this->input->post("jumlah");
		$data = array(
			'id_kegiatan' => $id_kegiatan, 
			'jenis'=> $jenis,
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
			$this->estimasi_model->ubah($id_estimasi, $data);
		}

		redirect('estimasi');
	}
	public function hapus($id_estimasi)
	{
		$this->estimasi_model->delete($id_estimasi);
		redirect('estimasi');
	}
	public function edit($id_estimasi)
	{
		$data = array(
			"container" => "estimasi"
		);
		$data['op']='edit';
		$data['sql']=$this->estimasi_model->edit($id_estimasi)->result();
		$this->load->view("template", $data);
	}
}
