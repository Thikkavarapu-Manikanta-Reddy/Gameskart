<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  div.men
{
  border-radius: 20px;
  margin:  40px 0px 40px 0px;
  padding: 5px;
   
   box-shadow: 20px 20px 50px grey;
}
.add
{
  background-color:black;
  color:white;
  padding:10px;
}
.add:hover
{
  background-color: #DC143C;
}
</style>
<title>Scratchcoder</title>
  <meta charset="utf-8">
  <link rel="icon" href="703437_gamepad_512x512.png" type="image/png">
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
  <?php

 $Maintenance1=$_POST["Maintenance1"];
 $Maintenance2=$_POST["Maintenance2"];
 $Maintenance3=$_POST["Maintenance3"];
  $Purchase1=$_POST["Purchase1"];
  $Purchase2=$_POST["Purchase2"];

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

$sql = "INSERT INTO income (Garbage_of_details) VALUES ('Maintenance#Maintenance1=$Maintenance1-Maintenance2=$Maintenance2-Maintenance3=$Maintenance3,Purchase#Purchase1=$Purchase1-Purchase2=$Purchase2')";
if ($conn->query($sql) === TRUE) {

  echo '<div class="men">
<h1><strong>Scratchcoder</strong></h1>
<h1><strong>Data was successfully inserted into database</strong></h1>
<strong>@ 2018Scratchcoder</strong>
</div>';

} else {
    echo "Error: " . $sql . "<br>" . $conn-> error;
}


$conn->close();
?>
<button onClick="location.href='show1.php'" class="add">Show details</button>
</div>
</div>
</div>
</body>
</html>