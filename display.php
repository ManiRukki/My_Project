<?php
include 'connect.php';?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">

<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
</button>
<h3>List of Companies</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Company Name</th>
      <th scope="col">Company Website</th>
      <th scope="col">Company Phone Number</th>
      <th scope="col">Company Position</th>
      <th scope="col">Company City</th>
      <th scope="col">Company state</th>
      <th scope="col">Company country</th>
      <th scope="col">Industry List</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql= "SELECT * from crud ";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $company_name=$row['company_name'];
        $company_website=$row['company_website'];
        $company_phone_number=$row['company_phone_number'];
        $company_posiion=$row['company_posiion'];
        $company_city=$row['company_city'];
        $company_state=$row['company_state'];
        $company_country=$row['company_country'];
        $industry_list=$row['industry_list'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$company_name.'</td>
        <td>'.$company_website.'</td>
        <td>'.$company_phone_number.'</td>
        <td>'.$company_posiion.'</td>
        <td>'.$company_city.'</td>
        <td>'.$company_state.'</td>
        <td>'.$company_country.'</td>
        <td>'.$industry_list.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>

    </tr>';    
    }
}
?>

   
  </tbody>
</table>
<button class="btn btn-primary float-right"><a href="logout.php" class="text-light" >Logout</a></button>

</div>


</body>
</html>