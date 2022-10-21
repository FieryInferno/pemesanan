<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->database();
    $this->load->library('form_validation');
		$this->load->model('User_model');
		is_logged_in();
	}

	public function index()
	{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Profil Saya';

    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar_klien', $data);
    $this->load->view('profile/index', $data);
    $this->load->view('admin/footer');
	}

  public function edit(){
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Edit Profile Saya';

    $this->form_validation->set_rules('name','Name','required|trim');
    
    if($this->form_validation->run() == false) {
      $this->load->view('admin/header', $data);
      $this->load->view('admin/sidebar', $data);
      $this->load->view('admin/topbar', $data);
      $this->load->view('klien/edit', $data);
      $this->load->view('admin/footer');
    } else {
      $name = $this->input->post('name');
      $alamat = $this->input->post('alamat');	
      $no_telepon = $this->input->post('no_telepon');
      $email = $this->input->post('email');
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '2048';	
        $config['upload_path'] = './assets/img/profile/';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')){
          $old_image = $data['user']['gambar'];
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }

          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $this->db->set('name', $name);
      $this->db->set('alamat', $alamat);
      $this->db->set('no_telepon', $no_telepon);	
      $this->db->where('id', $this->session->id);
      $this->db->update('user');
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Your Profile has been updated!</div>');
			redirect('Klien');
    }
  }

public function proses_edit_data($id  = true){
$this->User_model->proses_edit_data($id);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Profile berhasil diubah!</div>');
            redirect('Klien');


}
}