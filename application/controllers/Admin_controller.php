<?php
defined("BASEPATH") or exit("No access here");

class admin_controller extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model("admin_model");
    }
    public function index(){
        /**this is the admin index view loader */

     if($_SESSION['user']){

              /**Pagination  */

        $this->load->library("pagination");

        $config['base_url']='http://localhost/WeDeySale/index.php/admin_controller/index';
        $config['per_page']=4;
        $config['num_links']=4;
        $config['total_rows']=$this->db->get("products")->num_rows();

        $this->pagination->initialize($config);


        $all_data= $this->admin_model->select_all_products();
        $values["all_data"]=$this->db->get('products',$config['per_page'],$this->uri->segment(3))->result_array();
        $this->load->view("admin/home_view",$values);

     }else{

        redirect("/dashboard/login");

     }
    }

    public function addproduct(){
      if($_SESSION['user']){
        $this->load->helper("form");
        
        $this->load->view("admin/add_product_view");

      }else{
        redirect("/dashboard/login");

      }
    }

    public function add_product_form_submit(){

       if($_SESSION['user']){

           
   

        $this->load->helper("form");
        $this->load->library("form_validation");

        $rules=[
            [
                "field"=>"product_name",
                "label"=>"Product Name",
                "rules"=>"required|callback_is_product_name_exist"
            ],
            [
                "field"=>"product_catergory",
                "label"=>"Product Category",
                "rules"=>"required"
            ],
            [
                "field"=>"product_specs",
                "label"=>"Product Specs",
                "rules"=>"required"
            ],
            [
                "field"=>"product_description",
                "label"=>"Product Description",
                "rules"=>"required|min_length[10]"
            ],
            [
                "field"=>"product_price",
                "label"=>"Product Price",
                "rules"=>"required|min_length[1]"
                
            ]

            ];

            $this->form_validation->set_rules($rules);
            if($this->form_validation->run() == FALSE){
                $this->addproduct();

            }else{
                $data['product_name']=$this->input->post("product_name");
                $data['product_category']=$this->input->post("product_catergory");
                $data['product_specs']=$this->input->post("product_specs");
                $data['product_price']=$this->input->post("product_price");
                $data['product_description']=$this->input->post("product_description");
                


                //image rules

                $config["upload_path"]="./uploads/";
                $config["allowed_types"]="jpg|png|gif";
          


                $this->load->library("upload",$config);

                if($this->upload->do_upload("product_image")){
                    $data["product_image"]=$this->upload->data("file_name");
                   if($this->admin_model->insert_product($data)){
                       redirect("admin");
                   }

                }else{
                    echo $this->upload->display_errors();
                }

                

                
            }

       }else{
        redirect("/dashboard/login");
       }
    }

    public function is_product_name_exist($value){

    if($_SESSION['user']){

        $returned=$this->admin_model->is_product_name_exist($value);
        if($returned){
            $this->form_validation->set_message("is_product_name_exist","This product name already exists");
             return FALSE;
        }else{
            return TRUE;
        }

    }else{

        redirect("/dashboard/login");

    }

    }

    public function view_product($id){
       if($_SESSION['user']){

        if($this->admin_model->view_product($id) > 0){
            

            $value["data"]=$this->admin_model->view_product($id);
            $this->load->view("admin/view_a_product_view",$value);

        }

       }else{

        redirect("/dashboard/login");

       }



    }

    public function change_product_image($id){
if($_SESSION['user']){

    

        
    $config["upload_path"]="./uploads/";
    $config["allowed_types"]="jpg|png|gif";
    



    $this->load->library("upload",$config);

    if($this->upload->do_upload("new_image")){
        $data["product_image"]=$this->upload->data("file_name");
        

        if($this->admin_model->change_product_image($id,$data)){

        redirect("admin/view_product/$id");


        }else{
           
            $this->session->set_flashdata("error","image couldn't be changed");
            $this->view_product($id);

            redirect("admin/view_product/$id");
            
        }

    }else{
        echo $this->upload->display_errors();
    }


}else{

    redirect("/dashboard/login");

}

        
    }

    public function change_product_details($id){
    if($_SESSION['user']){


        $this->load->library("form_validation");

        
        $rules=[
            [
                "field"=>"product_name",
                "label"=>"Product Name",
                "rules"=>"required"
            ],
            [
                "field"=>"product_catergory",
                "label"=>"Product Category",
                "rules"=>"required"
            ],
            [
                "field"=>"product_specs",
                "label"=>"Product Specs",
                "rules"=>"required"
            ],
            [
                "field"=>"product_description",
                "label"=>"Product Description",
                "rules"=>"required|min_length[10]"
            ],
            [
                "field"=>"product_price",
                "label"=>"Product Price",
                "rules"=>"required|min_length[1]"
                
            ]

            ];

            $this->form_validation->set_rules($rules);
            if($this->form_validation->run() == FALSE){
               
                $this->session->set_flashdata("success","could not update your product file,make sure to input all the fields");
                redirect("admin/view_product/$id");

            }else{

                $data['product_name']=$this->input->post("product_name");
                $data['product_category']=$this->input->post("product_catergory");
                $data['product_specs']=$this->input->post("product_specs");
                $data['product_price']=$this->input->post("product_price");
                $data['product_description']=$this->input->post("product_description");
                $data["product_state"]= $this->input->post("product_state");


               if($this->admin_model->update_product_data($id,$data)) {
               
                $this->session->set_flashdata("success","product data updated");
                redirect("admin/view_product/$id");

               }else{
                $this->session->set_flashdata("success","could not update your product file,make sure to input all the fields");
                redirect("admin/view_product/$id");

               }

            }

    }else{
        redirect("/dashboard/login");
    }
        
    }

    public function dashboard(){
        
        if(isset($_SESSION['user'])){
            redirect("admin");
      
        }else{
            $this->load->view("admin/dashboard_view");

        }

        
    }

    public function dashboard_login(){

        $rules=[
            [
                "field"=>"username",
                "label"=>"Username",
                "rules"=>"required"
            ],
            [
                "field"=>"password",
                "label"=>"Password",
                "rules"=>"required"
            ]
        ];

        $this->load->library("form_validation");


        $this->form_validation->set_rules($rules);


        if($this->form_validation->run() == FALSE){

            redirect("/dashboard");
            session_start();
            $_SESSION['error']="Please enter all the fields";
            echo ($_SESSION['error']);

        }else{

            $data["username"]=$this->input->post("username");
            
            $data["password"]=$this->input->post("password");

            

            if($this->admin_model->dashboard_login($data)){
                session_start();
                unset($_SESSION['error']);

                $_SESSION['user']="set";



                redirect("admin_controller");

            }else{
            redirect("/dashboard/login");

            }

        }
    }


    public function dashboard_logout(){
        session_start();

        unset($_SESSION['user']);
        redirect("/dashboard/login");
    }




    public function notification_view($id){
        if(isset($_SESSION['user'])){
            $this->load->model("admin_model");
           $data['notifications'] =$this->admin_model->select_notification($id);
           $data["notification_customer_details"]=$this->admin_model->select_notification_customer_details($id);
            $this->load->view("admin/notification_home",$data);

        }else{
            redirect("/dashboard/login");

            }
    }

    public function delete_request($id){

        if(isset($_SESSION['user'])){
            $this->load->model("admin_model");
           if($this->admin_model->delete_request($id)){
               redirect("admin");

           }

        }else{
            redirect("/dashboard/login");

            }


    }

    public function search_products(){
       $search_key= $this->input->post("search_products");
       $this->load->model("admin_model");
       $result_from_search['result_from_search']=$this->admin_model->search_products($search_key);
       $this->load->view("frontview/search_view",$result_from_search) ;
        
    }

    public function search_results($id){
        $this->load->model("admin_model");
        $result_from_search['result_from_search']=$this->admin_model->search_results($id);
        
        $this->load->view("frontview/search_results",$result_from_search) ;
    }
}