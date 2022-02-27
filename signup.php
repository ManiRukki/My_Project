<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into login (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("location:../login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
</head>
<body >

	<style type="text/css">
	body {
      /* background-image: url("download.jpg"); */
      background-color: #8f8f8f;
      opacity: 1;
	  
    }
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
	}
    #box{
	    background-color:#ADD8E6;
		margin-top: 300px;
		margin-left:300px;
		width: 300px;
		padding: 20px;
	}
	.btn{
		margin:0 50 0 300 ;
	}
	p{
		margin: 0 50 0 300;
	}
	

	</style>
    
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

		</form>
	</div>
	<p >Already a User...?</p>

	<button class="btn btn-primary " ><a href="http://localhost/reccrm/login.php/" class="text-light">Click to Login</a></button>
</body>
</html>