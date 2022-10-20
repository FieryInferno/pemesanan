<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tarif_model extends CI_Model
{
	
	   public function delete($id_tarif)
    {
        $this->db->where('id_tarif',  $id_tarif);
    	$this->db->delete('tarif_iklan');
	}

public function ambil_id_tarif($id_tarif)
{
	return $this->db->get_where('tarif_iklan' , ['id_tarif' => $id_tarif])->row_array();
}
 
   
   public function proses_edit_data($id_tarif)
    {
$data = [
"id_tarif" => $this->input->post('id_tarif'),
"jasa_siaran" => $this->input->post('jasa_siaran'),
"satuan" => $this->input->post('satuan'),
"harga" => $this->input->post('harga'),
];
 $this->db->where('id_tarif',  $this->input->post('id_tarif'));
 $this->db->update('tarif_iklan', $data);
 
}
}