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
  <h1 ><strong>Skolage</strong></h1>

 
	<?php


 $Name=$_POST["name"]; 

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



$sql = "SELECT ID,NAME,GENDER,AGE,HEIGHT,BLOOD GROUP FROM details Where NAME='$Name' ";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo"
  <table>
  <tr>
    <th><h1>ID</h1></th>
    <th><h1>NAME</h1></th>
    <th><h1>GENDER</h1></th>
    <th><h1>AGE</h1></th>
    <th><h1>HEIGHT</h1><th>
    <th><h1>BLOOD GROUP</h1><th>
  </tr>";
while($row = $result->fetch_assoc())
{
  echo"
  <tr>
    <td>"."<h2>".$row['ID']."</h2>"."</td>
    <td>"."<h2>".$row['NAME']."</h2>"."</td>
    <td>"."<h2>".$row['GENDER']."</h2>"."</td>
    <td>"."<h2>".$row['AGE']."</h2>"."</td>
    <td>"."<h2>".$row['HEIGHT']."</h2>"."</td>
    <td>"."<h2>".$row['BLOOD GROUP']."</h2>"."</td>
  </tr>";
  
}
echo "</table>";
}

else {
    echo "<h1><strong>There is no such name to display the details</strong></h1>";
}



$conn->close();
?>
<strong>@ 2018Scratchcoder</strong>
</div>
</div>
</div>
</body>
</html>
