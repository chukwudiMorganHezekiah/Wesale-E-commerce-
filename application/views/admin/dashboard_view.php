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
<body class="bg-dark m-5">

    <div class="container">
        <div class="row " style="height:80vh;border-radius:20px;">

        <div class="col-lg-8 offset-lg-2 bg-white my-5" style="border-radius:20px;">

        <form action="dashboard/login" method="POST" class="my-5 form-horizontal" >

        <h3>Login</h3>
        <p > <?php  if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        } ?></p>

        <div class="form-group" >
            <input type="text" class="form-control " placeholder="Useranme" name="username" >
       <?php echo form_error("username","<div class='error'>","</div>") ;?>
       
        </div>

       <div class="form-group">
            <input type="password" class="form-control" placeholder="Password"  name="password">
            <?php echo form_error("password","<div class='error'>","</div>") ;?>
       </div>

       <div class="col-lg-2 offset-lg-5">

       <div class="form-group">
            <input type="submit" class=" btn btn-secondary" placeholder="Useranme" >
       </div>

        </div>
       </form>
       </div>

      
    </div>



    </div>
    
</body>
<style>
.error{
    color:red;
}

    </style>
</html>