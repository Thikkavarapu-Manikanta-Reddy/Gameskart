<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  .error {color: #FF0000;}
  .navbar-inner
  {
    padding:1px;
  }
body, html {
    height: 100%;
}

.cod {
    /* The image used */
    background-image: url('2643845-me5.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.assasin {
    /* The image used */
    background-image: url('AC4-ocean.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
  <div class="cod"></div>
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
    <li><a href="popup.html"><h4>HOME</h4></a></li>
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
        </ul></li></li>
    <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><h4>CONSOLES<span class="caret"></span></h4></a>
    <ul class="dropdown-menu">
          <li><a href="#">PS3</a></li>
          <li><a href="#">PS4</a></li>
          <li><a href="#">PS-VITA</a></li>
          <li><a href="#">XBOX-360</a></li>
          <li><a href="#">XBOX-ONE</a></li>
        </ul></li></ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.html.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $addressErr = $passworErr ="";
$name = $email = $phone  = $address = $passwor = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Adddress is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["passwor"])) {
    $passworErr = "Password is required";
  } else {
    $passwor = test_input($_POST["passwor"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="container-fluid">
<div class="row">
  <div class="col-sm-4">
</div>
  <div class="col-sm-3">
<h1>SIGN UP</h1>
  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
    <label for="name">Name</label>   
    <input  type="text"  class="form-control"  name="name" placeholder="Name....."><span class="error">* <?php echo $nameErr;?></span>
  </div>
   <div class="form-group" >
    <label for="email">Email</label>
    <input type="text" class="form-control"  name="email" placeholder="Email....."><span class="error">* <?php echo $emailErr;?></span>
  </div>
   <div class="form-group">
    <label for="phone">Mobile Phone</label>
    <input type="text" class="form-control"  name="phone" placeholder="Phonenumber....."><span class="error">* <?php echo $phoneErr;?></span>
  </div>
  <div class="form-group" >
    <label for="address">Address</label>
    <input type="text" class="form-control"  name="address" placeholder="Address...."><span class="error">* <?php echo $addressErr;?></span>
  </div>
  <div class="form-group">
    <label for="password"> Password</label>
    <input type="password" class="form-control"  name="passwor" placeholder="Password....."><span class="error">* <?php echo $passworErr;?></span>
  </div>
  <button type="submit" class="btn btn-info">SignUp</button>
  <h1>PASSWORD STRENGTH</h1>
  <h4>Use at least 8 characters. Don’t use a password from another site or something too obvious like your pet’s name.</h4>
  <center>@ 2017gamezone</center>
</form>
</div>
</div>
</div>
<div class="assasin"></div>
</body>
</html>