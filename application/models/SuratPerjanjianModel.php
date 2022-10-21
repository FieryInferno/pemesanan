<?php
defined('BASEPATH') or exit('No direct script access allowed');


class SuratPerjanjianModel extends CI_Model
{
	public function getAll()
  {
    $this->db->select('surat_perjanjian.*, user.name');
    $this->db->join('user', 'surat_perjanjian.user_id = user.id');

    if ($this->session->role_id === 2) {
      $this->db->where('surat_perjanjian.user_id', $this->session->id);
    }

    return $this->db->get('surat_perjanjian')->result_array();
  }
}