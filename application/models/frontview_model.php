<?php


defined("BASEPATH") or exit("No access here");
class frontview_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function all_products_for_carousel(){

        return $this->db->select("*")->from("products")->get()->result_array();
    }

}








































