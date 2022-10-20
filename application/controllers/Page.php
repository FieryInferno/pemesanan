<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Page extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('keranjang_model');
    }
    public function index()
        {
    $data['produk'] = $this->keranjang_model->get_produk_all();      
    $this->load->view('admin/header_order', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar_klien', $data);
    $this->load->view('shopping/list_produk',$data);
    $this->load->view('admin/footer_order', $data); 
        }
    public function tentang()
        {
    $data['kategori'] = $this->keranjang_model->get_kategori_all();
    $this->load->view('admin/header_order', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar_klien', $data);
    $this->load->view('pages/tentang',$data);
    $this->load->view('admin/footer_order', $data); 
        }
    public function cara_bayar()
        {
    
    $this->load->view('admin/header_order', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar_klien', $data);
    $this->load->view('pages/cara_bayar',$data);
    $this->load->view('admin/footer_order', $data); 
        }
}