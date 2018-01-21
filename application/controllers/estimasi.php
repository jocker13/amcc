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
		$data['sekertaris']=$this->estimasi_model->getEstimasiSekertasris()->result();
		$data['sd']=$this->estimasi_model->getEstimasiSd()->result();
		$data['kegiatan']=$this->kegiatan_model->getKegiatan()->result();
		$this->load->view("template", $data);
	}
}
