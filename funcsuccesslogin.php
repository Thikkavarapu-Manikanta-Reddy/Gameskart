<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
    <?php
  function MyFunction()
  {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamezone";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM login WHERE NAME='$row[NAME]'";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
  }
   if (isset($_GET['hello'])) {
    MyFunction();
  }
  ?>
  <span class="glyphicon glyphicon-user"></span></a>
  <ul class="dropdown-menu">
          <li><a href="#">DASHBOARD</a></li>
          <li><a href="#">YOUR BUY ORDERS</a></li>
          <li><a href="#">YOUR SELL ORDERS</a></li>
          <li><a href="#">YOUR ACCOUNT DETAILS</a></li>
          <li><a href="login.html"><a href="successlogin.php?hello=true">LOGOUT</a></a></li>
        </ul></li>
  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>YourCart</a></li></ul>
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
<center><h1 >GAMEZONE</h1></center>
<center><h3 style="padding:10px;">BUY OR SELL GAMES ONLINE</h3></center>
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
   <center><h1>TOP PS4 SELLERS</h1></center>
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="inFAMOUS-Second-Son-PlayStation-4-Cover-Art-300x343.jpg">
    <img src="inFAMOUS-Second-Son-PlayStation-4-Cover-Art-300x343.jpg" alt="Trolltunga Norway" width="250" height="250">
  </a>
  <div class="desc"><h3>INFAMOUS SECOND SON PS4 (RS:999)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="PS4-Call-Of-Duty-WWII-300x343.jpg">
    <img src="PS4-Call-Of-Duty-WWII-300x343.jpg" alt="Forest" width="250" height="250">
  </a>
  <div class="desc"><h3>CALL OF DUTY WW2 PS4 (RS:1099)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="METAL-GEAR-SOLID-V-THE-PHANTOM-PAIN-PS4-300x343.jpg">
    <img src="METAL-GEAR-SOLID-V-THE-PHANTOM-PAIN-PS4-300x343.jpg" alt="Northern Lights" width="250" height="250">
  </a>
  <div class="desc"><h3>MSGV-THE PHANTOM PAIN PS4 (RS:1099)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="PS4-Sniper-Elite-4-300x343.jpg">
    <img src="PS4-Sniper-Elite-4-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>SNIPER ELITE 4 EXTENDED PS4 (RS:799)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a target="_blank" href="Until-Dawn-Ps4-300x343.jpg">
    <img src="Until-Dawn-Ps4-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>UNTIL DAWN EXTENDED PS4 (RS:1199)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a target="_blank" href="PS4-Mirros-Edge-Catalyst-300x343.jpg">
    <img src="PS4-Mirros-Edge-Catalyst-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>MIRRORS EDGE EXTENDED PS4 (RS:999)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>
</div>

<div class="lic">
   <center><h1>FREE DELIVERY ALL OVER USA</h1></center>
</div>
</div>
<div class="untildawn"></div>
<div class="container-fluid">
   <center><h1>TOP PS3 SELLERS</h1></center>
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="Watch-dogs-ps3.jpg">
    <img src="Watch-dogs-ps3.jpg" alt="Trolltunga Norway" width="250" height="250">
  </a>
  <div class="desc"><h3>WATCH DOGS-EXTENDED PS3 (RS:599)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="Grand-Theft-Auto-V-PS3-300x343.jpg">
    <img src="Grand-Theft-Auto-V-PS3-300x343.jpg" alt="Forest" width="250" height="250">
  </a>
  <div class="desc"><h3>GRAND THEFT AUTO V PS3 (RS:1099)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="God-of-War-III-PS3-300x343.jpg">
    <img src="God-of-War-III-PS3-300x343.jpg" alt="Northern Lights" width="250" height="250">
  </a>
  <div class="desc"><h3>GOD OF WAR 3 EXTENDED PS3 (RS:499)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
<div class="gallery">
  <a target="_blank" href="Dishonored-PS3-300x343.jpg">
    <img src="Dishonored-PS3-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>DISHONORED-EXTENDED PS3 (RS:799)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a target="_blank" href="Far-Cry-4-PS3-300x343.jpg">
    <img src="Far-Cry-4-PS3-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>FAR CRY 4-EXTENDED PS3 (RS:899)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
  <div class="gallery">
  <a target="_blank" href="Uncharted-3-Drakes-Deception-PS3-300x343.jpg">
    <img src="Uncharted-3-Drakes-Deception-PS3-300x343.jpg" alt="Mountains" width="250" height="250">
  </a>
  <div class="desc"><h3>UNCHARTED 3 EXTENDED PS3 (RS:899)</h3><button style="background-color: powderblue">ADD TO CART</button></div>
</div>
</div>
</div>

<div class="lic">
   <center><h1>PAYMENT METHODS</h1></center>
   <center><h4>DEBIT/CREDIT CARD</h4></center>
   <center><h4>NET BANKING</h4></center>
   <center><h4>CASH ON DELIVERY</h4></center>
</div>
</div>
<div class="usa"></div>
<div class="container-fluid">
<center><h1>GAMEZONE LOCATIONS</h1></center>
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

<div class="lic">
   <center><h1>FREE DOORSTEP PICKUP</h1></center>
</div>
</div>
<div class="lastofus"></div>
<div class="container-fluid">
<center><h1>CONTACT</h1></center>
<center><h4><span class="glyphicon glyphicon-map-marker"></span> NewYork(HEADQUATER),US.</h4></center>
<center><h4><span class="glyphicon glyphicon-phone"></span>+00 1515151515(MON-SAT 11am-7pm)</h4></center>
<center><h4><span class="glyphicon glyphicon-envelope"></span>support@gamezone.in</h4></center>
</div>
<div class="flower"></div>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-4">
</div>
  <div class="col-sm-3">
<h1>QUERIES</h1>
  <form  action="query.php" method="post">
  <div class="form-group" >
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" name="name" placeholder="Name.....">
  </div>
   <div class="form-group" >
    <label for="name">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email.....">
  </div>
   <div class="form-group" >
    <label for="comment">Comment</label>
    <input type="comment" class="form-control" id="comment" name="comment" placeholder="Comment.....">
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
  <center>@ 2017gamezone</center>
</form>
</div>
</div>
</div>
</body>
</html>