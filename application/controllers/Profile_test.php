<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_test extends CI_Controller 
{
    public function profile()
{
    $data = konfigurasi('Profile', 'Kelola Profile');
    $this->template->load('layouts/template', 'authentication/profile', $data);
}

public function updateProfile()
{
    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[15]');
    $this->form_validation->set_rules('alamat', ' Address', 'trim|required|min_length[2]|max_length[15]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[50]');
    $this->form_validation->set_rules('no_telepon', 'Phone Number', 'trim|required|min_length[11]|max_length[12]');

    $id = $this->session->userdata('id');
    $data = array(
        'username' => $this->input->post('username'),
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
    );
    if ($this->form_validation->run() == true) {
        if (!empty($_FILES['photo']['name'])) {
            $upload = $this->_do_upload();

            //delete file
            $user = $this->Auth_model->get_by_id($this->session->userdata('id'));
            if (file_exists('assets/uploads/images/foto_profil/'.$user->photo) && $user->photo) {
                unlink('assets/uploads/images/foto_profil/'.$user->photo);
            }

            $data['photo'] = $upload;
        }
        $result = $this->Auth_model->update($data, $id);
        if ($result > 0) {
            $this->updateProfil();
            $this->session->set_flashdata('msg', show_succ_msg('Data Profil Berhasil diubah'));
            redirect('auth/profile');
        } else {
            $this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
            redirect('auth/profile');
        }
    } else {
        $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
        redirect('auth/profile');
    }
}

public function updatePassword()
{
    $this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required|min_length[5]|max_length[25]');
    $this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required|min_length[5]|max_length[25]');
    $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required|min_length[5]|max_length[25]');

    $id = $this->session->userdata('id');
    if ($this->form_validation->run() == true) {
        if (password_verify($this->input->post('passLama'), $this->session->userdata('password'))) {
            if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
                $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
                redirect('auth/profile');
            } else {
                $data = ['password' => get_hash($this->input->post('passBaru'))];
                $result = $this->Auth_model->update($data, $id);
                if ($result > 0) {
                    $this->updateProfil();
                    $this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
                    redirect('auth/profile');
                } else {
                    $this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
                    redirect('auth/profile');
                }
            }
        } else {
            $this->session->set_flashdata('msg', show_err_msg('Password Salah'));
            redirect('auth/profile');
        }
    } else {
        $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
        redirect('auth/profile');
    }
}

private function _do_upload()
{
    $config['upload_path']          = 'assets/uploads/images/foto_profil/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100; //set max size allowed in Kilobyte
    $config['max_width']            = 1000; // set max width image allowed
    $config['max_height']           = 1000; // set max height allowed
    $config['file_name']            = round(microtime(true) * 1000);
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('photo')) {
        $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
        redirect('auth/profile');
    }
    return $this->upload->data('file_name');
}

}