<?php

class Profile_model extends CI_Model
{

    public $table       = 'user';
    public $id          = 'user.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function update($data, $id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
	}
	
	public function get_by_id()
    {
        $id = $this->session->userdata('id');
        $this->db->select('
            user.*, user_role.id AS id, user_role.role,
        ');
        $this->db->join('user_role', 'user.id_role = user_role.id');
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();

        return $query->row();
    }

 
}

