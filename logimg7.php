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
.dog1 {
    /* The image used */
    background-image: url('750x422xwatch-dogs_game-report-3-2.jpg.pagespeed.ic.THimUYI0L8.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.dog2 {
    /* The image used */
    background-image: url('watchdogs_ss_iraq_full_157600.jpg');

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
    <div class="dog1"></div>
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
  <a target="_blank" href="Watch-dogs-ps3.jpg">
    <img src="Watch-dogs-ps3.jpg" alt="Trolltunga Norway" width="850" height="350">
  </a>
</div>
</div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
    <br>
    <h1>WATCH DOGS-EXTENDED PS3</h1>
    <h3 style="color:red">Free Delivery All Over USA</h3>
    <hr>
    <h3>Rs.599</h3>
    <hr>
    <button onClick="location.href='cart7'" class="add">ADD TO CART</button>
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
<h3>Become a vengeful hacker in a city where everything is connected in the cutting-edge adventure Watch_Dogs for PlayStation 3.

Watch_Dogs introduces a world not too removed from our own, a world where everyone uses the latest gadgets and gear to learn about the world and connect with friends with a simple swipe of the finger. ÃÂ But with that same simple swipe, with that same social connection, we leave a digital shadow that is always growing. An online trail that tracks our every move and milestone, our every like and dislike. ÃÂ And itÃ¢ÂÂs not just people. All major cities are networked, with urban infrastructures constantly monitored and controlled by complex operating systems.

In Watch_Dogs, this system is called the Central Operating System (ctOS). It controls almost every part of the city, from stoplights to bankvaults, mobile phones to business databases. And it holds key information on everyone in the city.

This is where you come in. You play as Aiden Pearce, a brilliant hacker and former thug, whose past led to a violent family tragedy that changed you forever. Now your skills are no longer for personal, criminal gain Ã¢ÂÂ you’ll be using them to hunt down those who hurt your family.

Using your cyber-skills, you can monitor and hack everyone and everything that surrounds you by manipulating the cityÃ¢ÂÂs network. Access omnipresent security cameras, download personal information to locate a target, control traffic lights and public transportation to stop the enemy, and much, much more. The city of Chicago is your ultimate weapon to exact your own style of revenge.</h3>
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
<div class="dog2"></div>
</body>
</html>