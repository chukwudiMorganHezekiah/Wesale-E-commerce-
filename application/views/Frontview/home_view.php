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

<div class="col-lg-6 ">

<img src="<?php echo base_url();?>uploads/<?php echo $product_details['product_image'] ?>" style="width:200px;height:200px" class="my-4 img img-responsive rounded-top">
<div class="col-lg-8 offset-lg-3">
<p class="text-nowrap"><?php  echo $product_details['product_name'] ;?></p>
<div class="" style="text-align:center"><button class="btn btn-success mb-3 ml-3" data-toggle="modal" data-target="#productmodal<?php echo $product_details['id']?>">Shop </button></div>
</div>

</div>
</div>



<!--modal-->

<div class="modal fade" id="productmodal<?php echo $product_details['id']?>" tabindex="-1" role="dialog" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">

       <div class="col-lg-6 offset-lg-4">
       <img src="<?php echo base_url();?>uploads/<?php echo $product_details['product_image'] ?>" style="width:100px;height:100px;" class="rounded-circle img img-responsive ">
</div>
</div>

<div class="modal-body">



<div clas="container">
<div class="row card bg-white ">




<div class="col-lg-12" style="text-align:center;"><h3 class="" style="text-align:center;color:indigo">Product Name</h3></div>
<div class="col-lg-12" style="text-align:center;"><p><b><?php  echo $product_details['product_name'];?></b></p></div>


<div class="col-lg-12" style="text-align:center;"><h3 class="" style="text-align:center;color:indigo">Product Price</h3></div>
<div class="col-lg-12" style="text-align:center;"><p><b><?php  echo "$".$product_details['product_price'];?></b></p></div>

<div class="col-lg-12" style="text-align:center;"><h3 class="" style="text-align:center;color:indigo">Product Description</h3></div>
<div class="col-lg-12" style="text-align:center;"><p><b><?php  echo $product_details['product_description'];?></b></p></div>



</div>
<?php
$product_id=$product_details['id'];
 ?>

<a href="index.php/completeshop/<?php echo $product_id; ?>" style="float:right"class="mt-3 btn btn-info">Shop</a>

</div>


</div>

</div>


</div>
</div>

<?php }  ?>




</div>

</div>











<?php  $this->load->view("frontview/frontview_footer") ; ?>
