<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_tarif extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Tarif_model');
	
   
	}
	public function index()
	{
$data['title'] = 'Tarif Iklan';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

$data['daftarTarif'] = $this->db->get('tarif_iklan')->result_array();


$this->form_validation->set_rules('tarif','Tarif','required');

if($this->form_validation->run() == false ) {
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('tarif', $data);
$this->load->view('admin/footer');

}else {
$this->db->insert('tarif_iklan', ['id_tarif' => $this->input->post('id_tarif')]);
$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">New Menu Add! </div>');
				redirect('daftar_tarif');


}

}
public function delete($id_tarif = null){
	$this->Tarif_model->delete($id_tarif);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('daftar_tarif');

	}
	public function edit_data($id_tarif){
$data['title'] = 'Halaman Edit Menu Management';
$data['daftarTarif'] = $this->Tarif_model->ambil_id_tarif($id_tarif);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/index', $data);
$this->load->view('admin/footer');
}

public function proses_edit_data($id_tarif = true){
$this->Tarif_model->proses_edit_data($id_tarif);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Daftar Tarif berhasil diubah!</div>');
            redirect('daftar_tarif');


}
public function print($id = true){
	//$data['saran'] = $this->db->get('saran_masukan')->result_array();
	$data['title'] = 'Saran & Masukan';

$data['daftarTarif'] = $this->db->get('tarif_iklan')->result_array();

$this->load->view('header', $data);
	$this->load->view('print/print_tarif', $data);
$this->load->view('footer');

}
}
