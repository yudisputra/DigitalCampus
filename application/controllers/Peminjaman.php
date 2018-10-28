<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	var $API ="";
	function __construct() {
	parent::__construct();
	$this->API="http://localhost:8012/DigitalCampus/index.php";
	$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('pinjam/home');
	}

	public function pinjam()
	{
		$this->load->view('pinjam/scanktm');
	}

	public function mahasiswa($nim)
	{
		$this->load->model('kunci_model');
		$data["mahasiswa"] = json_decode($this->curl->simple_get($this->API.'/mahasiswa/?nim='.$nim));
		$data["API"] = $this->API;
		$data["ruang"] = $this->kunci_model->getRuangan();
		$this->load->view('pinjam/formpinjam',$data);
	}

	public function inputpeminjaman()
	{
		 $this->load->model('kunci_model');
		 $this->kunci_model->insertpinjam();
		 $data["pinjam"] = $this->kunci_model->tabelpinjam();
		 $this->load->view('pinjam/tabelpinjam',$data);
	}

	public function datatabelpinjam()
	{
		 $this->load->model('kunci_model');
		 $data["pinjam"] = $this->kunci_model->tabelpinjam();
		 $this->load->view('pinjam/tabelpinjam',$data);
	}

}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */