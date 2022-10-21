<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan extends CI_Controller 
{
    public function __construct()
     {
        parent::__construct();
        $this->load->model('Memesan_model');
        
        }
    public function index()
    {

$data['title'] = 'Memesan Iklan';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

//$data['tarif'] = $this->Memesan_model->get_all_data();
$data['tarif'] = $this->db->get('tarif_iklan')->result_array();
$data['detail'] = $this->db->get('order_detail')->result_array();

$this->form_validation->set_rules('jasa_siaran','Jasa Siaran','required');
$this->form_validation->set_rules('satuan','Satuan','required'); 
$this->form_validation->set_rules('tarif','Tarif','required');
$this->form_validation->set_rules('harga','Harga','required');
$this->form_validation->set_rules('keterangan','Keterangan','required');


if($this->form_validation->run() == false )
{
$this->load->view('admin/header_order', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar_order', $data);
$this->load->view('order/klien', $data);
$this->load->view('admin/footer_order', $data); 
}else{
  $data = [
  'jasa_siaran' => $this->input->post('jasa_siaran'),
  'keterangan' => $this->input->post('keterangan'),
  'harga' => $this->input->post('harga'),
  'tarif' => $this->input->post('tarif')
  ];
   $this->db->insert('tarif_iklan', $data);
   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           New Sub Menu Added!</div>');
            redirect('pesan');
}

}


public function add(){
$redirect_page = $this->input->post('redirect_page');
$data = array(
        'id' => $this->input->post('id_tarif'),
        'qty'     =>  $this->input->post('qty'),
        'price'   => $this->input->post('price'),
        'name'    => $this->input->post('name'),

);

$this->cart->insert($data);
redirect($redirect_page, 'refresh');


}
public function cart(){

$data['title'] = 'Cart Pesanan Anda';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

//$data['tarif'] = $this->Memesan_model->get_all_data();
$data['tarif'] = $this->db->get('tarif_iklan')->result_array();
$data['detail'] = $this->db->get('order_detail')->result_array();

$this->form_validation->set_rules('id_tarif','ID Tarif Iklan','required'); 
$this->form_validation->set_rules('jasa_siaran','Jasa Siaran','required');
$this->form_validation->set_rules('detail_tarif','Detail Tarif','required'); 
$this->form_validation->set_rules('total_iklan','Total Iklan','required');
$this->form_validation->set_rules('detail_tarif_subtotal','Total Bayar','required');
$this->form_validation->set_rules('waktu_order','Waktu Order','required');


if($this->form_validation->run() == false )
{
$this->load->view('admin/header_order', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar_klien', $data);
$this->load->view('order/cart', $data);
$this->load->view('admin/footer_order', $data); 
}else{
  $data = [
  'id_tarif' => $this->input->post('id_tarif'),
  'jasa_siaran' => $this->input->post('jasa_siaran'),
  'detail_tarif' => $this->input->post('detail_tarif'),
  'total_iklan' => $this->input->post('total_iklan'),
  'detail_tarif_subtotal' => $this->input->post('detail_tarif_subtotal'),
  'waktu_order' => $this->input->post('waktu_order')  
  ];
   $this->db->insert('tarif_iklan', $data);
   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           New Sub Menu Added!</div>');
            redirect('pesan');

}

}
public function delete($rowid){

$this->cart->remove($rowid);
 redirect('pesan/cart');

 }
 public function update(){
  $i = 1;
  foreach ($this->cart->contents() as $items) {
    $data = array(
        'rowid' => $items['rowid'],
        'qty'   => $this->input->post($i . '[qty]'),
);
$this->cart->update($data);
$i++;

  }
   redirect('pesan/cart');
  
 }
  public function clear(){
$this->cart->destroy();
 redirect('pesan');

 }
  }
