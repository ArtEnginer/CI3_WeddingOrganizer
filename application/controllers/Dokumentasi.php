<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model(array(
            'productktg_model' => 'productktg',
            'dokumentasi_model' => 'dokumentasi'

        ));
    }

    public function index()
    {
        $params['productktg'] = $this->productktg->get_all();
        $data['dokumentasi'] = $this->dokumentasi->get_all();


        get_header($params);
        get_template_part('pages/dokumentasi', $data);
        get_footer();
    }
}
