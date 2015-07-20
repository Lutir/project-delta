<!doctype html>
<html>
<head>
	<title>Login Page</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Slab">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/store.css">
<link rel="stylesheet" type="text/css" href="css/headfoot.css">
<link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<body>
<div id="header">
			
			<div id="headerDetails1">
				|<?php 
				session_start();
				if(@$_SESSION['user']==session_id()){
					$text = "logout";
					$link = "php/logout.php";
				}
				else{
					$text="login";
					$link ="loginPage.php";
				}
				?><a href="<?php echo $link; ?>"> <?php echo $text?> </a>|&nbsp;&nbsp;
				|
					<?php if(@$_SESSION['user']==session_id()){
						$link="";
					$text = $_SESSION['username'];}
						else{
							$link="registrationForm.php";
							$text="Sign Up";
					} ?>
				<a href="<?php echo $link; ?>"><?php echo "Hello "; echo $text; ?></a>|
			</div>
			<div id="headerDetails2">
				
				<a id="menuButton">Menu ||</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a>-WEbSite Name-</a>
				</div>
				
		</div>	
	<div id="img">
		<div id="main1">
			<h1>Welcome To Our -About Us-</h1>
			<p> When we came to NIT TRICHY we were told be what you want to be at NIT TRICHY.<br>
				We say eat what you want to eat at NIT TRICHY</p>
		</div>
	</div>
	<!-----side list------>
		<div id="sidelist">
		<!--sidelist close button-->
		<div id="slideclose">
		<img src="images/close.png"></img>
		</div>
		<!-----side list------>
			 <ul>
        <li><a href="#" id="storeName">Order Now</a></li>
			<ul id="store-list" hidden>
			 <li><a href="store.php"><i>--H.K.B--</i></a></li>
			<li><a href="ccd.php"><i>-Cafe Coffee Day-</i></a></li>
			<li><a href="buhari.php"><i>-Buhari-</i></a></li>
			</ul>
        <li><a href="registrationForm.php">Register</a></li>
        <li><a href="loginPage.php">Login</a></li>
        <li><a href="php/pro.php">Profile</a></li> 
		<li><a href="#">About</a></li>
		
      </ul>
		</div>
		</div>
		<div id="success">
			<h1>About Us></h1>
			<p>
				 The process of ordering food online on food2u is very simple, fast and awesome ;)<br>
 Right on the homepage, you can get started by selecting your Hostel Name along with the restaurant.<br>
To provide customers better offers & discount customers will have to register in our site through a small registration Form<br>
After login, you can either select the restaurant you want and further filter your order by all available cuisines like <br>
 Ice creams, Seafood, Salads, etc. by selecting from the list on the left hand side of the page and all the restaurants that offer your desired cuisine will be shown.<br>
 From there you can look through the restaurant menu, pick your favorite dishes including appetizers, desserts and drinks;<br>
 the order will arrive straight to your room in no time with free delivery. <br>
 To process the payment, you can safely pay online or cash on delivery in Indian rupee.<br>
 What are you waiting for? Choose foodpanda India for home delivery and order online now!<br>
 

			</p>
			
		</div>
	</body>

</html>