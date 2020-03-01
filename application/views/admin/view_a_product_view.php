<?php  $this->load->view("admin/admin_header_view"); ?>

<!--admin body -->

<!--header-->
                   

<?php $this->load->view("admin/admin_navbar_view");?>


<div class="card bg-white">

<div class="card-header row">
    <div class="col-lg-8 ">

   <?php foreach($data as $product_details){  ?>
    <div class="">
    <form class="form-horizontal" method="post" action="change_product_details/<?php echo $product_details["id"]  ?>">

    <h3 class="" style="color:indigo;">Product Name: </h3>
    <input type="text" class="form-control" name="product_name" value="<?php echo $product_details["product_name"]  ?>">
    <?php  echo form_error("product_name","<div class='error'>","</div>"); ?>


    <h3 class="mt-3" style="color:indigo;">Product Category: </h3>
    <input type="text" class="form-control" value="<?php echo $product_details["product_category"]  ?>" name="product_catergory">
    <?php  echo form_error("product_catergory","<div class='error'>","</div>"); ?>

    
    <h3 class="mt-3" style="color:indigo;">Product Price: </h3>
    <input type="number" class="form-control" value="<?php echo $product_details['product_price'];?>"  name="product_price">
    <?php  echo form_error("product_price","<div class='error'>","</div>"); ?>


    <h3 class="mt-3" style="color:indigo;">Product Specs: </h3>
    <input class="form-control" placeholder="Product Specs" value="<?php echo $product_details['product_specs']; ;?>" name="product_specs" auto_complete>
    <?php  echo form_error("product_specs","<div class='error'>","</div>"); ?>


    <h3 class="mt-3" style="color:indigo;">Product Description: </h3>
    <textarea name="product_description"  placeholder="Product Description" class="form-textarea" rows="10" cols="47"  ><?php  echo $product_details["product_description"]; ?></textarea>
   <?php  echo form_error("product_description","<div class='error'>","</div>"); ?>
   

  <span class="mt-3" style="font-size:20px;color:indigo" >Product State <span class="btn btn-primary"><?php echo $product_details["product_state"] ?></span></span>
   <br /><br />
  <select name="product_state">
       <option value="on_sale">ON SALES </option>

       <option value="on_transfer">ON TRANSFER </option>

       <option value="on_deliver">ON DELIVERED</option>


   </select><br /><br />



   <button class="btn btn-primary" style="float:right">Change Product Data</button>




</form>

  </div>
   <?php } ?>


    </div>

<?php foreach($data as $product_details) { ?>


    <div class="col-lg-4">
<p style="color:indigo">Change Product Image</p>


   


    <img src="<?php echo base_url() ?>uploads/<?php echo($product_details["product_image"]) ?>" width="100px" height="100px" class="ml-5 img img-responsive rounded-circle">

<form method="post" action="change_product_image/<?php echo $product_details["id"];  ?>" enctype="multipart/form-data"  class="mt-4 form-horizontal">

<input type="file" name="new_image" class="form-control">

<button class="mt-3 btn btn-small btn-success">Change Product Image</button>
   </form>
   </div>

<?php } ?>

</div>



</div>

<?php 
 if($this->session->flashdata("error")){ ?>

    <p><?php echo $this->session->flashdata("error") ?></p>

<?php }?>


<!--footer-->
<?php $this->load->view("admin/admin_footer") ?>