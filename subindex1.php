<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Testing page</title>
</head>
<body>
<?php
$_SESSION["abc"]="sample";//session variable is set
echo $_SESSION["abc"];
?>
</body>
</html>