<?php


defined("BASEPATH") or exit("No access here");
class admin_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function select_all_products(){
return $this->db->select("*")->from("products")->order_by("id","DESC")->get()->result_array();


    }

    //all the products 


    public function is_product_name_exist($value){

     return $this->db->select("product_name")->from("products")->where("product_name",$value)->get()->result();
      


    }

    public function insert_product($data){
     return $this->db->insert("products",$data);
    }

    public function view_product($id){
      return $this->db->select("*")->from("products")->where("id",$id)->get()->result_array();
    }

    public function change_product_image($id,$data){
      return $this->db->where("id",$id)->update("products",$data);
    }

    public function update_product_data($id,$data){

      return $this->db->where("id",$id)->update("products",$data);

    }

    public function dashboard_login($data){

     return  $this->db->select("username")->from("users")->where($data)->get()->result();

    }

    public function select_notification($id){
      return  $this->db->select("*")->from("products")->where("id",$id)->get()->result_array();

    }

    public function select_notification_customer_details($id){
      return  $this->db->select("*")->from("notifications")->where("product_id",$id)->get()->result_array();

    }

    public function delete_request($id){

      return $this->db->where("id",$id)->delete("notifications");
    }

    public function search_products($search_key){
     return  $this->db->query("SELECT * FROM PRODUCTS  WHERE MATCH(PRODUCT_NAME) AGAINST('$search_key') ")->result_array();
    }

    public function search_results($id){
      return $this->db->select("*")->from("products")->where("id",$id)->get()->result_array();
    }
}