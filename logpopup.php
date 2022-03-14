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

.farcry4 {
    /* The image used */
    background-image: url('mirror-edj-3840x2160-katalist-feyt-konnor-ps-11286.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.msg{
    /* The image used */
    background-image: url('6_Bosses.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.detroit{
    /* The image used */
    background-image: url('maxresdefault.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.untildawn{
    /* The image used */
    background-image: url('Batman-Arkham.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.usa{
    /* The image used */
    background-image: url('statueliberty_schaer-087_2__x_large.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.lastofus{
    /* The image used */
    background-image: url('last-of-us-movie.jpg');

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
    background-image: url('rain-drops-hd-Wallpaper.jpg');

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
    float: left;
      width: 250px;
}

div.gallery:hover {
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
div.lick
{
  border-radius: 15px;
  margin:  40px 40px 40px 40px;
  padding: 15px;
   box-shadow: 20px 20px 50px grey;
}
div.deck
{
  border-radius: 30px;
  margin:  0px 0px 40px 0px;
  padding: 15px;
   
   box-shadow: 20px 20px 50px grey;
}
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
<title>GAMEZONE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="farcry4"></div>
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
    <li><a href="#"><h4>HOME</h4></a></li>
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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
       <div class="item active">
       <img src="TheLastofUs_feature.jpg" alt="ERROR" style="width:100%;">
         <div class="carousel-caption">
          <h3>Starting at Rs:999 only for PS4</h3>
            <p>IGN:10/10  GAMESPOT:9.5/10</p>
          </div>
          </div> 
      <div class="item">
        <img src="2947463-rise_of_the_tomb_raider-wide.jpg" alt="ERROR" style="width:100%;">
        <div class="carousel-caption">
          <h3>PS3 and PS4 Exclusive only for Rs:899</h3>
            <p>IGN:9/10  GAMESPOT:9.5/10</p>
          </div>
      </div>    
      <div class="item">
        <img src="watch-dogs-aiden-pearce-wallpaper.jpg" alt="ERROR" style="width:100%;">
            <div class="carousel-caption">
          <h3>Starting at Rs:799 </h3>
            <p>IGN:8/10  GAMESPOT:8.5/10</p>
          </div>
      </div>
       <div class="item">
        <img src="sell-your-games-2.jpg" alt="ERROR" style="width:100%;">
      </div>
  <div class="item">
        <img src="Console-Preowned-starting.jpg" alt="ERROR" style="width:100%;">
      </div>
      <div class="item">
        <img src="PS3-Pre-owned-Games-Starting-at-Rs.jpg" alt="ERROR" style="width:100%;">
      </div>
      <div class="item">
        <img src="Xbox-one-preowned-games-home.jpg" alt="ERROR" style="width:100%;">
      </div>
      <div class="item">
        <img src="65166.jpg" alt="ERROR" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   <div class="msg"></div>
   <div class="container-fluid">
    <div class="lick">
   <center><h1>Buy or Sell Games Online</h1></center>
   
<center><h3>"Gamezone offers you a brand new, ultra-convenient way to buy and sell games and gaming consoles online. We specialize in trading new and pre-owned games, covering all current consoles (PS4, PS3, Xbox One, Xbox 360 and PS Vita). You can buy all the latest games such as Assassin's Creed, Fifa 17, Uncharted, God of War, GTA and Call of Duty at the best prices available online"</h3></center>
</div>
</div>
    <div class="detroit"></div>
     <div class="container-fluid">
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="men">
   <h1>TOP PS4 SELLERS</h1>
   </div>
</div>
</div>
</div>
   <div class="container-fluid">
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg1">
    <img src="inFAMOUS-Second-Son-PlayStation-4-Cover-Art-300x343.jpg" alt="Trolltunga Norway" width="250" height="250">
  </a>
  <div class="desc"><h3>INFAMOUS SECOND SON PS4 (RS:999)</h3><button onClick="location.href='cart1.php'" class="add">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg2">
    <img src="PS4-Call-Of-Duty-WWII-300x343.jpg" alt="Forest" width="250" height="250">
  </a>
  <div class="desc"><h3>CALL OF DUTY WW2 PS4 (RS:1099)</h3><button onClick="location.href='cart2.php'" class="add">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg3">
    <img src="METAL-GEAR-SOLID-V-THE-PHANTOM-PAIN-PS4-300x343.jpg" alt="Northern Lights" width="250" height="250">
  </a>
  <div class="desc"><h3>MSGV-THE PHANTOM PAIN PS4 (RS:1099)</h3><button onClick="location.href='cart3.php'" class="add">ADD TO CART</button></div>
</div>
</div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg4">
    <img src="PS4-Sniper-Elite-4-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>SNIPER ELITE 4 EXTENDED PS4 (RS:799)</h3><button onClick="location.href='cart4.php'" class="add">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a href="logimg5">
    <img src="Until-Dawn-Ps4-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>UNTIL DAWN EXTENDED PS4 (RS:1199)</h3><button onClick="location.href='cart5.php'" class="add">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a href="logimg6">
    <img src="PS4-Mirros-Edge-Catalyst-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>MIRRORS EDGE EXTENDED PS4 (RS:999)</h3><button onClick="location.href='cart6.php'" class="add">ADD TO CART</button></div>
</div>
</div>
</div>
<div class="lick">
   <center><h1>FREE DELIVERY ALL OVER USA</h1></center>
</div>
</div>
<div class="untildawn"></div>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="men">
   <h1>TOP PS3 SELLERS</h1>
   </div>
</div>
</div>
</div>
<div class="container-fluid">
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg7">
    <img src="Watch-dogs-ps3.jpg" alt="Trolltunga Norway" width="250" height="250">
  </a>
  <div class="desc"><h3>WATCH DOGS-EXTENDED PS3 (RS:599)</h3><button onClick="location.href='cart7.php'" class="add">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg8">
    <img src="Grand-Theft-Auto-V-PS3-300x343.jpg" alt="Forest" width="250" height="250">
  </a>
  <div class="desc"><h3>GRAND THEFT AUTO V PS3 (RS:1099)</h3><button onClick="location.href='cart8.php'" class="add">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg9">
    <img src="God-of-War-III-PS3-300x343.jpg" alt="Northern Lights" width="250" height="250">
  </a>
  <div class="desc"><h3>GOD OF WAR 3 EXTENDED PS3 (RS:499)</h3><button onClick="location.href='cart9.php'" class="add">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a href="logimg10">
    <img src="Dishonored-PS3-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>DISHONORED-EXTENDED PS3 (RS:799)</h3><button onClick="location.href='cart10.php'" class="add">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a href="logimg11">
    <img src="Far-Cry-4-PS3-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>FAR CRY 4-EXTENDED PS3 (RS:899)</h3><button onClick="location.href='cart11.php'" class="add">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a href="logimg12">
    <img src="Uncharted-3-Drakes-Deception-PS3-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>UNCHARTED 3 EXTENDED PS3 (RS:899)</h3><button onClick="location.href='cart12.php'" class="add">ADD TO CART</button></div>
</div>
</div>
</div>



<div class="lick">
   <center><h1>PAYMENT METHODS</h1></center>
   <center><h4>DEBIT/CREDIT CARD</h4></center>
   <center><h4>NET BANKING</h4></center>
   <center><h4>CASH ON DELIVERY</h4></center>
</div>
</div>
<div class="usa"></div>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="lick">
   <h1>GAMEZONE LOCATIONS</h1>
   </div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="newy.jpg">
    <img src="newy.jpg" alt="Northern Lights" width="250" height="250">
  </a>
  <div class="desc"><h3>NEW YORK</h3></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="7033075-usa-massachusetts-boston-city-flag-590x390.jpg">
    <img src="7033075-usa-massachusetts-boston-city-flag-590x390.jpg" alt="Northern Lights" width="250" height="250">
  </a>
  <div class="desc"><h3>BOSTON</h3></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="San-Francisco-Golden-Gate-Bridge-640.jpg">
    <img src="San-Francisco-Golden-Gate-Bridge-640.jpg"  alt="Northern Lights" width="250" height="250">
  </a>
  <div class="desc"><h3>SAN FRANCISCO</h3></div>
</div>
</div>
</div>

<div class="lick">
   <center><h1>FREE DOORSTEP PICKUP</h1></center>
</div>
</div>
<div class="lastofus"></div>
<div class="container-fluid">
 <div class="lick">
<center><h1>CONTACT</h1></center>
<center><h4><span class="glyphicon glyphicon-map-marker"></span> NewYork(HEADQUATER),US.</h4></center>
<center><h4><span class="glyphicon glyphicon-phone"></span>+00 1515151515(MON-SAT 11am-7pm)</h4></center>
<center><h4><span class="glyphicon glyphicon-envelope"></span>support@gamezone.in</h4></center>
</div>
</div>
<div class="flower"></div>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-4">
</div>
  <div class="col-sm-3">
    <div class="men">
<h1>QUERIES</h1>
</div>
<div class="heck">
  <form  action="logquery" method="post">
  <div class="form-group" >
     <label for="name">Name</label>
    <input type="name" class="form-control" id="name" name="name" title="Enter your name" placeholder="Name....." required>
  </div>
   <div class="form-group" >
    <label for="name">Email</label>
    <input type="email" class="form-control" id="email" name="email" title="Enter your email" placeholder="Email....." required>
  </div>
   <div class="form-group" >
    <label for="comment">Comment</label>
    <input type="comment" class="form-control" id="comment" name="comment" title="Leave your comment" placeholder="Comment....." required>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
  <center>@ 2017gamezone</center>
</form>
</div>
</div>
</div>
</div>
</body>
</html>