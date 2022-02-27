<?php 

$con=new mysqli('localhost:3307','root','','crudd');


if(!$con){
	die(mysqli_error($con));
}
?>