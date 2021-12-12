<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_beranda extends CI_Controller
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

    public function index()
    {
        $data['content']        = 'content/beranda';
        $data['title']          = 'InstaApp';
        $data['active_beranda'] = 'active';
        $data['active_post']    = '';
        $data['active_search']  = '';
        $data['list_gambar']    = $this->M_data->list_pict_beranda($this->session->userdata('id'))->result();
        $this->load->view('template/content', $data);
    }

    public function like()
    {
        $post = $this->input->post();

        $post_id = $post['post_id'];

        $data = array(
            'post_like_id_post'           => $post_id,
            'post_like_id_user'           => $this->session->userdata('id'),
            'post_like_created_by'        => $this->session->userdata('id'),
            'post_like_created_at'        => date('Y-m-d H:i:s')
        );

        $this->M_data->simpan_data('post_like', $data);
    }
}
