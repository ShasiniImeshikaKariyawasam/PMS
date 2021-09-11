<!DOCTYPE html>
<html>
<head>
	<title>View Prescription</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 330px;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>
  <table>
	<div class="container" style="margin-top: 100px;">
    
			<?php
				include('include/connection.php');
				$select = "SELECT * FROM image ORDER BY id DESC";
				$result = mysqli_query($db,$select);
				if($result -> num_rows > 0){
					while($rows =$result ->fetch_assoc() ){
						echo "
  							<div class=\"column\">
  							  <div class=\"card\">

  							    <img src=\"../../customer/uploads/{$rows['image']}\" height=\"400px\"\ width=\"350px\"\">
  							   		 <div class=\"container\">
  							   		 <br>
  							      		<p>".$rows['email']."</p>
  							      			<h3>".$rows['text']."</h3>
  							      			<form method=\"post\" action=\"response.php\">
  							      			<input type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"Response\" style=\"width:320px\">
  							      			<input type=\"hidden\" name=\"email\" value=".$rows['email'].">
  							      			</form>
  							    	</div>
  							  	</div>
 							 </div>
							";
					}
				}
			?>
		</table>
	</div>
</body>
</html>

