
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
?>
</body>
</html>
<body>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-4">
</div>
  <div class="col-sm-3">
    <div class="men">
<h1>SIGN UP</h1>
</div>
<div class="heck">
  <form  action="decsignup" method="post">
    <div class="form-group">
    <label for="name">Name</label>   
    <input  type="text"  class="form-control"  name="name" placeholder="Name....." title="Enter your name" required>
  </div>
   <div class="form-group" >
    <label for="email">Email</label>
    <input type="text" class="form-control"  name="email" title="Enter your email" placeholder="Email....." required>
  </div>
   <div class="form-group">
    <label for="phone">Mobile Phone</label>
    <input type="text" class="form-control"  name="phone" title="Enter your phonenumber" placeholder="Phonenumber....." required>
  </div>
  <div class="form-group" >
    <label for="address">Address</label>
    <input type="text" class="form-control"  name="address" title="Enter your address" placeholder="Address...." required>
  </div>
  <div class="form-group">
    <label for="password"> Password</label>
    <input type="password" class="form-control" id="myInput"  name="passwor" placeholder="Password....."  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
</div>
    <div class="form-group" >
    <input type="checkbox" onclick="myFunction()"><label for="address">Show Password</label>
  </div>
  <button type="submit" class="btn btn-info">SignUp</button>
  <h1>PASSWORD STRENGTH</h1>
  <h4>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</h4>
  <center>@ 2017gamezone</center>
</form>
</div>
</div>
</div>
</div>
<div class="assasin"></div>
<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</body>
</html>