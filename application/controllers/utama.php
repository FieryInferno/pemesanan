<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller 
{
	public function index()
	{
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();//$this->load->view('profile', $data);
//$this->load->view('templates_admin/header', $data);
//$this->load->view('templates_admin/sidebar', $data);
//$this->load->view('templates_admin/topbar', $data);
//$this->load->view('templates_admin/footer');
$this->load->view('blog',$data);
}





}

