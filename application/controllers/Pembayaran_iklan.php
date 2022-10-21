<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_iklan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pembayaran_model');
		$this->load->database();
	}

	public function index()
	{
    $data['title'] = 'Informasi Pembayaran';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['detail'] = $this->db->get('pemesanan_detail')->result_array();
    $data['menu'] = $this->db->get('order_detail')->result_array();
    $data['pesanan'] = $this->Pembayaran_model->get_pesan()->result();
    $data['info'] = $this->Pembayaran_model->getInfoSiaran();
    $data['jenis1'] = $this->db->get('jenis_siaran')->result_array();   
    $data['bayar'] = $this->Pembayaran_model->get_pembayaran()->result();

    $this->form_validation->set_rules('oder_status','Oder Status','required');
    $this->form_validation->set_rules('tgl_penyiaran','Tanggal Penyiaran','required');
    $this->form_validation->set_rules('tgl_akhirpenyiaran','Tanggal Akhir Penyiaran','required');
    $this->form_validation->set_rules('nama_instansi','Nama Instansi','required');
    $this->form_validation->set_rules('jasa_siaran','Jasa Siaran','required');
    $this->form_validation->set_rules('jenis','Jenis Siaran','required');
    $this->form_validation->set_rules('waktu_siaran','Waktu Siaran','required');
    $this->form_validation->set_rules('qty','Total Siaran','required');
    $this->form_validation->set_rules('programa','Programa','required');

    if($this->form_validation->run() == false )
    {
      $this->load->view('admin/header', $data);
      $this->load->view('admin/sidebar', $data);
      $this->load->view('admin/topbar', $data);
      $this->load->view('Informasi/pembayaran', $data);
      $this->load->view('admin/footer');	
    } else {
      $data = [
        'oder_status' => $this->input->post('oder_status'),
        'tgl_penyiaran' => $this->input->post('tgl_penyiaran'),
        'tgl_akhirpenyiaran' => $this->input->post('tgl_akhirpenyiaran'),
        'waktu_siaran' => $this->input->post('waktu_siaran')
      ];
      $this->db->insert('order_detail', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Status Pembayaran Berhasil di ubah!</div>'
      );
      redirect('Pemesanan');
    }
  }

public function edit($id_detail = true){

$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$data['title'] = 'Halaman Edit';
$data['title1'] = 'Halaman Edit Informasi Penyiaran';

$data['detail'] = $this->db->get('pemesanan_detail')->result_array();
$data['order'] = $this->db->get('order_detail')->result_array();

$data['info'] = $this->Penyiaran_model->ambil_id_info($id_detail);
$data['pesanan'] = $this->Penyiaran_model->get_pesan()->result();


$this->form_validation->set_rules('order_status','Oder Status','required');
$this->form_validation->set_rules('tgl_penyiaran','Tanggal Penyiaran','required');
$this->form_validation->set_rules('tgl_akhirpenyiaran','Tanggal Akhir Penyiaran','required');
$this->form_validation->set_rules('nama_instansi','Nama Instansi','required');
$this->form_validation->set_rules('jasa_siaran','Jasa Siaran','required');
$this->form_validation->set_rules('jenis','Jenis Siaran','required');
$this->form_validation->set_rules('waktu_siaran','Waktu Siaran','required');
$this->form_validation->set_rules('qty','Total Siaran','required');
$this->form_validation->set_rules('programa','Programa','required');

if($this->form_validation->run() == false) {
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Informasi/editinfo', $data);
$this->load->view('admin/footer');

}else {

	$order_status = $this->input->post('order_status');
	$tgl_penyiaran = $this->input->post('tgl_penyiaran');
	$tgl_akhirpenyiaran = $this->input->post('tgl_akhirpenyiaran');	
	$waktu_siaran = $this->input->post('waktu_siaran');
	$nama_instansi = $this->input->post('nama_instansi');

	
	$this->db->set('order_status', $order_status);
	$this->db->set('tgl_penyiaran', $tgl_penyiaran);
	$this->db->set('tgl_akhirpenyiaran', $tgl_akhirpenyiaran);
	$this->db->set('waktu_siaran', $waktu_siaran);

 	
	$this->db->where('id_detail', $id_detail);
	$this->db->update('pemesanan_detail');

	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Informasi Penyiaran Berhasil Diupdate!</div>');
			redirect('Penyiaran/edit');
}

    }
    public function edit_data_submenu($id_detail = true){
$data['title'] = 'Halaman Edit Sub Menu Management';
$data['info'] = $this->Penyiaran_model->ambil_id_info($id_detail);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Informasi/siaran_iklan', $data);
$this->load->view('admin/footer');	
}
    public function proses_edit_data_submenu($id_detail  = true){
 $data['pesanan'] = $this->Penyiaran_model->get_pesan()->result();
$this->Penyiaran_model->proses_edit_data($id_detail);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Informasi Berhasil di update!</div>');
            redirect('Penyiaran');
}
public function delete($id_detail = null){
$data['title'] = 'Hapus Data Sub Menu Management';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$this->load->model('Penyiaran_model','menu');
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Informasi/editinfo', $data);
$this->load->view('admin/footer');

	$this->Penyiaran_model->delete($id_penyiaran);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('Penyiaran');

	}
	}