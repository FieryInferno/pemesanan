<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Riwayat_model');
  }

  public function index(){
    $data['title'] = 'Riwayat Pemesanan';
    $data['title1'] = 'Riwayat Pesanan Anda';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pesanan_user'] = $this->Riwayat_model->get_pesan()->result();

    $this->load->view('admin/header_order', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar_klien', $data);
    $this->load->view('riwayat', $data);
    $this->load->view('admin/footer_order', $data);  
  }

  public function upload($id)
  {
    $config['allowed_types'] = 'pdf|png|jpg|jpeg';
    $config['upload_path'] = './upload/';

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('bukti_pembayaran')){
      $data['bukti_pembayaran'] = $this->upload->data('file_name');
    }else{
      $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> ' . $this->upload->display_errors() . '</div>');
      redirect('riwayat');
    }

    $this->db->update('pemesanan_detail', $data, ['id_detail' => $id]);

    $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Berhasil upload bukti pembayaran!</div>');
    redirect('riwayat');
  }
}
