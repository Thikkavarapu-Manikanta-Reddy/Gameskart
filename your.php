<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  .navbar-inner
  {
    padding:1px;
  }
body, html {
    height: 100%;
}

.rain {
    /* The image used */
    background-image: url('beautiful-winter-hd-wallpapers.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.flower{
    /* The image used */
    background-image: url('thumb-1920-411820.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
div.gallery {
    margin:40px;
    border: 1px solid #ccc;
    float: left;
      width: 250px;
}

div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    max-width: 100%;
    height: auto;
}


div.desc {
    padding: 15px;
    text-align: center;
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
button
{
    color:powderblue;
    background-color:white;
    border:none;
    border-radius:3px;
    padding:15px;
}
button:hover
{
    background-color:powderblue;
    color:white;
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
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    padding:100px;
}

 td,  th {
    border: 1px solid #ddd;
    padding: 100px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding:100px;
    text-align: left;
    background-color:black;
    color: white;
}
th:hover {

      background-color: #DC143C;
}
</style>
<title>GAMEZONE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="rain"></div>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-inner">
       <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="#">GAMEZONE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav">
    <li><a href="logpopup"><h4>HOME</h4></a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><h4>BUY GAMES<span class="caret"></span></h4></a>
      <ul class="dropdown-menu">
          <li><a href="#">PS3</a></li>
          <li><a href="#">PS4</a></li>
          <li><a href="#">PS-VITA</a></li>
          <li><a href="#">XBOX-360</a></li>
          <li><a href="#">XBOX-ONE</a></li>
           <li><a href="#">PC</a></li>
        </ul></li>
    <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><h4>SELL GAMES<span class="caret"></span></h4></a>
    <ul class="dropdown-menu">
          <li><a href="#">PS3</a></li>
          <li><a href="#">PS4</a></li>
          <li><a href="#">PS-VITA</a></li>
          <li><a href="#">XBOX-360</a></li>
          <li><a href="#">XBOX-ONE</a></li>
           <li><a href="#">PC</a></li>
        </ul></li>
    <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><h4>CONSOLES<span class="caret"></span></h4></a>
    <ul class="dropdown-menu">
          <li><a href="#">PS3</a></li>
          <li><a href="#">PS4</a></li>
          <li><a href="#">PS-VITA</a></li>
          <li><a href="#">XBOX-360</a></li>
          <li><a href="#">XBOX-ONE</a></li>
        </ul></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <?php
 echo $_SESSION["user"];
 ?>
        <span class="glyphicon glyphicon-user"></span></a>
  <ul class="dropdown-menu">
          <li><a href="#">DASHBOARD</a></li>
          <li><a href="#">YOUR BUY ORDERS</a></li>
          <li><a href="#">YOUR SELL ORDERS</a></li>
          <li><a href="#">YOUR ACCOUNT DETAILS</a></li>
          <li><a href="logout">LOGOUT</a></li>
        </ul></li>
         </ul>
         <p class="indent"></p>
  <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Games....">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</nav>
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
</div>
 <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
  <h1 ><strong>GAMEZONE</strong></h1>
<button type="button" class="extra" class="btn btn-info" data-toggle="collapse" data-target="#demo1">CART DETAILS</button>
  <div id="demo1" class="collapse ">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamezone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
} 

$man=$_SESSION["roll"];

$sql = "SELECT ID,PRODUCT,PRICE,QUANTITY,TOTAL FROM cart WHERE USERNO='$man'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo"
  <table>
  <tr>
    <th><h1>ID</h1></th>
    <th><h1>PRODUCT</h1></th>
    <th><h1>PRICE</h1></th>
    <th><h1>QUANTITY</h1></th>
    <th><h1>TOTAL</h1><th>
  </tr>";
while($row = $result->fetch_assoc())
{
  echo"
  <tr>
    <td>"."<h2>".$row['ID']."</h2>"."</td>
    <td>"."<h2>".$row['PRODUCT']."</h2>"."</td>
    <td>"."<h2>".$row['PRICE']."</h2>"."</td>
    <td>"."<h2>&nbsp&nbsp&nbsp&nbsp&nbsp".$row['QUANTITY']."</h2>"."</td>
    <td>"."<h2>RS.".$row['TOTAL']."</h2>"."</td>
  </tr>";
  
}
echo "</table>";
}
else {
    echo "<h1><strong>YOUR CART IS EMPTY!</strong></h1>";
}
$conn->close();
?>
<hr>
<form action="your1" method="post">
   <div class="form-group">
    <label for="id">Enter ProductID</label>
    <input type="text" class="form-control"  name="id" placeholder="ID.....">
  </div>
  <div class="form-group">
  <label for="quantity">Quantity:</label>
  <input type="number" class="form-control" name="quantity"
   min="1" max="10" value="1">
</div>
<button type="submit" class="btn btn-info">UpdateCart</button>
<br>
<hr>
</form>
</div>
<button type="button" class="extra" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Discard Item</button>
  <div id="demo2" class="collapse ">
  <form  action="discard" method="post">
  <div class="form-group">
    <label for="id">Enter ProductID</label>
    <input type="text" class="form-control"  name="id" placeholder="ID.....">
  </div>
  <button type="submit" class="btn btn-info">Discard</button>
  <br>
<hr>
</form>
</div>
<button type="button" class="extra" class="btn btn-info" data-toggle="collapse" data-target="#demo3">CART TOTALS</button>
  <div id="demo3" class="collapse ">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamezone";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
} 

$hit=$_SESSION["roll"];

$sql = "SELECT TOTAL FROM cart WHERE USERNO='$hit'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo"
  <table>
  <tr>
    <th><h1>SUBTOTAL</h1></th>
    <th><h1>TOTAL</h1></th>
    <th><h1>SHIPPING</h1></th>
  </tr>";
  $x=0;
while($row = $result->fetch_assoc())
{
  $x = $x + $row['TOTAL'];
}
  echo"
  <tr>
    <td>"."<h2>RS.".$x."</h2>"."</td>
    <td>"."<h2>RS.".$x."</h2>"."</td>
    <td>"."<h2>Free Shipping</h2>"."</td>
  </tr>";
$x=0;
echo "</table>";
echo "<br>";
echo "<hr>";
include 'add.php';
}
else {
    echo "<h1><strong>YOUR CART IS EMPTY!</strong></h1>";
}
$conn->close();
?>
</div>
<h4><strong>@ 2017gamezone</strong></h4>
</div>
</div>
</div>
<div class="flower"></div>
</body>
</html>
