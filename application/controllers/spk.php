<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
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
    $data['surat'] = $this->SuratPerjanjianModel->getAll();
    $data['klien'] = $this->db->get_where('user', ['role_id' => 2])->result_array();

    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar_klien', $data);
    $this->load->view('surat', $data);
    $this->load->view('admin/footer_order', $data);  
  }

  public function create()
  {
    $config['allowed_types'] = 'pdf';
    $config['upload_path'] = './upload/';

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('surat_perjanjian')){
      $data['surat_perjanjian'] = $this->upload->data('file_name');
    }else{
      $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> ' . $this->upload->display_errors() . '</div>');
      redirect('spk');
    }

    $data['user_id'] = $this->input->post('user_id');

    $this->db->insert('surat_perjanjian', $data);

    $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Berhasil tambah surat perjanjian!</div>');
    redirect('spk');
  }

  public function update($id)
  {
    if ($_FILES['name'] !== '') {
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '2048';	
      $config['upload_path'] = './upload/';
  
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
  
      if ($this->upload->do_upload('surat_perjanjian')){
        $data['surat_perjanjian'] = $this->upload->data('file_name');
      }else{
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> ' . $this->upload->display_errors() . '</div>');
        redirect('spk');
      }
    }

    $data['user_id'] = $this->input->post('user_id');

    $this->db->update('surat_perjanjian', $data, ['id' => $id]);

    $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Berhasil edit surat perjanjian!</div>');
    redirect('spk');
  }

  public function delete($id)
  {
    $this->db->delete('surat_perjanjian', ['id' => $id]);
    $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Berhasil hapus surat perjanjian!</div>');
    redirect('spk');
  }
}