<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_search_user extends CI_Controller
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
        $data['content'] = 'content/search_user';
        $data['title']     = 'InstaApp';
        $data['active_beranda']    = '';
        $data['active_post']    = '';
        $data['active_search']    = 'active';
        $data['list_user'] = $this->M_data->list_user('user_id != '. $this->session->userdata('id'));
        $this->load->view('template/content', $data);
    }

    public function follow()
    {
        $post       = $this->input->post();
        $following_id_user       = $post['user_id'];
        $follower_id_user   = $this->session->userdata('id');

        $dataIns = array(
            'following_id_user'     => $following_id_user,
            'follower_id_user'      => $follower_id_user,
            'follower_create_by'    => $follower_id_user,
            'follower_create_at'    => date('Y-m-d H:i:s')
        );

        $this->M_data->simpan_data('follower', $dataIns);
    }

    public function unfollow_action()
    {
        $post       = $this->input->post();
        $following_id_user  = $post['user_id'];
        $follower_id_user   = $this->session->userdata('id');

        $where = 'following_id_user = '.$following_id_user.' AND follower_id_user = '.$follower_id_user;
        
        $this->M_data->hapus_data('follower', $where);
    }
}
