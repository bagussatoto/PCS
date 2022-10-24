<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getProduk()
    {
        $this->db->select('produk.id,produk.admin_id,admin.nama as nama_admin,produk.nama,produk.stok,produk.harga');
        $this->db->from('produk');
        $this->db->join('admin', 'admin.id = produk.admin_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertProduk($data){
        $this->db->insert('produk', $data);

        $insert_id = $this->db->insert_id();
        $result = $this->db->get_where('produk', array('id' => $insert_id));

        return $result->row_array();
    }

    public function updateProduk($data,$id){
        $this->db->where('id', $id);
        $this->db->update('produk', $data);

        $result = $this->db->get_where('produk', array('id' => $id));

        return $result->row_array();
    }

    public function deleteProduk($id){
        $result = $this->db->get_where('produk', array('id' => $id));

        $this->db->where('id', $id);
        $this->db->delete('produk');

        return $result->row_array();
    }

    public function cekProdukExist($id){

        $data = array(
            "id" => $id
        );

        $this->db->where($data);
        $result = $this->db->get('produk');

        if(empty($result->row_array())){
            return false;
        }

        return true;
    }
}