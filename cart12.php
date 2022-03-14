 <?php
// Start the session
session_start();
?>

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
$ci=$_SESSION["roll"]; 

$sql = "SELECT ID,PRODUCT,PRICE,QUANTITY,AMOUNT,TOTAL FROM cart WHERE ID='12' AND USERNO='$ci'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 	{
 		echo '<script language="javascript">';
echo 'alert("Item is already added to your cart ")';
echo '</script>';
include 'logpopup.php';
	}
else
{
$sql = "SELECT ID,PRODUCT,PRICE,AMOUNT FROM products WHERE ID='12'";



$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc())
{
    $sql = "INSERT INTO cart (USERNO,ID,PRODUCT,PRICE,QUANTITY,AMOUNT,TOTAL) VALUES ('$ci','$row[ID]','$row[PRODUCT]','$row[PRICE]','1','$row[AMOUNT]','$row[AMOUNT]')";
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn-> error;
}
}
}
echo '<script language="javascript">';
echo 'alert("Item is added to your cart ")';
echo '</script>';
include 'logpopup.php';
}
$conn->close();
?>
