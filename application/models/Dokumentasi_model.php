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
}
