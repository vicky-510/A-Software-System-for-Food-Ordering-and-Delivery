<?php


    //include constants.php file here
    include('../../config/constants.php');

    //get the id of the admin to be deleted
    $id = $_GET['id'];
  

     //create aql query TO Delete admin
     $sql = "DELETE FROM admin_rest WHERE id=$id";


    //execute the query    

    $res = mysqli_query($conn, $sql);


    //check whether the query executed or not 
    if($res==true){

    //query executed successfully and admin deleted 
     //echo "admin deleted successfully";
     //create a session variable to display msg

     $_SESSION['delete'] = "<div class='success'>Admin deleted successfully   <strong>X</strong></div>";
       // redirect to manage admin page 
	 
    header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-admin.php');

    }else{
    //echo "not inserted";
    //create a session variable to display msg 
    //query failed to execute and delete admin  

       $_SESSION['delete'] = "<div class='error'>Failed to  delete Admin. try again later!   <strong>X</strong></div>";

       //redirect to manage admin
       header("location:".SITEURL.'Back-end/Restaurant-food/admin/manage-admin.php');


       }

  // redirect to manage add page or not

  

?>