<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User_model extends CI_Model
{
	public function ambil_id_user($id)
{
	return $this->db->get_where('user' , ['id' => $id])->row_array();
}
 
   
   public function proses_edit_data($id)
    {
$data = [
"id" => $this->input->post('id'),
"name" => $this->input->post('name'),
"alamat" => $this->input->post('alamat'),
"no_telepon" => $this->input->post('no_telepon'),
];
 $this->db->where('id',  $this->input->post('id'));
 $this->db->update('user', $data);
}
}