<?php  $this->load->view("admin/admin_header_view"); ?>

<!--admin body -->

<!--header-->
               

<?php $this->load->view("admin/admin_navbar_view");?>

<!--main body-->

<div class="card bg-white" >
<div class="card-body" id="admin_body">
<div class="col-lg-12 table table-responsive table-striped">
      <table>
          <thead>
              <tr>
                  

              <th>Product Name</th>
              <th>Product Category</th>
              <th>Product State</th>


            </tr>

        </thead>
        <tbody>

<?php foreach($all_data as $data){ ?>




 
     <tr>
         
     <td><a href="admin/view_product/<?php echo $data["id"];  ?>"><?php echo $data["product_name"];  ?></a>    <td>
     <td><a href="admin/view_product/<?php echo $data["id"];  ?>"><?php echo $data["product_category"]; ?> </a></td>
     <td><span class=" btn <?php if($data["product_state"] =="on_sale"){ echo "btn-primary";}    ?> btn-small" style="margin-bottom:20px;"><?php echo $data["product_state"] ?></span></td>

     <tr>
   












</div>

<?php } ?>


</tbody>

</table>
</div>

<h4 style="text-align:center"><?php  echo $this->pagination->create_links()?></h4>

</div>
             
<?php $this->load->view("admin/admin_footer") ?>
