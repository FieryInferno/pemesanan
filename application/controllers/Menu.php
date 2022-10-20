<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function __construct()
	 {
		parent::__construct();
		$this->load->model('Menu_model1');
		is_logged_in();
	 	}



	public function index()
	{
$data['title'] = 'Menu Management';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

$data['menu'] = $this->db->get('user_menu')->result_array();
$this->form_validation->set_rules('menu','Menu','required');

if($this->form_validation->run() == false ) {
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/index', $data);
$this->load->view('admin/footer');

}else {
$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">New Menu Add! </div>');
				redirect('menu');


}
}
public function delete($id = null){
	$this->Menu_model1->delete($id);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('menu');

	}
	public function edit_data($id){
$data['title'] = 'Halaman Edit Menu Management';
$data['user_menu'] = $this->Menu_model1->ambil_id_menu($id);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/index', $data);
$this->load->view('admin/footer');
}

public function proses_edit_data($id  = true){
$this->Menu_model1->proses_edit_data($id);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Menu berhasil diubah!</div>');
            redirect('menu');


}
public function submenu(){
$data['title'] = 'Sub Menu Management';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$this->load->model('Menu_model1','menu');

$data['subMenu'] = $this->menu->getSubMenu();
$data['menu'] = $this->db->get('user_menu')->result_array();

$this->form_validation->set_rules('title','Title','required');
$this->form_validation->set_rules('menu_id','Menu','required');
$this->form_validation->set_rules('url','URL','required');
$this->form_validation->set_rules('icon','icon','required');

if($this->form_validation->run() == false )
{
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/submenu', $data);
$this->load->view('admin/footer');	
}else{
	$data = [
	'title' => $this->input->post('title'),
	'menu_id' => $this->input->post('menu_id'),
	'url' => $this->input->post('url'),
	'icon' => $this->input->post('icon'),
	'is_active' => $this->input->post('is_active')
	];
	 $this->db->insert('user_sub_menu', $data);
	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           New Sub Menu Added!</div>');
            redirect('menu/submenu');
}

}
public function edit_data_submenu($id = true){
$data['title'] = 'Halaman Edit Sub Menu Management';
$data['user_menu'] = $this->Menu_model1->ambil_id_submenu($id);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/submenu', $data);
$this->load->view('admin/footer');
}

public function proses_edit_data_submenu($id  = true){
$this->Menu_model1->proses_edit_data_submenu($id);
$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">
            Sub Menu berhasil diubah!</div>');
            redirect('menu/submenu');
}
public function delete1($id = true){
$data['title'] = 'Hapus Data Sub Menu Management';
$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
$this->load->model('Menu_model1','menu');

$data['subMenu'] = $this->menu->getSubMenu();
$data['menu'] = $this->db->get('user_menu')->result_array();

$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar', $data);
$this->load->view('admin/topbar', $data);
$this->load->view('Menu/submenu', $data);
$this->load->view('admin/footer');

	$this->Menu_model1->delete1($id);
	//$this->session->set_flashdata('flash','Didelete');
	$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data Telah dihapus! </div>');
	redirect('menu/submenu');

	}

}
