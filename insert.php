<?php

 include 'conn.php';

 if(isset($_POST['done'])){

    $category = $_POST['category'];
    $experience = $_POST['experience'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $sql = " INSERT INTO 'search'('category','experience','country','state') VALUES ('$category','$experience','$country','$state')";

    $query = mysqli_query($con,$sql);
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Job Filter </h1>
 </div><br>

 <label> Category: </label>
 <input type="text" name="category" class="form-control"> <br>

 <label> Experience: </label>
 <input type="text" name="experience" class="form-control"> <br>

 <label> Country: </label>
 <input type="text" name="country" class="form-control"> <br>

 <label> State: </label>
 <input type="text" name="state" class="form-control"> <br>

 <button class="btn btn-success" type="search" name="done"> Search </button><br>

 </div>
 </form>
 </div>
</body>
</html>