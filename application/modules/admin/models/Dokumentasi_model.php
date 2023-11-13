<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dokumentasi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get('dokumentasi')->result();
    }

    public function count_all()
    {
        return $this->db->get('dokumentasi')->num_rows();
    }

    public function add(array $dokumentasi)
    {
        $this->db->insert('dokumentasi', $dokumentasi);

        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('dokumentasi');

        return $this->db->affected_rows();
    }
}
