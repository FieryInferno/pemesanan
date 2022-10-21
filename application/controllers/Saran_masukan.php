<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran_masukan extends CI_Controller 
{
	public function __construct()
	 {
		parent::__construct();
		$this->load->model('Saran_model');
	 	}



	public function index()
	{
$data['title'] = 'Saran & Masukan';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

$data['saran'] = $this->db->get('saran_masukan')->result_array();

$this->form_validation->set_rules('saran','Saran','required');
$this->form_validation->set_rules('kritik','Kritik','required');
if($this->form_validation->run() == false ) {
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar_klien', $data);
$this->load->view('saran', $data);
$this->load->view('admin/footer');

}else {
	$data = [
	'nama_klien' => $this->input->post('nama_klien'),
	'saran' => $this->input->post('saran'),
	'kritik' => $this->input->post('kritik')
	];
 $this->db->insert('saran_masukan', $data);
$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">New Menu Add! </div>');
				redirect('saran_masukan');


}
}
public function delete($id = null){
	$this->Saran_model->delete($id);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('saran_masukan');

	}
	public function edit_data($id){
$data['title'] = 'Halaman Edit Menu Management';
$data['saran_masukan'] = $this->Saran_model->ambil_id_saran($id);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/index', $data);
$this->load->view('admin/footer');
}

public function proses_edit_data($id = true){
$this->Saran_model->proses_edit_data($id);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Kritik & Saran berhasil diubah!</div>');
            redirect('saran_masukan');
}
}


	

