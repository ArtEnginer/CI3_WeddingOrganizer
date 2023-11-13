<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        verify_session('admin');

        $this->load->model(array(
            'dokumentasi_model' => 'dokumentasi',
        ));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $params['title'] = 'Kelola Produk ' . get_store_name();

        $config['base_url'] = site_url('admin/dokumentasi/index');
        $config['total_rows'] = $this->dokumentasi->count_all();
        $config['per_page'] = 16;
        $config['uri_segment'] = 4;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);

        $config['first_link']       = '«';
        $config['last_link']        = '»';
        $config['next_link']        = '›';
        $config['prev_link']        = '‹';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->load->library('pagination', $config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $dokumentasi['dokumentasi'] = $this->dokumentasi->get_all($config['per_page'], $page);
        $dokumentasi['pagination'] = $this->pagination->create_links();

        $this->load->view('header', $params);
        $this->load->view('dokumentasi/dokumentasi', $dokumentasi);
        $this->load->view('footer');
    }


    public function add()
    {
        $params['title'] = 'Tambah Dokumentasi Baru';

        $dokumentasi['flash'] = $this->session->flashdata('add_new_dokumentasi_flash');

        $this->load->view('header', $params);
        $this->load->view('dokumentasi/add', $dokumentasi);
        $this->load->view('footer');
    }

    public function add_dokumentasi()
    {
        $config['upload_path'] = './assets/uploads/dokumentasi/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'dokumentasi-' . date('YmdHis');

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('picture')) {
            // Handle the upload error
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/dokumentasi/add', $error);
        } else {
            $upload_data = $this->upload->data();

            $data = array(
                'nama' => $upload_data['file_name'],
                'keterangan' => $this->input->post('keterangan'),
            );

            $this->dokumentasi->add($data);

            $this->session->set_flashdata('add_new_dokumentasi_flash', '<div class="alert alert-success">Dokumentasi baru berhasil ditambahkan</div>');
            redirect('admin/dokumentasi');
        }
    }

    public function delete($id)
    {
        $this->dokumentasi->delete($id);
        $this->session->set_flashdata('add_new_dokumentasi_flash', '<div class="alert alert-success">Dokumentasi berhasil dihapus</div>');
        redirect('admin/dokumentasi');
    }
}
