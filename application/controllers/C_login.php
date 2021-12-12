<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }

    public function index()
    {
        $data['title']     = 'InstaApp';
        $this->load->view('template/content_login', $data);
    }

    public function signup_page()
    {
        $data['title']     = 'InstaApp';
        $this->load->view('template/content_register', $data);
    }

    public function signup_action()
    {
        $post       = $this->input->post();
        $name       = $post['name'];
        $username   = $post['username'];
        $password   = $post['pass'];
        $repassword = $post['repass'];
        $hashed     = password_hash($password, PASSWORD_DEFAULT);

        if ($password === $repassword) {
            $dataIns = array(
                'user_fullname' => $name,
                'user_name'     => $username,
                'user_pass'     => $hashed
            );

            $this->M_data->simpan_data('user', $dataIns);

            redirect(base_url('C_login'));
        } else {
            $this->session->set_flashdata('failed', 'Password yang anda masukkan tidak sama !');
            redirect(base_url('C_login/signup_page'));
        }
    }

    public function login_action()
    {
        $user = $this->input->post('user', TRUE);
        $pass = $this->input->post('pass', TRUE);

        $cek  = $this->db->get_where('user', ['user_name' => $user]);

        if ($cek->num_rows() > 0) {
            $hasil = $cek->row();
            if (password_verify($pass, $hasil->user_pass)) {
                // membuat session
                $userdata = array(
                    'id' => $hasil->user_id,
                    'nama' => $hasil->user_fullname,
                    'is_login' => TRUE
                );

                $this->session->set_userdata($userdata);

                redirect(base_url('C_beranda'));
            } else {
                $this->session->set_flashdata('failed', 'Password salah !');
                redirect(base_url('C_login'));
            }
        } else {
            $this->session->set_flashdata('failed', 'Username tidak Tersedia !');
            redirect(base_url('C_login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('C_login'));
    }
}
