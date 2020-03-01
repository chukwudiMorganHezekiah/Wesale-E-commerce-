</div>

</div>
</div>
</div>
</div>

<!--jquery-->
<script type="text/javascript" src="<?php echo base_url()  ?>jquery/jquery.js"></script>


<!--boostrap js-->
<script type="text/javascript" src="<?php echo base_url()  ?>bootstrap/js/bootstrap.js"></script>

<style>
.error{
    color:red;
}

#active_link_on_control_panel{
   padding:8px;
    background-color:white;
    border-radius:9px;
    color:black;
    width:40px;
    text-decoration:none;
    margin:60px;
    padding-right:40px;
    padding-left:40px
}

#active_link_on_control_panel:hover{
   animation:animate_active_link 1s ease forwards;
}
@keyframes animate_active_link{
    from{
        margin:80px;

    }to{
        margin:90px;
    }
}



</style>


<script>

$(document).ready(function(){
    var main_body_of_control_panel=$("#main_body_of_control_panel").css("height");

    $("#control_panel_of_the_dashboard").css("height",main_body_of_control_panel);

   

})



</script>




<div class="bg-dark mt-3">

<div class="container">
<div class="row">

<div class="col-lg-4" style="color:white">
<h3 style="color:green">Abouts </h3>
Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.
</div>


<div class="col-lg-4" style="color:white">
<h3 style="color:green">Contacts </h3>

<P>Phone Number: +234 8122510760</P>

<P>Email: morganhezekiah1@gmail.com</P>

</div>


<div class="col-lg-4" style="color:white">

<h3 style="color:green">Socials </h3>
<P>Phone Number: +234 8122510760</P>

<P>Email: morganhezekiah1@gmail.com</P>
</div>
</div>


</div>


</div>

</body>

</html>