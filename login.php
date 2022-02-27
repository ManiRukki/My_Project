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

			//read from database
			$query = "select * from login where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
                        header("location: display.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c34ed0e30d.js" crossorigin="anonymous"></script>

</head>
<body>

	<style type="text/css">
	
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
		background-color: #ff4c68;
		border: none;
	}

	#box{
	    background-color:#ADD8E6;
		margin-top: 300px;
		margin-left:300px;
		width: 300px;
		padding: 20px;
	}
	p,button{
		margin-top:300;
		margin-left: 300px;

	}
	body{
		background-color: #ff4c68;
	}
	#footer{
   
   padding-top: 5%;
   }
    #cta{
	padding: 7% 15% ;
    /* font-family: 'Montserrat' */
  
    font-weight: bolder;
    }


	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
            
		</form>
	</div>
	<p>
		New User......!
    </p>
	<button class="btn btn-primary " >
	<a href="http://localhost/reccrm/signup.php/" class="text-light">Click to Signup</a>
	</button>
	<div class="container-fluid">
	<section id="cta">
	<footer id="footer">
    <i   class=" social fa-brands fa-twitter"></i>
    <i  class=" social fa-brands fa-facebook"></i>
    <i  class=" social fa-brands fa-instagram"></i>
    
    <p>© Copyright TinDog</p>
   </section>
  </footer>
	</div>
</body>
</html>