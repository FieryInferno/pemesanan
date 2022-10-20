<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth_model extends CI_Model
{
    public $table       = 'user';
    public $data          = 'user.email';

    public function __construct()
    {
        parent::__construct();
    }

    public function update($data1, $emaik)
    {
        $this->db->where($this->email, $data);
        $this->db->update($this->table, $data1);
        return $this->db->affected_rows();
	}
    
	}
