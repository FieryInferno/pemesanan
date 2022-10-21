<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Role_model extends CI_Model
{

    public $table       = 'tbl_user';
    public $id          = 'tbl_user.id';
	
	   public function delete( $id)
    {
        $this->db->where('id',  $id);
    	$this->db->delete('user_role');
	}

public function ambil_id_role($id)
{
	return $this->db->get_where('user_role' , ['id' => $id])->row_array();
}
 
   
   public function proses_edit_data($id)
    {
$data = [
"id" => $this->input->post('id'),
"role" => $this->input->post('role'),
];
 $this->db->where('id',  $this->input->post('id'));
 $this->db->update('user_role', $data);
}
 public function select(){

            echo $this->db->get('user_access_menu')->num_rows();

      }

  public function get_by_id()
    {
        $id = $this->session->userdata('id');
        
        $this->db->join('user_role', 'user.id_role = user_role.id');
        $this->db->from($this->table);
        $this->db->where($this->email, $email);
        $this->db->update('user');
        $query = $this->db->get();

        return $query->row();
    }
    
public function hitungJumlahAsset()
{   
    $query = $this->db->get('user');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }


}
public function hitungJumlahPemesanan()
{   
    $query = $this->db->get('pemesanan_detail');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }

}
}