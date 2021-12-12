<?php
class M_data extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_data($table)
    {
        $db = $this->load->database('default', true);
        return $db->get($table);
    }
    function get_data_where($table, $where)
    {
        $db = $this->load->database('default', true);
        return $db->get_where($table, $where);
    }
    function simpan_data($table, $data)
    {
        $db = $this->load->database('default', true);
        $db->insert($table, $data);
    }
    function update_data($table, $data, $where)
    {
        $db = $this->load->database('default', true);
        $db->update($table, $data, $where);
    }
    function hapus_data($table, $where)
    {
        $db = $this->load->database('default', true);
        $db->delete($table, $where);
    }

    function gambar_saya($where)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('user', 'post_file_created_by = user_id', 'left');
        $this->db->where($where);
        $this->db->order_by('post_file_created_at DESC');

        $query = $this->db->get();
        return $query->result();
    }

    function list_user($where){
        $query = $this->db->query(
            "SELECT
                *,
                COUNT(follower_id_user) AS follower,
                CASE
                    WHEN follower_id_user = " . $where . " THEN 'ya'
                    ELSE 'tidak'
                END AS is_follow
            FROM
                user
                LEFT JOIN follower ON following_id_user = user_id
            WHERE ".$where."
            GROUP BY user_id"
        );

        return $query->result();
    }

    function unfollow($where)
    {
        $this->db->query(
            "DELETE FROM follower WHERE = ".$where
        );
    }

    function list_pict_beranda($where)
    {
        return $this->db->query(
            "SELECT
                * 
            FROM
                post
                INNER JOIN follower ON following_id_user = post_file_created_by
                INNER JOIN user ON post_file_created_by = user_id 
            WHERE follower_id_user = ".$where
        );
    }

    function pict_detail($where)
    {
        return $this->db->query(
            "SELECT
                * 
            FROM
                post
                LEFT JOIN post_like ON post_id = post_like_id_post
            WHERE post_id = " . $where
        );
    }
}
