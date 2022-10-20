<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Saran_model1 extends CI_Model
{
	
	   public function delete( $id)
    {
        $this->db->where('id',  $id);
    	$this->db->delete('saran_masukan');
	}

public function ambil_id_saran($id)
{
	return $this->db->get_where('saran_masukan' ,['id' => $id])->row_array();
}
 
   
   public function proses_edit_data($id)
    {
$data = [
"id" => $this->input->post('id'),
"nama_klien" => $this->input->post('nama_klien'),
"kritik" => $this->input->post('kritik'),
"saran" => $this->input->post('saran'),
];
 $this->db->where('id',  $this->input->post('id'));
 $this->db->update('saran_masukan', $data);
}
public function tampil_data($id){
	return $this->db->get('saran_masukan');
}
public function view_kartu($id)
   	{
       $query = $this->db->query("SELECT * FROM saran_masukan where id='$id' LIMIT 1");
       return $query->result_array();
  	}
}