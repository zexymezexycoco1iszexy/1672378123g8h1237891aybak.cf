<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!-- this -- main css-->
<title>Welcome | BLOM Web's page! </title>
<link rel="icon" type="image/x-icon" href="https://my-actual-web.phonesallowed.repl.co/assets/favicon.ico" />
<h1><span style="font-size:2.05em;">Welcome <?php echo $user_data['user_name']; ?></span><br></h1>

<input id="toggle" type="checkbox"></input>

<label for="toggle" class="hamburger">
    <div class="top-bun"></div>
    <div class="meat"></div>
    <div class="bottom-bun"></div>
</label>

<div class="nav">
    <div class="nav-wrapper">
        <nav>
        <a href="#"><?php echo $user_data['user_name']; ?></a><br>
          <a href="index.php">Home Page</a><br>
          <a href="pg/ghsd5sdbv657123v6sdv265cvasd67cvhg125casd52cc2gh6as-srch.html">Search</a><br>
          <a href="plans.php">Manage Plans</a><br>
          <a href="pages/shop.html">Store</a><br>
          <a href="pages/News.html">News</a><br>
          <a href="pages/Blog.html">Blog</a><br>
            <br> 
          <a href="pages/Contact.html">Contact/Support</a><br>
          <a href="pages/About_my_website.html">About Website</a><br>
          <a href="pages/dontknow.html">Don't Know Where To Start?</a><br>
          <a href="https://buy.stripe.com/4gw7tg2wI4ls0iAbII">Test</a><br>
          <a href="logout.php">Logout</a>
          


        </nav>
    </div>

</div>
<link rel="stylesheet" href="https://12398123y89129739123719312897318923912h3hj1k23gbhj13781378h1.davecave1899.repl.co/gr7812793713978178931897389713897123hui1hjk31hjk3i1u31hui3uji1h31ui3n13">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0}

.icon-bar {
  width: 90px;
  background-color: black;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #f8982b;
}

.active {
  background-color: #0000;
}
</style>
<body>

<div class="icon-bar">
  
  <a class="active" href="index.php"><i class="fa fa-home"></i>
<a href="pg/ghsd5sdbv657123v6sdv265cvasd67cvhg125casd52cc2gh6as-srch.html"><i class="fa fa-search" ></i></a>
  <a href="https://my-actual-web.phonesallowed.repl.co/pages/Contact.html"><i class="fa fa-envelope"></i></a> 
  </a>
  
</div>






  