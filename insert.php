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
div.heck
{
  border-radius: 30px;
  
  padding: 15px;
   margin:  0px 0px 40px 0px;
   box-shadow: 20px 20px 50px grey;
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
  <!--<div class="cod"></div>-->
 
<div class="container-fluid">
<div class="row">
  <div class="col-sm-4">
</div>
  <div class="col-sm-3">
    <div class="men">
<h1><strong>Scratchcoder</strong></h1>
</div>
<div class="heck">
  <form  action="show.php" method="post">
   <div class="form-group" >
    <label for="number">Maintenance 1</label>
    <input type="text" class="form-control"  name="Maintenance1" pattern="[0-9].{0,}" title="Enter only intezers" placeholder="Maintenance 1....." required>
  </div>
   <div class="form-group">
    <label for="number">Maintenance 2</label>
    <input type="text" class="form-control"  name="Maintenance2" pattern="[0-9].{0,}" title="Enter only intezers" placeholder="Maintenance 2....." required>
  </div>
  <div class="form-group" >
    <label for="number">Maintenance 3</label>
    <input type="text" class="form-control"  name="Maintenance3" pattern="[0-9].{0,}" title="Enter only intezers" placeholder="Maintenance 3...." required>
  </div>
   <div class="form-group" >
    <label for="number">Purchase 1</label>
    <input type="text" class="form-control"  name="Purchase1" pattern="[0-9].{0,}" title="Enter only intezers" placeholder="Purchase 1...." required>
  </div>
  <div class="form-group">
    <label for="number">Purchase 2</label>
    <input type="text" class="form-control"   name="Purchase2" placeholder="Purchase 2...."  pattern="[0-9].{0,}" title="Enter only intezers" required>
</div>
  <button type="submit" class="btn btn-info">Insert</button><br><br>
  <strong>@ 2018Scratchcoder</strong>
</form>
</div>
</div>
</div>
</div>
<!--<div class="assasin"></div>-->
</body>
</html>