<?php

$error = $succes = $emailerr = $passworderr = "";

if (isset($_POST['submit'])) {
    $Email = htmlspecialchars($_POST['email']);
    $Password = htmlspecialchars($_POST['password']);

    $conn = new mysqli("localhost","root","","crud_db") or die("failed");
    $result = $conn->query("SELECT * FROM `user` WHERE `email` = '$Email' AND `password` = '$Password'");

if($result->num_rows > 0)
{
        session_start();
        $_SESSION['mail'] =  $Email;
        $_SESSION['pass'] =  $Password;
        header("location: table.php");
}
else
{
        echo "Invalid Credentials";
}

}
?>