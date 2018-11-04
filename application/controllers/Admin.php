<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	var $API ="";

	function __construct()
	{
      parent::__construct();
 
	/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('curl');
	/* ------------------ */ 
 
		$this->load->library('grocery_CRUD');
		$this->API="http://localhost:8012/DigitalCampus/";
	}

	public function index()
	{
		$this->load->view("admin/home");		
	}

	//Tab Mahasiswa
	 public function do_upload_mhs()
    {
    	$this->load->model('admin_model');
        $config['upload_path']          = './assets/image/mahasiswa';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Admin/uploadfotomhs', $error);
        }

        else
        {
            $this->admin_model->insertfoto();
            $this->mahasiswa();
        }
     }


	//Grocery CRUD
	public function mahasiswa()
	{
		$crud = new grocery_CRUD();


 		$crud->set_subject('Mahasiswa');
		$crud->set_table('mahasiswa');
		

		$output = $crud->render();
 	
		$this->output_view($output);                
	}

	public function dosen()
	{
		$crud = new grocery_CRUD();


 		$crud->set_subject('Dosen');
		$crud->set_table('dosen');
		

		$output = $crud->render();
 	
		$this->output_view($output);                
	}

	//Tab ruang
	public function ruang()
	{
		$crud = new grocery_CRUD();


 		$crud->set_subject('Ruang');
		$crud->set_table('ruang');
		

		$output = $crud->render();
 	
		$this->output_view_ruang($output);                
	}

	function output_view_ruang($output = null)
 
	{
		$this->load->view('admin/data_table_ruang.php',$output);    
	}

	function create(){
		$data = array(
			'noruang' => $this->input->post('noruang'),
			'namaruang' => $this->input->post('namaruang'),
			'lokasiruang' => $this->input->post('lokasiruang'));
		$this->curl->simple_post($this->API.'/Ruang', $data, array(CURLOPT_BUFFERSIZE => 10));
	}

	function output_view($output = null)
 
	{
		$this->load->view('admin/data_table.php',$output);    
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */