<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile1 extends CI_Controller 
{
	public function index()
	{
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$this->load->view('profile_blog',$data);


	}

}
