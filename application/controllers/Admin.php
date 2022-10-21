<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Role_model');
		$this->load->database();
	}

	public function index()
	{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Dashboard';
    $data['title1'] = 'Selamat Datang';
    $data['total_asset'] = $this->Role_model->hitungJumlahAsset();
    $data['total_pesanan'] = $this->Role_model->hitungJumlahPemesanan();

    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar', $data);
    $this->load->view('admin/index', $data);
    //$this->load->view('admin/dashboard', $data);
    $this->load->view('admin/footer');
	}

	public function role()
	{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Role';
    $data['role'] = $this->db->get('user_role')->result_array();

    $this->form_validation->set_rules('role','Role','required');

    if($this->form_validation->run() == false ) {
      $this->load->view('admin/header', $data);
      $this->load->view('admin/sidebar', $data);
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/role', $data);
      $this->load->view('admin/footer');
    }else {
      $this->db->insert('user_role', ['role' => $this->input->post('role')]);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Role baru telah ditambahkan! </div>');
      redirect('admin/role');
    }
	}

  public function delete($id = null)
  {
    $this->Role_model->delete($id);
    //$this->session->set_flashdata('flash','Didelete');
    $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
    redirect('admin/role');
	}

	public function edit_data($id)
  {
    $data['title'] = 'Halaman Edit Menu Role';
    $data['user_role'] = $this->Role_model->ambil_id_role($id);
    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar', $data);
    $this->load->view('Menu/index', $data);
    $this->load->view('admin/footer');
  }

  public function editprofile(){
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Edit Profile Saya';

    $this->form_validation->set_rules('name','Name','required|trim');

    if($this->form_validation->run() == false) {
      $this->load->view('admin/header', $data);
      $this->load->view('admin/sidebar', $data);
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/edit', $data);
      $this->load->view('admin/footer');
    } else {
      $name = $this->input->post('name');
      $alamat = $this->input->post('alamat');	
      $no_telepon = $this->input->post('no_telepon');
      $email = $this->input->post('email');
      $upload_image = $_FILES['gambar']['name'];

      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['upload_path'] = './assets/img/profile/';
        $config['file_name'] = 'pro' . time();

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')){
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else { 
          echo $this->upload->display_errors();
          die();
        }
      }

      $this->db->set('name', $name);
      $this->db->set('alamat', $alamat);
      $this->db->set('no_telepon', $no_telepon);
      $this->db->where('email', $email);
      $this->db->update('user');
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Your Profile has been updated!</div>');
      redirect();
    }
  }

public function proses_edit_data($id  = true){
$this->Role_model->proses_edit_data($id);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Role berhasil diubah!</div>');
            redirect('admin/role');


}
public function roleaccess($role_id)
	{

$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$data['title'] = 'Role Access';
$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();



$this->db->where('id !=', 1);
$data['menu'] = $this->db->get('user_menu')->result_array();

$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('admin/role_access', $data);
$this->load->view('admin/footer');
	}
public function changeaccess(){
	$menu_id = $this->input->post('menuId');
	$role_id = $this->input->post('roleId');

	$data = [
	'role_id' => $role_id,
	'menu_id' => $menu_id

	];

	$result = $this->db->get_where('user_access_menu', $data);
	if($result->num_rows() < 1) {
		$this->db->insert('user_access_menu', $data);
	}else{
		$this->db->delete('user_access_menu', $data);
	}
	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Access Changed! </div>');
}
public function profile()
	{

$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$data['title'] = 'Profile Saya';


$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('admin/profile', $data);
$this->load->view('admin/footer');



}
}






