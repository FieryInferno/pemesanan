<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Penyiaran_model extends CI_Model
{

public function getInfoSiaran(){
	$query = "SELECT `order_detail`.*,`tarif_iklan`.`jasa_siaran`
			  FROM `order_detail` JOIN `tarif_iklan`
			  ON `order_detail`.`jasa_siaran` = `tarif_iklan`.`id_tarif`

			 ";
	return $this->db->query($query)->result_array();
}
public function get_pesan()
{
$this->db->select('*');
$this->db->from('order_detail');
$this->db->join('pemesanan_detail', 'pemesanan_detail.id_detail = order_detail.id_detail');
$this->db->join('tarif_iklan', 'order_detail.jasa_siaran = tarif_iklan.id_tarif');
return $this->db->get('');
}

public function delete($id_detail)
    {
        $this->db->where('id_detail',  $id_detail);
    	$this->db->delete('pemesanan_detail');
	}
 
  
public function ambil_id_info($id_detail)
{
	return $this->db->get_where('pemesanan_detail' , ['id_detail' => $id_detail])->row_array();
}
public function ambil_id_order($id)
{
	return $this->db->get_where('order_detail' , ['id' => $id])->row_array();
}  
   public function proses_edit_data($id_detail)
    {
$data = [
"id_detail" => $this->input->post('id_detail'),
"tgl_penyiaran" => $this->input->post('tgl_penyiaran'),
"tgl_akhirpenyiaran" => $this->input->post('tgl_akhirpenyiaran'),
"waktu_siaran" => $this->input->post('waktu_siaran'),
];
 $this->db->where('id_detail',  $this->input->post('id_detail'));
 $this->db->update('pemesanan_detail', $data);
}
}