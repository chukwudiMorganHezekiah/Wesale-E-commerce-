<?php  $this->load->view("frontview/frontview_header") ; ?>




<?php  $this->load->view("frontview/frontview_navbar") ; ?>



<div class="col-lg-8 offset-lg-2" >


<div class="card card-header" style="position:relative;top:100px;">
<div class="" >

<?php if(count($result_from_search) >0){  ?>

<?php  foreach($result_from_search as $search_results) { ?>
<div class="card  col-lg-6 offset-lg-3">
<a href="search_results/<?php echo $search_results['id']  ?>">

<div class=""  style="text-align:center"><?php echo $search_results['product_name'];  ?></div>
<div class=""  style="text-align:center"><?php echo $search_results['product_description'];  ?></div>
</a>
</div>
<?php
}?>

<?php
}else{ ?>

<div class="" style="text-align:center;color:indigo">No Result for your Search</div>

<?php } ?>

</div>
</div>



</div>



<?php  $this->load->view("frontview/frontview_footer") ; ?>