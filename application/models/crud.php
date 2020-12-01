<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Model {

    public function loginQuery($where)
    {
        return $this->db->select('*')->from("user")->where($where)->get();
    }

    public function insertUser($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function getArticle()
    {
        return $this->db->select("*")->from("tbl_article")->order_by("created_at", "desc")->get();
    }
    
}