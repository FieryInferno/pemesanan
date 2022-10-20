<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_klien extends CI_Controller 
{
	public function index()
	{
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$this->load->view('klien_profile/header_klien',$data);
$this->load->view('klien_profile/sidebar_klien',$data);
$this->load->view('klien_profile/topbar_klien',$data);
$this->load->view('klien_profile/profil',$data);
$this->load->view('klien_profile/footer');



	}
	public function edit() 
	{
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
//$this->form_validation->set_rules('name','Name','required|trim');
$this->load->view('klien_profile/header_klien',$data);
$this->load->view('klien_profile/sidebar_klien',$data);
$this->load->view('klien_profile/topbar_klien',$data);
$this->load->view('klien_profile/edit_profile',$data);
$this->load->view('klien_profile/footer');
//$this->load->view('admin/edit',$data);         
            
}
}





