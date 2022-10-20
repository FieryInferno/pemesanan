<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_admin extends CI_Controller 
{
	public function __construct()
  {
    parent::__construct();
    $this->load->model('Memesan_model');
    $this->load->helper('download');
  }

	public function index()
	{
    $data['title'] = 'Data Pemesanan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->model('Memesan_model','menu');

    $data['menu'] = $this->db->get('order_detail')->result_array();
    $data['pesanan'] = $this->Memesan_model->get_pesan()->result();
    //$data['files'] = directory_map('./upload');
    $data['subMenu'] = $this->Memesan_model->getJenisSiaran();
    $data['jenis1'] = $this->db->get('jenis_siaran')->result_array();
  
    $this->form_validation->set_rules('oder_status','Oder Status','required');

    if($this->form_validation->run() == false ) {
      $this->load->view('admin/header', $data);
      $this->load->view('admin/sidebar', $data);
      $this->load->view('admin/topbar', $data);
      $this->load->view('order/datapemesanan', $data);
      $this->load->view('admin/footer');	
    } else {
      $data = ['oder_status' => $this->input->post('oder_status')];

      $this->db->insert('order_detail', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
              Status Pembayaran Berhasil di ubah!</div>');
                redirect('Pemesanan');
    }
  }

public function download($id_detail)
  {

    $data = $this->db->get_where('pemesanan_detail',['id_detail '=>$id_detail])->row();
    force_download('uploads/'.$data->isi_iklan,NULL);
  }
}




