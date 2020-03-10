<?php
defined("BASEPATH")  or exut("No access here");

class complete_shop_view extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function select_product_details($id){
        

      return  $this->db->select("*")->from("products")->where("id",$id)->get()->result_array();

    }

    public function insert_first_collections($insert_data){
        

      return  $this->db->insert('Notifications',$insert_data);

    }

    public function select_data_about_product($id,$number_of_products){

       return $this->db->select("id")->from("Notifications")->where("product_id",$id)->where("number_of_products",$number_of_products)->get()->result_array();
    }

    public function insert_remaining_data($data){
      

     return  $this->db->set($data)->where('id', $_SESSION['identity_id'])->update('Notifications');
     

    }

    
}