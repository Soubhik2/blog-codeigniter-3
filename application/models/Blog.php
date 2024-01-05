<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Model {

    public function getBlogs($limit){
        return $this->db->order_by('id','DESC')->get('blogs', $limit)->result();
    }

    public function getBlogsLimit($offset, $limit){
        return $this->db->get('blogs', $limit, $offset)->result();
    }

    public function getBlogsLimitLike($like, $offset, $limit){
        return $this->db->like('title', $like)->get('blogs', $limit, $offset)->result();
    }

    public function getBlogData($id){
        // return $this->db->query("SELECT * FROM `blogs` WHERE `id` = $id")->result()[0];
        return $this->db->where('id',$id)->get('blogs')->result()[0];
    }

    public function getRowCount($table){
        return $this->db->get($table)->num_rows();
    }

    public function getRowCountLike($table, $like){
        return $this->db->like('title', $like)->get($table)->num_rows();
    }
}