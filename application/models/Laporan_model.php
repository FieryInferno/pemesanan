<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
  public function get_all_data(){}

  public function getJenisSiaran(){
    $query = "SELECT `pemesanan_detail`.*,`jenis_siaran`.`jenis`
      FROM `pemesanan_detail` JOIN `jenis_siaran`
      ON `pemesanan_detail`.`id_jenis` = `jenis_siaran`.`id`
    ";
    return $this->db->query($query)->result_array();
  }

  public function tambah_order($data1)
  {
    $this->db->insert('pemesanan_detail', $data1);
    $data1 = $this->db->insert_id();

    return (isset($id)) ? $id : FALSE;
  }

  public function tambah_detail_order($id)
  {
    $this->db->insert('order_detail', $id);
  }

  public function get_kategori_all()
  {
    $query = $this->db->get('tarif_iklan');
    return $query->result_array();   
  }

  public function get_pesan()
  {
    $this->db->select('*');
    $this->db->from('order_detail');
    $this->db->join('pemesanan_detail', 'pemesanan_detail.id_detail = order_detail.id_detail');
    $this->db->join('tarif_iklan', 'order_detail.jasa_siaran = tarif_iklan.id_tarif');
    
    if ($this->input->get('tanggal_awal') && $this->input->get('tanggal_akhir')) {
      $this->db->where('order_tanggal >=', $this->input->get('tanggal_awal'));
      $this->db->where('order_tanggal <=', $this->input->get('tanggal_akhir'));
    }

    return $this->db->get('');
  }

}