<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_my_post extends CI_Controller
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
        $data['content'] = 'content/my_post';
        $data['title']     = 'InstaApp';
        $data['active_beranda']    = '';
        $data['active_post']    = 'active';
        $data['active_search']    = '';
        $data['list_gambar'] = $this->M_data->gambar_saya(['post_file_created_by' => $this->session->userdata('id')]);
        $this->load->view('template/content', $data);
    }

    public function form_post()
    {
        $data['content'] = 'content/post_gambar';
        $data['title']     = 'InstaApp';
        $data['active_beranda']    = '';
        $data['active_post']    = 'active';
        $data['active_search']    = '';
        $this->load->view('template/content', $data);
    }

    public function post_action()
    {
        $post = $this->input->post();

        $ket = $post['keterangan'];
        $config = array(
            'upload_path'   => 'assets/img/img_post/',
            'allowed_types' => 'gif|jpg|png'
        );

        //$this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('failed', $this->upload->display_errors());

            $data['content']   = 'content/post_gambar';
            $data['title']     = 'InstaApp';
            $this->load->view('template/content', $data);
        } else {
            $data_gambar = $this->upload->data();
            $data = array(
                'post_desc'             => $ket,
                'post_file_url'         => $config['upload_path'].time().'_'.$data_gambar['file_name'],
                'post_file_type'        => $data_gambar['file_type'],
                'post_file_size'        => $data_gambar['file_size'],
                'post_file_created_by'  => $this->session->userdata('id'),
                'post_file_created_at'  => date('Y-m-d H:i:s')
            );
            
            $this->M_data->simpan_data('post', $data);
            redirect(base_url('C_my_post'));
        }
    }
}
