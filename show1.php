<!DOCTYPE html>
<html>
<head>
  <style>
  	table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    padding:10px;
}

 td,  th {
    border: 1px solid #ddd;
    padding: 10px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding:10px;
    text-align: left;
    background-color:black;
    color: white;
}
th:hover {

      background-color: #DC143C;
}
.extra
{
  background-color:black;
  color:white;
  padding:15px;
  border:none;
  border-radius:4px;
  
}
.extra:hover
{
  background-color: #DC143C;
}
  </style>
  <title>Scratchcoder</title>
  <meta charset="utf-8">
  <link rel="icon" href="images.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-0 col-sm-6 col-md-4 col-lg-2">
</div>
 <div class="col-xs-12 col-sm-6 col-md-5 col-lg-8">
  <h1 ><strong>SCRATCHCODER</strong></h1>

 
	<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scratchcoder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
} 



$sql = "SELECT ID,Garbage_of_details FROM income ";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo'

  <div class="table-responsive">          
  <table class="table">
  <tr>
    <th><h1>ID</h1></th>
    <th colspan=3><h1>maintenance</h1></th>
    <th colspan=2><h1>Purchase</h1></th>
  </tr>
   <tr>
    <th><h3>#</h1></th>
    <th><h3>Maintenance1</h3></th>
    <th><h3>Maintenance2</h3></th>
    <th><h3>Maintenance3</h3></th>
    <th><h3>Purchase1</h3></th>
    <th><h3>Purchase2</h3></th>
  </tr>';
while($row = $result->fetch_assoc())
{
	$s=$row['Garbage_of_details'];
	$f=explode("#",$s);
	$e=explode(",",$f[1]);
	$x=explode("-",$e[0]);
	$y=explode("=",$x[0]);
	$q=explode("=",$x[1]);
	$p=explode("=",$x[2]);
	$g=explode("-",$f[2]);
	$t=explode("=",$g[0]);
	$z=explode("=",$g[1]);
	
	

  echo"
  <tr>
    <td>"."<h2>".$row['ID']."</h2>"."</td>
    <td>"."<h2>".$y[1]."</h2>"."</td>
    <td>"."<h2>".$q[1]."</h2>"."</td>
    <td>"."<h2>".$p[1]."</h2>"."</td>
    <td>"."<h2>".$t[1]."</h2>"."</td>
    <td>"."<h2>".$z[1]."</h2>"."</td>
    
    


  </tr>";

}
echo "</table></div>";
}

else {
    echo "<h1><strong>NO DETAILS ARE ENTERED</strong></h1>";
}



$conn->close();
?>
<strong>@ 2018Scratchcoder</strong>
</div>
</div>
</div>
</body>
</html>

