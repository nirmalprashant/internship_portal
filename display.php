<?php

/*include 'conn.php';

$sql = "SELECT * FROM company";

if (isset($_POST['search'])) {
  
  $search_term = mysql_real_escape_string($_post['search']);
  $sql .= "WHERE category = '{$search_term}'";
  $sql .= "AND experience = '{$search_term}'";
  $sql .= "AND country = '{$search_term}'";
  $sql .= "AND state = '{$search_term}'";
}


//$query = mysql_query($con,$sql) or die(mysql_error());

$query = mysqli_query($con,$sql);
*/
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

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Company </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Company name </th>
 <th> Description </th>
 <th> Category </th>
 <th> Experience </th>
 <th> Country </th>
 <th> State </th>

 </tr >

 <?php

 include 'conn.php'; 
 $sql = "select * from company ";

 $query = mysqli_query($con,$sql);

 while($row = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
  <td> <?php echo $res['company_name'];  ?> </td>
  <td> <?php echo $res['description'];  ?> </td>
  <td> <?php echo $res['category'];  ?> </td>
  <td> <?php echo $res['experience'];  ?> </td>
  <td> <?php echo $res['country'];  ?> </td>
  <td> <?php echo $res['state'];  ?> </td>
 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>