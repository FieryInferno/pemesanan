<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //$this->load->library('template_front');
    $this->load->model('Laporan_model');
  }

  public function index()
  {
    $data['title'] = 'Laporan';
    $data['title1'] = 'Laporan Pemesanan Iklan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['detail'] = $this->db->get('pemesanan_detail')->result_array();
    $data['menu'] = $this->db->get('order_detail')->result_array();
    $data['jenis1'] = $this->db->get('jenis_siaran')->result_array();
    $data['pesanan'] = $this->Laporan_model->get_pesan()->result();

    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar_klien', $data);
    $this->load->view('laporan', $data);
    $this->load->view('admin/footer_order', $data);  
  }
        //-------------------------Hapus shopping cart--------------------------
    public function print($id = true){
    //$data['saran'] = $this->db->get('saran_masukan')->result_array();
    $data['title'] = 'Saran & Masukan';

$data['pesanan'] = $this->Laporan_model->get_pesan()->result();


$this->load->view('header', $data);
$this->load->view('print/print_laporan', $data);
$this->load->view('footer');
} 

    }

