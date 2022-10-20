<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif_iklan extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Tarif_model');
	
   
	}
	public function index()
	{
$data['title'] = 'Tarif Iklan';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$this->load->model('Tarif_model','menu');

$data['daftarTarif'] = $this->db->get('tarif_iklan')->result_array();

$this->form_validation->set_rules('jasa_siaran','Jasa Siaran','required');
$this->form_validation->set_rules('satuan','Satuan','required');
$this->form_validation->set_rules('harga','Harga','required');
if($this->form_validation->run() == false )
{
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('admin/tarif_admin', $data);
$this->load->view('admin/footer');	
}else{
	$data = [
	'jasa_siaran' => $this->input->post('jasa_siaran'),
	'satuan' => $this->input->post('satuan'),
	'harga' => $this->input->post('harga')
	];
	 $this->db->insert('tarif_iklan', $data);
	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           New Tarif Added!</div>');
            redirect('tarif_iklan');


}

}
public function delete($id_tarif = null){
	$this->Tarif_model->delete($id_tarif);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('tarif_iklan');

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
            redirect('tarif_iklan');


}

}
