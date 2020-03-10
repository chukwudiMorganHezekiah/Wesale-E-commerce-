<?php
defined("BASEPATH") or exit("No access here");

class complete_shop extends CI_Controller{

    
    public function home($id){
        $this->load->model("complete_shop_view");

        $data["product_details"]=$this->complete_shop_view->select_product_details($id);
        $this->load->view("complete_shop_views/complete_shop_view",$data);
        
    }

    public function agree(){
        $id=$this->input->post("id");
        $number_of_products=$this->input->post("number_of_products");
        $this->load->model("complete_shop_view");
        $insert_data=[
            "product_id"=>$id,
            "number_of_products"=>$number_of_products

        ];
       if($this->complete_shop_view->insert_first_collections($insert_data)){
           $recieved_details=$this->complete_shop_view->select_data_about_product($id,$number_of_products);
        if(count($recieved_details) == 1){
            foreach($recieved_details as $details){
                $identity_id= $details['id'];
                $_SESSION["identity_id"]=$identity_id;
                echo TRUE;

            }

        }
        
       }else{
        echo FALSE;

       }
       

    }

    public function personal_detail(){

        $name=$this->input->post("name");
        $country=$this->input->post("country");
        $state=$this->input->post("state");
        $location=$this->input->post("location");
        


if(empty($name) || empty($country) || empty($location)  || empty($state)){
    echo $name;
   
}else{
    


    $this->load->model("complete_shop_view");
    $data=[
        "name"=>$name,
        "country"=>$country,
        "state"=>$state,
        "location"=>$location

    ];
    if($this->complete_shop_view->insert_remaining_data($data)){
        echo TRUE;
    }else{
        echo FALSE;

    }
}
        


    }
}