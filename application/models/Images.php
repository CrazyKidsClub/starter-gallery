<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Images extends CI_Model {
    
    // constructor (good prac)
    function construct(){
        parent::__construct();
    }
    
    // returns all images, descending order, newest first
    function all(){
        $this->db->order_by("id", "desc");
        $query =  $this->db->get('images');
        return $query->result_array();
    }
    
    // returns the 3 newest images
    function newest(){
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}