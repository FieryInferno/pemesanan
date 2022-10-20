<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
public function __construct() { 
parent::__construct();
		$this->load->model('Menu_user');

   
	}
public function index()
	{
$data['title'] = 'Data User';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

$data['dataklien'] = $this->db->get('user')->result_array();
$data['User'] = $this->Menu_user->getuser();
$this->form_validation->set_rules('name','Name','required');
$this->form_validation->set_rules('email ','Email','required');
$this->form_validation->set_rules('image ','Image','required');
$this->form_validation->set_rules('role_id','Role','required');
$this->form_validation->set_rules('is_active','Active','required');
$this->form_validation->set_rules('alamat','Alamat','required');
$this->form_validation->set_rules('no_telepon','No Telepon','required');
if($this->form_validation->run() == false ) {
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('user', $data);
$this->load->view('admin/footer');

}else {
	$data = [
	'name' => $this->input->post('name'),
	'email' => $this->input->post('email'),
	'image' => $this->input->post('image'),
	'role_id' => $this->input->post('role_id'),
	'is_active' => $this->input->post('is_active'),
	'alamat' => $this->input->post('alamat'),
	'no_telepon' => $this->input->post('no_telepon')
	];
$this->db->insert('user', ['id' => $this->input->post('id')]);
$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">New Menu Add! </div>');
				redirect('user');


}
}
public function delete($id = null){
	$this->Menu_user->delete($id);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('user');

	}
	public function edit_data($id){
$data['title'] = 'Halaman Edit Menu Management';
$data['user_menu'] = $this->Menu_user->ambil_id_user($id);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('admin/user', $data);
$this->load->view('admin/footer');
}

public function proses_edit_data($id  = true){
$this->Menu_user->proses_edit_data($id);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Data User berhasil diubah!</div>');
            redirect('user');


}
public function print($id = true)
 {
$data['title'] = 'Data User';
$data['print'] = $this->Menu_user->tampil_data('user')->result();
$this->load->view('header', $data);

$this->load->view('print_user', $data);
$this->load->view('footer');
	
}

	
}
