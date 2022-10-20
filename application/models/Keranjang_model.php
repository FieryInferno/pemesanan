<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Keranjang_model extends CI_Model {
 
    public function get_produk_all()
    {
        $query = $this->db->get('tarif_iklan');
        return $query->result_array();
    } 
   
 
    public function tambah_order($data)
    {
        $this->db->insert('tbl_order', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
 
    public function tambah_detail_order($data)
    {
        $this->db->insert('order_detail', $data);
    }
}
?>