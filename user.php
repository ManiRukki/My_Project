<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $company_name=$_POST['company_name'];
    $company_website=$_POST['company_website'];
    $company_phone_number=$_POST['company_phone_number'];
    $company_posiion=$_POST['company_posiion'];
    $company_city=$_POST['company_city'];
    $company_state=$_POST['company_state'];
    $company_country=$_POST['company_country'];
    $industry_list=$_POST['industry_list'];
    $sql="insert into crud(company_name,company_website,company_phone_number,company_posiion,company_city,company_state,company_country,industry_list)
    values('$company_name','$company_website','$company_phone_number','$company_posiion','$company_city','$company_state','$company_country','$industry_list')";
    $result=mysqli_query($con,$sql);
    if($result){
      // echo "Data inserted successfully";
      header('location:display.php');
    }else{
      die(mysqli_error($con));
    }
}
?>
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post" >
  <div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control" placeholder="Enter the Company Name" name="company_name" autocomplete="off" >  
  </div>
  <div class="form-group">
    <label>Company Website</label>
    <input type="link" class="form-control" placeholder="Enter the Company Website" name="company_website" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>Company Phone Number</label>
    <input type="text" class="form-control" placeholder="Enter the Company Phone Number" name="company_phone_number" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>Company Position</label>
    <input type="text" class="form-control" placeholder="Enter the Company Address" name="company_posiion" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>Company City</label>
    <input type="text" class="form-control" placeholder="Enter the Company City" name="company_city" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>Company State</label>
    <input type="text" class="form-control" placeholder="Enter the Company State" name="company_state" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>Company Country</label>
    <input type="text" class="form-control" placeholder="Enter the Company Country" name="company_country" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>Industry List</label>
    <input type="text" class="form-control" placeholder="Enter the Industry List" name="industry_list" autocomplete="off">  
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
      

    </div>
  </body>
</html>