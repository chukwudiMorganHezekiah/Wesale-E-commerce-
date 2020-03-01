<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>


  

  <!--link to boostrap 4-->
  <link rel="stylesheet" href="<?php echo base_url()  ?>bootstrap/css/bootstrap.css" type="text/css">

</head>

<body id="page-top">
    <div class="container mt-3">
             <div class="row">

 

<!--Control panel -->
                <div class="col-lg-4 bg-dark" style="height: 100vh;color:white;" id="control_panel_of_the_dashboard">
                <div class=""><h4 class="pt-3">WeyDeySale<s>2</s></div>
                <span class="divider"><hr style="background:white"></span>

                <p class="ml-4"><a href="/WeDeySale/index.php/admin" id="active_link_on_control_panel">Dashboard</a></p class="ml-4">

                <span class="divider"><hr style="background:white"></span>

                <p class="text-muted">Interface</p>

                <p class="ml-5 pl-3" ><a href="<?php  echo site_url('admin/add_product') ;?>">Add Product</a></p>


                <p class="text-muted">Addons</p>

                    <p class="ml-5 pl-3">PieChart</p>
                    <p class="ml-5 pl-3">BarChart</p>
                    <p class="ml-5 pl-3">Tables</p>


                </div>