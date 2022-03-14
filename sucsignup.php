
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>
<body>
	<?php
$name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];
  $passwor=$_POST["passwor"];
   

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

$sql = "INSERT INTO signup (NAME,EMAIL,MOBILEPHONE,ADDRESS,PASSWORD) VALUES ('$name','$email','$phone','$address','$passwor')";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error 404: " . $sql . "<br>" . $conn-> error;
}
$conn->close();
?>

<div class="container-fluid">
	<div class="lick">
<center><h1>YOU HAVE SUCCESSFULLY SIGNED UP</h1></center>
<center><h3>THANK YOU FOR CHOOSING GAMEZONE</h3></center>
<center><h6>CLICK ON HOME TO GO TO HOME PAGE</h6></center>
<center>@ 2017gamezone</center>
</div>
</div>
<div class="beyound"></div>
</body>
</html>