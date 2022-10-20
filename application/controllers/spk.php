<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('spk_model');
		$this->load->database();


	}
	public function index()
	{

$data['title'] = 'Surat Perjanjian';
$data['title1'] = 'Surat Perjanjian Kerja Sama';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

$data['detail'] = $this->db->get('pemesanan_detail')->result_array();
$data['menu'] = $this->db->get('order_detail')->result_array();
$data['jenis1'] = $this->db->get('jenis_siaran')->result_array();


       $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar_klien', $data);
        $this->load->view('surat', $data);
        $this->load->view('admin/footer_order', $data);  
    }
        //-------------------------Hapus shopping cart--------------------------
	}