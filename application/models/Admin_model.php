<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function cek_login($tabel, $where){
        // $data = $this->db->get($tabel);
        return $this->db->get_where($tabel,$where);
        // return $data->result_array();
    }
}