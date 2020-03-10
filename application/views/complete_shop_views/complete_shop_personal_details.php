<div id="second" class="col-lg-8  offset-lg-2 bg-white shopping" style="margin-top:100px;">
<hr />
<div class="card">
  



<?php foreach($product_details as $product){ ?>

<div class="card-header">
<div class="col-lg-6 offset-lg-3">
<img class="rounded-top rounded-circle" src="<?php echo base_url() ?>uploads/<?php echo $product['product_image'];?>" style="width:200px;height:200px;">
</div>

</div>


<?php } ?>


<div class="card-body">
    <div class=""><h3 style="color:indigo">Enter Your Details</h3></div>

<form action="" class="form-vertical">
<div class="errors" id="error"></div>
<div class="input-group mt-4">
<label for="full_name" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Full Name</label>
<input type="text" id="full_name" class=" form-control  ml-4"   placeholder="Full Name" >
</div>


<div class="input-group mt-4">
<label for="country" class="control-label mb-3" style="color:indigo;margin-top:8px;" >Country</label>
<input type="text" id="country" class=" form-control  ml-4"   placeholder="Country" >
</div>


<div class="input-group mt-4">
<label for="State" class="control-label mb-3" style="color:indigo;margin-top:8px;" >State</label>
<input type="text" id="state" class=" form-control  ml-4"   placeholder="State" >
</div>

<div class="input-group mt-4">
<label for="location" class="control-label mb-3" style="color:indigo;margin-top:8px;" >location</label>
<input type="text" id="location" class=" form-control  ml-4"   placeholder="location" >
</div>

<div class="input-group mt-4">

<input type="submit" id="entered_location" class=" form-control  btn btn-success"   placeholder="location"  value="continue">
</div>


</form>


</div>

</div>


</div>

<hr />


<script>

$(document).ready(function(){
    
    $("#entered_location").click(function(e){
        e.preventDefault();
        var name= $("#full_name").val();
        
        var country=$("#country").val();
        var state=$("#state").val();
        var location=$("#location").val();
        

        $.ajax({
            
          url:"complete_shop/personal_detail",
          method:"POST",
          data:{
              name:name,
              state:state,
              country:country,
              location:location
              


          },
          success:function(Response){
              if(Response == 1){
                  $("#second").html("<div class='col-lg-6 offset-2'>Thanks for your purchase,your goods will be delivered soon..<a href='<?php echo base_url(); ?>'>Back to home</a></div>");

              }else{
                  $("#error").html("<p style='color:red;'>Please enter all the fields </p>");
                  console.log(Response);
              }
          },
          error:function(error){
              console.log(error)
          }

        })
       
    })
})



</script>

