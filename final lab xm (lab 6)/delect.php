<?php


$con = mysqli_connect('localhost:8082','root','','product_db');

$reciv = $_REQUEST['name'];

$query= "DELETE FROM `info` WHERE name=$reciv ";

$delected = mysqli_query($con,$query);
if($delected){
    header("location: display.php?delected");
}

?>