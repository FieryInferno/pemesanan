<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller 
{
	public function index()
	{

$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
//echo "Selamat Datang ". $data['user']['name'];

//$this->load->view('templates_admin/header', $data);
//$this->load->view('templates_admin/sidebar', $data);
//$this->load->view('templates_admin/topbar', $data);
//$this->load->view('admin/index', $data);
$this->load->view('admin/edit', $data);
//$this->load->view('templates_admin/footer');




	}





}