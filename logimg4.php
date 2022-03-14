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
div.deck
{
  border-radius: 30px;
  margin:  0px 0px 40px 0px;
  padding: 15px;
   
   box-shadow: 20px 20px 50px grey;
}
div.gallery {
    margin:40px;
    float: left;
      width: 350px;
      border-radius: 15px;
    transform: scale(1.1); 
     box-shadow: 20px 20px 50px grey;
}

div.gallery img {
  border-radius: 15px;
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
.extra
{
  background-color:black;
  color:white;
  padding:10px;
  border:none;
  border-radius:4px;
  
}
.extra:hover
{
  background-color: #DC143C;
}
.snip1 {
    /* The image used */
    background-image: url('14121409950l.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.snip2 {
    /* The image used */
    background-image: url('Sniper-Elite-4-train_trans_NvBQzQNjv4BqNJjoeBT78QIaYdkJdEY4CnGTJFJS74MYhNY6w3GNbO8.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.i
{
    color:white;
    background-color:#4169E1;
    border:none;
    border-radius:3px;
    margin:15px;
}
.i:hover
{
    background-color:#87CEEB;
}
.g
{
    color:red;
    background-color:white;
    border:none;
    border-radius:3px;
    margin:15px;
}
.g:hover
{
    background-color:red;
    color:white;
}
.t
{
    color:powderblue;
    background-color:white;
    border:none;
    border-radius:3px;
    margin:15px;
}
.t:hover
{
    background-color:powderblue;
    color:white;
}
.e
{
    color:grey;
    background-color:white;
    border:none;
    border-radius:3px;
    margin:15px;
}
.e:hover
{
    background-color:grey;
    color:white;
}
hr
{
  color:grey;
}
</style>
<title>GAMEZONE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="snip1"></div>
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
        <li><a href="your"><span class="glyphicon glyphicon-shopping-cart"></span>YourCart</a></li></ul>
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
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="deck">
<h1 >GAMEZONE</h1>
<h3 >BUY OR SELL GAMES ONLINE</h3>
</div>
</div>
</div>
</div>
<div class="container-fluid">

<div class="row">
<div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
</div>
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
<div class="gallery">
  <a target="_blank" href="PS4-Sniper-Elite-4-300x343.jpg">
    <img src="PS4-Sniper-Elite-4-300x343.jpg" alt="Trolltunga Norway" width="850" height="350">
  </a>
</div>
</div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
    <br>
    <h1>SNIPER ELITE 4 EXTENDED PS4</h1>
    <h3 style="color:red">Free Delivery All Over USA</h3>
    <hr>
    <h3>Rs.799</h3>
    <hr>
    <button onClick="location.href='cart4'" class="add">ADD TO CART</button>
    <hr>
    <button class="i"><i class="fa fa-facebook-square" style="font-size:24px"></i> Share</button>
    <button class="g"><i class="fa fa-google-plus" style="font-size:24px"></i> Share</button>
    <button class="t"><i class="fa fa-twitter" style="font-size:24px"></i> Tweet</button>
    <button class="e"><span class="glyphicon glyphicon-envelope" style="font-size:24px"></span> Email</button>
    <h1>OTHER DETAILS</h1>
    <hr>
</div>
<div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
</div>
</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
</div>
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <button type="button" class="extra" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Description</button>
  <div id="demo1" class="collapse">
    <h1>Description</h1>
<h3>Sniper Elite 4 is the next game in the award-winning, chart-topping shooter series.
Sniper Elite 4 combines genre-defining ballistics, breathless emergent stealth, and gripping third person action across the largest and most diverse environments ever seen in a Sniper Elite game.
Set in the aftermath of its award-winning predecessor, Sniper Elite 4 continues the series’ World War Two heritage by transporting players across the beautiful Italian peninsula, from sun-drenched Mediterranean coastal towns, to colossal Nazi mega structures, daunting forests and giddying mountain monasteries inspired by Monte Cassino.
Covert agent and elite marksman Karl Fairburne must fight alongside the brave men and women of the Italian Resistance to help free their country from the yoke of Fascism, and defeat a terrifying new threat with the potential to halt the Allied fightback in Europe before it’s even begun.
If his mission fails, there will be no Operation Overlord, no D-Day landings, and no Victory in Europe.
True Next-Generation Sniping
Running in native 1080p on both PlayStation 4 and Xbox One, Sniper Elite 4 is the first game in the series built from the ground-up for next generation hardware.
With an expansive campaign for 1-2 players and dedicated co-op and adversarial multiplayer modes, Sniper Elite 4 aims to deliver the definitive World War Two shooter for a generation, with unrivalled sniping freedom across maps many times the size of those seen in Sniper Elite 3.</h3>
<h3><strong>All our pre-owned games are quality tested and fully playable, but bonus content or codes for online play may have been redeemed. Game may not include original artwork and/or manual.

Pre-owned games may have minor scratches but are guaranteed to work.</strong>
</h3>
  </div>
    <button type="button" class="extra" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Shipping And Delivery</button>
  <div id="demo2" class="collapse ">
  <h1>Shipping And Delivery</h1>
<h3>Orders placed before 11-30AM IST, on a business day will be shipped out the same day. All other orders will be shipped out the next business day. After your order is processed, transit time typically 3 to 4 business days, with delivery Monday-Saturday.</h3>
  </div>
   <button type="button" class="extra" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Payment Methods</button>
  <div id="demo3" class="collapse ">
   <h1>PAYMENT METHODS</h1>
   <h4>DEBIT/CREDIT CARD</h4>
   <h4>NET BANKING</h4>
   <h4>CASH ON DELIVERY</h4>
  </div>
  <hr>
</div>
</div>
<center><h3>@ 2017gamezone</h3></center>
</div>
<div class="snip2"></div>
</body>
</html>