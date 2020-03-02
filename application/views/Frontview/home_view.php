<?php  $this->load->view("frontview/frontview_header") ; ?>




<?php  $this->load->view("frontview/frontview_navbar") ; ?>



<div class="card">



     


  <div class="col-lg-12" >
  <img src="<?php  echo base_url() ;?>/img/lamborghini-605334__340.jpg" class="rounded-top" style="width:100%; height:290px;">

</div>

<div class="carousel-caption ">
<p style="color:white;font-weight:20px;position:relative:top:90px;">We are WeyDeySale.com, if you think of shopping online then think about us</p>
<span class="btn btn-secondary">Shop Now</span>
</div>

</div>

<hr/>


<div class="container mt-3 card-header">

<div class="row">

<?php 
foreach($about_products as $product_details){  ?>

<div class="card bg-white m-4">

<div class="col-lg-6 my-4">

<img src="<?php echo base_url();?>uploads/<?php echo $product_details['product_image'] ?>" style="width:200px;height:200px" class="img img-responsive rounded-top">
<p><?php  echo $product_details['product_name'] ;?></p>
<button class="btn btn-success">Shop </button>

</div>
</div>
<?php }  ?>




</div>

</div>











<?php  $this->load->view("frontview/frontview_footer") ; ?>
