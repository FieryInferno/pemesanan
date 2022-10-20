<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Menu_user extends CI_Model
{
	
	   public function delete( $id)
    {
        $this->db->where('id',  $id);
    	$this->db->delete('user');
	}

public function ambil_id_user($id)
{
	return $this->db->get_where('user' , ['id' => $id])->row_array();
}
 
   
   public function proses_edit_data($id)
    {
$data = [
"id" => $this->input->post('id'),
"name" => $this->input->post('name'),
"email" => $this->input->post('email'),
"image" => $this->input->post('image'),
"role_id" => $this->input->post('role_id'),
"is_active" => $this->input->post('is_active'),
"alamat" => $this->input->post('alamat'),
"no_telepon" => $this->input->post('no_telepon'),
];
 $this->db->where('id',  $this->input->post('id'));
 $this->db->update('user', $data);
}
public function getuser(){
	$query = "SELECT `user`.*,`user_role`.`role`
			  FROM `user` JOIN `user_role`
			  ON `user`.`role_id` = `user_role`.`id`

			 ";
	return $this->db->query($query)->result_array();
}
public function tampil_data($id){
	return $this->db->get('user');
}
}