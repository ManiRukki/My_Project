<?php

$con=new mysqli('localhost:3307','root','','login');

if(!$con){
    die(mysqli_error($con));
}
?>