<?php
    
    //include constants.php for site url

    include('../../config/constants.php'); 

    //destroy the session

    session_destroy();//unset $SESSION=$username;


    //redirect to login page
    header("location:".SITEURL.'Back-end/Restaurant-food/admin/login-rest.php');




?>