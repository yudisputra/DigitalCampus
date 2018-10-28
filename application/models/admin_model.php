<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	 public function insertfoto()
    {
         $object = array('nim' => $this->input->post('nim'), 'foto' => $this->upload->data('file_name'));
         $this->db->insert('mahasiswa', $object);
    }

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */