<?php
$error = $succes = $emailerr = $passworderr = "";



if(isset($_POST['submit']))
{
    $id = $_POST['id'];

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

        $sql = "UPDATE `user` SET `email`='$Email',`password`='$Password' WHERE `id` = $id";
        mysqli_query($conn,$sql) or die("");
        header('location: ./table.php');
    }


}




?>