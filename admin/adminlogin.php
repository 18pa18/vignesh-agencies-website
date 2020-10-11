<?php 
 
include('includes/db.php'); 
session_start(); 
if(isset($_POST['adminlogin'])){
				
    $adminname=$_POST['adminname'];
    $password=$_POST['password'];

    $sql = "select * from adminlogin where adminname='$adminname' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
        if($row == 1)
        {
			echo "login successful";
			$_SESSION['adminname'] = $adminname;
    header("location: addproduct.php");
        }

 }
    else
    {
        echo"Sorry, your credentials are not valid, Please try again.";
        die();
    }
?> 