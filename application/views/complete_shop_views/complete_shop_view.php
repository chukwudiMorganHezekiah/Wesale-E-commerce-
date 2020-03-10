<?php  $this->load->view("frontview/frontview_header") ; ?>




<?php  $this->load->view("frontview/frontview_footer") ; ?>


<?php  $this->load->view("frontview/frontview_navbar") ; ?>

<div class="container">

<div class="row ">


<div class="col-lg-8  offset-lg-2 bg-white active" id="first" style="margin-top:100px;">
<hr />
<div class="card">
<?php foreach($product_details as $product){ ?>

<div class="card-header">
<div class="col-lg-6 offset-lg-3">
<img class="rounded-top rounded-circle" src="<?php echo base_url() ?>uploads/<?php echo $product['product_image'];?>" style="width:200px;height:200px;">
</div>

</div>
<div class="card-body">
<div class="col-lg-12">

<form class="form-vertical">
<div class="input-group ">
<label for="product_name" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Product Name:</label>
<input type="text" id="product_name" class="disabled form-control  ml-4"   value="<?php echo $product['product_name'] ?>" disabled>
</div>








<div class="input-group mt-4">
<label for="product_specs" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Product Specs:</label>
<input type="text" id="product_specs" class="disabled form-control  ml-4"   value="<?php echo $product['product_specs'] ?>" disabled>
</div>





<div class="input-group mt-4">
<label for="product_category" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Product Category:</label>
<input type="text" id="product_category" class="disabled form-control  ml-4"   value="<?php echo $product['product_category'] ?>" disabled>
</div>





<div class="input-group mt-4">
<label for="product_description" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Product Description:</label>
<input type="text" id="product_description" class="disabled form-control  ml-4"   value="<?php echo $product['product_description'] ?>" disabled>
</div>





<div class="input-group mt-4">
<label for="product_price" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Product Price:</label>

<input type="text" id="product_price" class="disabled form-control  ml-4"   value="<?php echo $product['product_price'] ?>" disabled>
<div class="input-group-append">
      <button class="btn btn-primary" type="button">
        $
      </button>
    </div>
</div>


<div class="input-group mt-4">
<label for="product_created_on" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Number Of Produces To Purchase</label>
<input type="number" id="product_number" class=" form-control  ml-4"   value="1" >
</div>


<div class="input-group mt-4">
<label for="product_created_on" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Product Was Created On:</label>
<input type="text" id="product_created_on" class="disabled form-control  ml-4"   value="<?php echo $product['created_on'] ?>" disabled>
</div>


<div class="input-group mt-4">

<input type="hidden" id="product_id" class="disabled form-control  ml-4"   value="<?php echo $product['id'] ?>" disabled>
</div>



<div class="input-group" >

<input type="submit" id="product_submit_agree" class="btn btn-primary form-control  "   value="Continue" >
</div>


</form>



</div>



<?php } ?>



</div>


</div>

</div>


<hr />






<!-- second complete purchase,personal details -->

<?php $this->load->view("complete_shop_views/complete_shop_personal_details") ;  ?>



</div>
</div>




<style>


.active{
    display:block;
}
.shopping{
    display:none;
}

</style>




<script>


$(document).ready(function(){
  $("#product_submit_agree").click(function(e){
      
      e.preventDefault();
      var id =$("#product_id").val();
      var number_of_products=$("#product_number").val();
      
      $.ajax({

          url:"complete_shop/agree",
          method:"POST",
          data:{id:id,number_of_products:number_of_products},
          success:function(Response){
            console.log(Response);
              if( Response == 1 ){
                  
               
                  $("#first").fadeOut("slow").removeClass("active");
                  $("#second").fadeIn("slow").removeClass("shopping").addClass("active");


              }

          },
          error:function(error){
            console.log(error);

          }
      })

  })
})

</script>
