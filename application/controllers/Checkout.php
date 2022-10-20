<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('Memesan_model');
    }

    public function index()
    {
        $data['title'] = 'Checkout Pesanan Anda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Memesan_model','menu');

        $data['subMenu'] = $this->Memesan_model->getJenisSiaran();

  $data['jenis1'] = $this->db->get('jenis_siaran')->result_array();

        $data['checkout'] = $this->db->get('order_detail')->result_array();

        $data['pesanan'] = $this->Memesan_model->get_pesan()->result();

$this->form_validation->set_rules('nama_instansi','Nama Instansi','required');
$this->form_validation->set_rules('id_jenis','Jenis Siaran','required');
$this->form_validation->set_rules('tgl_penyiaran','Tanggal Penyiaran','required');
$this->form_validation->set_rules('tgl_akhirpenyiaran','Tanggal Akhir Penyiaran','required');
$this->form_validation->set_rules('programa ','Programa','required');
$this->form_validation->set_rules('no_telepon','No Telepon','required');
$this->form_validation->set_rules('email','Email','required');
$this->form_validation->set_rules('isi_iklan','Isi Iklan','required');
$this->form_validation->set_rules('catatan ','Catatan','required');
if($this->form_validation->run() == false )
{
        $this->load->view('admin/header_order', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar_klien', $data);
        $this->load->view('order/checkout', $data);
        $this->load->view('admin/footer_order', $data);  
}else{
    $data = [
    'nama_instansi' => $this->input->post('nama_instansi'),
    'id_jenis' => $this->input->post('id_jenis'),
    'tgl_penyiaran' => $this->input->post('tgl_penyiaran'),
    'tgl_akhirpenyiaran' => $this->input->post('tgl_akhirpenyiaran'),
     'no_telepon' => $this->input->post('no_telepon'),
      'email' => $this->input->post('email'),
       'isi_iklan' => $this->input->post('isi_iklan'),
        'catatan' => $this->input->post('catatan'),
         'keterangan_berkas' => $this->input->post('keterangan_berkas'),
    'programa' => $this->input->post('programa')
    ];

     $this->db->insert('pemesanan_detail', $data);
     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Pesanan Berhasil Ditambahkan</div>');
            redirect('Checkout');
                     //  $data = array('upload_data' => $this->upload->data());

                        //$this->load->view('sukses', $data);

            //pdfupload
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'gif|jpg|png|pdf|rar|doc';
    $config['max_size']     = '2048';   


   $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('checkout', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('sukses', $data);


                }

                }
        
      
    }
    public function upload(){
      //pdfupload
$this->load->view('order/checkout', $data);


    }
   public function proses_order()
    {
         $data['title'] = 'Checkout Pesanan Anda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['subMenu'] = $this->Memesan_model->getJenisSiaran();
  $data['jenis'] = $this->db->get('jenis_siaran')->result_array();
        //-------------------------Input data pelanggan--------------------------
        $data1 = array(
    'nama_instansi' => $this->input->post('nama_instansi'),
     'jenis' => $this->input->post('jenis'),
     //'tgl_penyiaran' => $this->input->post('tgl_penyiaran'),
    'id_detail' => $this->input->post('id_detail'),
     'no_telepon' => $this->input->post('no_telepon'),
      'email' => $this->input->post('email'),
       'isi_iklan' => $this->input->post('isi_iklan'),
        'catatan' => $this->input->post('catatan'),
         'keterangan_berkas' => $this->input->post('keterangan_berkas'),
        'order_tanggal' => date('Y-m-d'),

        'waktu_order'  => date('Y-m-d H:i:s'),
    'programa' => $this->input->post('programa'));
                  
         
        $data1 = $this->Memesan_model->tambah_order($data1);
        //-------------------------Input data detail order-----------------------
        if ($cart = $this->cart->contents())
            {
                $grand_total = 0;


if ($cart = $this->cart->contents())
    {      
         $id_detail     = $this->db->insert_id();
                foreach ($cart as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                        $subtotal  = ($item['qty'] * $item['price']);
                        $dataDetail = array(
                       // $id  = array('id' =>$id,
                                        'jasa_siaran' => $item['id'],
                                        'qty' => $item['qty'],
                                        'detail_tarif' => $item['price'],
                                        'id_detail'    => $id_detail,
                                        'detail_tarif_subtotal' =>$grand_total);

                     $this->db->insert('order_detail', $dataDetail);
                       // $proses = $this->Memesan_model->tambah_detail_order($id);
                    }


            $this->cart->destroy();
       $data['kategori'] = $this->Memesan_model->get_kategori_all();
         $this->load->view('admin/header_order', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar_klien', $data);
        $this->load->view('order/sukses', $data);
        $this->load->view('admin/footer_order', $data); 
}
           }

 
    }
        //-------------------------Hapus shopping cart--------------------------
      
    }

