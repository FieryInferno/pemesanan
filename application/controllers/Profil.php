<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller 
{
	public function __construct() 
{ 
	parent::__construct();
	 $this->load->database();
	$this->load->library('form_validation');
	//$this->load->model->('ModelUser');
	is_logged_in();

}
	public function index()
	{
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$this->load->view('profile_saya',$data);



	}
	public function edit() 
	{
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

$this->form_validation->set_rules('name','Name','required|trim');
$this->form_validation->set_rules('alamat','Address','required|trim');
$this->form_validation->set_rules('no_telepon ','Phone Number','required|trim');

if($this->form_validation->run() == false) {
$this->load->view('admin/edit',$data);

} else {
	$name = $this->input->post('name');
	//$alamat = $this->input->post('alamat', true);
	//$no_telepon = $this->input->post('no_telepon', true);
	$email = $this->input->post('email');

	$this->db->set('name', $name);
	//$this->db->set('alamat', $alamat);
	//$this->db->set('no_telepon', $no_telepon);

	$this->db->where('email', $email);
	$this->db->update('user', $data);

	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Your Profile has been updated!</div>');
			redirect('Profil/index');
}
}
}





