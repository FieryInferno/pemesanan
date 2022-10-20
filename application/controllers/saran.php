<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller 
{
	public function __construct()
	 {
		parent::__construct();
		$this->load->model('Saran_model1');
		$this->load->helper(array('url','download'));	
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
$this->load->view('saran_admin', $data);
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
	$this->Saran_model1->delete($id);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('saran_masukan');

	}
	public function edit_data($id){
$data['title'] = 'Halaman Edit Menu Management';
$data['saran_masukan'] = $this->Saran_model1->ambil_id_saran($id);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/index', $data);
$this->load->view('admin/footer');
}

public function proses_edit_data($id = true){
$this->Saran_model1->proses_edit_data($id);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Kritik & Saran berhasil diubah!</div>');
            redirect('saran_masukan');
}
public function print($id = true){
	//$data['saran'] = $this->db->get('saran_masukan')->result_array();
	$data['title'] = 'Saran & Masukan';

	$data['kritik'] = $this->Saran_model1->tampil_data('saran_masukan')->result();

$this->load->view('header', $data);
	$this->load->view('print_data', $data);
$this->load->view('footer');

}
public function pdf($id = true)
{
	$this->load->library('dompdf_gen');
	$data['kritik'] = $this->Saran_model1->tampil_data('saran_masukan')->result();
	$this->load->view('cetak-kartu', $data);
	$paper_size = 'A4';
	$orientation = 'landscape';
	$html = $this->output->get_output();
	$this->dompdf->set_paper($paper_size, $orientation);
	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("Saran dan Masukan.pdf", array('Attachment' => 0));

}
}




	

