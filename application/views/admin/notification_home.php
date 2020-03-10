<?php  $this->load->view("admin/admin_header_view"); ?>

<!--admin body -->

<!--header-->
               

<?php $this->load->view("admin/admin_navbar_view");?>

<!--main body-->


<div class="card">

<div class="card-header">
<h3 style="text-align:center;color:indigo">Notifications </h3>
</div>

<div class="card-body">


<?php foreach($notification_customer_details as $notification){
    
    ?>
    <form class="form-horizontal">

<div class="form-group">
<span class="">Customer Name:</span><input type="text" class="form-control "  disabled value="<?php  echo $notification['name'];?>">
</div>



<div class="form-group">
<span class="">Customer Country:</span><input type="text" class="form-control "  disabled value="<?php  echo $notification['country'];?>">
</div>


<div class="form-group">
<span class="">Customer location:</span><input type="text" class="form-control "  disabled value="<?php  echo $notification['location'];?>">
</div>

<div class="form-group">
<span class="">Number Of Products:</span><input type="text" class="form-control "  disabled value="<?php  echo $notification['number_of_products'];?>">
</div>

<div class="form-group">
<span class="">Date of request:</span><input type="text" class="form-control "  disabled value="<?php  echo $notification['created-on'];?>">
</div>

    </form>
<?php $id_of_product =$notification['id'] ?>

<?php }?>


<?php foreach($notifications as $notify) { ?>

    <div class="form-group">
<span class="">Name of Product:</span><input type="text" class="form-control "  disabled value="<?php  echo $notify['product_name'];?>">
</div>

<?php } ?>
<br />
<div class="" style="float:left">

<a href="delete_request/<?php echo $id_of_product ?>" class="btn btn-large btn-danger">Delete request</a>

</div>

</div>


</div>
















<?php $this->load->view("admin/admin_footer") ?>