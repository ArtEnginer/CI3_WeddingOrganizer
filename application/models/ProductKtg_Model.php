<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productktg_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get('product_category')->result();
    }

    public function getById($id)
    {
        // get only one row
        return $this->db->where('id', $id)->get('product_category')->row();
    }
}
