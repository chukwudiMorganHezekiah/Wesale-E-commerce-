

<?php   

defined("BASEPATH") or exit("No aceess here");



class frontview_controller extends CI_Controller{


    public function index(){

    $this->load->model("frontview_model");
       $data['about_products'] =$this->frontview_model->all_products_for_carousel();

        $this->load->view("frontview/home_view",$data);
    }
}