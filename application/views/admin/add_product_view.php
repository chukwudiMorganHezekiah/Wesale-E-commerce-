<?php  $this->load->view("admin/admin_header_view"); ?>

<!--admin body -->

<!--header-->
                   

<?php $this->load->view("admin/admin_navbar_view");?>


<div class="card bg-white">
<div class="card-header" id="admin_body">

<?php echo form_open_multipart('admin/add_product_form_submit',[
    "method"=>"post",
    "class"=>"form-horizontal"

]) ;?>

<h3>Add New Product</h3>

<div class="form-group" >
    <input class="form-control" placeholder="Product Name"  value="<?php echo set_value("product_name");?>" name="product_name" auto_focus>
<?php  echo form_error("product_name","<div class='error'>","</div>"); ?>
</div>

<div class="form-group" >
    <input class="form-control" placeholder="Product category"  value="<?php echo set_value("product_catergory"); ?>" name="product_catergory" auto_complete>
    <?php  echo form_error("product_catergory","<div class='error'>","</div>"); ?>
</div>


<div class="form-group" >
    <input class="form-control" placeholder="Product Specs" value="<?php echo set_value("product_specs") ;?>" name="product_specs" auto_complete>
    <?php  echo form_error("product_specs","<div class='error'>","</div>"); ?>
</div>

<div class="form-group" style="display:flex">
<div class="input-group-append">
      <button class="btn btn-default" type="button">
        $
      </button>
    </div>
    <input class="form-control" type="number" aria-label="product_price" aria-describedby="basic-addon2" placeholder="Product Price" value="<?php echo set_value("product_price") ;?>" name="product_price" auto_complete>
    
</div>
<?php  echo form_error("product_price","<div class='error'>","</div>"); ?>

<div class="form-group" >
   <textarea name="product_description"  placeholder="Product Description" class="form-textarea" rows="10" cols="75" value="<?php  echo set_value("product_description"); ?>"></textarea>
   <?php  echo form_error("product_description","<div class='error'>","</div>"); ?>
</div>


<div class="form-group" >
    <label for="product_image">Product Image</label>
   <input type="file" name="product_image" id="product_image"  class="form-control">
   <?php  echo form_error("product_image","<div class='error'>","</div>"); ?>
</div>

<div class="form-group" >
  <button class="btn btn-small btn-success">Add Product </button>

</div>

</form>

</div>

</div>






<!--footer-->
<?php $this->load->view("admin/admin_footer") ?>