<?php  
if(isset($_GET['del']))
{

    $id = $_GET['del'];

    $conn = mysqli_connect("localhost","root","","crud_db") or die("failed");
    $sql = "DELETE FROM `user`WHERE  `id` = $id";
    mysqli_query($conn,$sql) or die("");
    header("location:./table.php");


}




?>