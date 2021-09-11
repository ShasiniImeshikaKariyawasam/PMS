<!DOCTYPE html>
<html>
<head>
  <style>
    .customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  }

.customers td .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

  </style>
  <title>View Prescription</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/image.css">
  <style>

</style>
</head>
<body>
  <div class="container" style="margin-top: 100px;">
    <table>
     

      <?php
      include('include/connection.php');

$sql = "SELECT * FROM image ORDER BY id DESC";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);

$email = $row['email'];
$text = $row['text'];
$image = $row['image'];
$image_src = "../../user/uploads/".$image;

?>



<table class="customers">
  <tr>
    <th><center>Prescription</center></th>
    <th><center>Customer Email</center></th>
    <th><center>Comment</center></th>
    <th><center>Response</center></th>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td height="400px"><img height="300px" width="300px" src='<?php echo $image_src;  ?>' >  </td>
    <td><h3><?php echo $email; ?></h3></td>
    <td><h3><?php echo $text; ?></h3></td>
    <td>
      <form method="post" action="prescription.php">
      <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Response" style="width:150px">
      <input type="hidden" name="email" value=".$row['email'].">
      </form>
    </td>
  </tr>
</table>








  </div>
</body>
</html>
