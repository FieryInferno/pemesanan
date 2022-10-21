<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Riwayat_model extends CI_Model
{
  public function get_pesan()
  {
    $this->db->select('*');
    $this->db->from('order_detail');
    $this->db->join('pemesanan_detail', 'pemesanan_detail.id_detail = order_detail.id_detail');
    $this->db->join('tarif_iklan', 'order_detail.jasa_siaran = tarif_iklan.id_tarif');

    if ($this->session->role_id === '2') {
      $this->db->where('pemesanan_detail.user_id', $this->session->id);
    }

    return $this->db->get('');
  }
}