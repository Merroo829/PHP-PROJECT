<?php

$error = $succes = $emailerr = $passworderr = "";

if(isset($_POST['submit']))
{
    $Email    =   htmlspecialchars( $_POST['email']);
    $Password =   htmlspecialchars($_POST['password']);

    if(empty($Email))
    {
        $emailerr = "Please  Enter Your Email...";

    }
    elseif(empty($Password))
    {
        $passworderr = "Please  Enter Your Password...";
    }
    else
    {
       
        
        $conn = mysqli_connect("localhost","root","","crud_db") or die("failed");
        $sql = "INSERT INTO `user`(`email`, `password`) VALUES ('{$Email}' ,'{$Password}')";
        mysqli_query($conn,$sql) or die("");
        header('location: ./table.php');
    }


}





?>