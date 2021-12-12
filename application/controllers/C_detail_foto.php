<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_detail_foto extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');

        if (!empty($this->session->userdata('is_login') == FALSE)) {
            // alert peringatan bahwa harus login
            $this->session->set_flashdata('failed', 'Anda Belum login, silahkan login terlebih dahulu !');
            redirect(base_url('C_login'));
        }
    }

    public function index($post_id)
    {
        $data['content']        = 'content/detail_foto';
        $data['title']          = 'InstaApp';
        $data['active_beranda'] = 'active';
        $data['active_post']    = '';
        $data['active_search']  = '';
        $data['list_gambar']    = $this->M_data->pict_detail($post_id)->result();
        $this->load->view('template/content', $data);
    }
}
