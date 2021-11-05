<?php require_once("config/config.php");?>
<!Doctype html>
<html lang="en">
<head>
  <title>number-lister</title>
  <meta charset="utf-8">
  <meta name="descrription" content="Fresh organic tropical fruits">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/lister.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
</head>

<body id="big_wrapper">
   <div>
	 <header id="topheader"  style="background:crimson; color:white; font-size:16px;">
	 <img src=""/>
	 <h1 style="text-align:left">NUMBER LISTER</h1>
	 </header>
	 <style>
  h1, img{
	  display:inline;
	  line-height:30px;
  }
  </style>

  <nav id="topmenu">
	<ul id="navigation">
	  <li><a id="active" href="index.php">HOME</a></li>
	    <div style="text-align:right">
		<?php
        if(isset($_SESSION['username'])){
         echo ' <form action="includes/logout.php" method="POST">
		 <button type="submit" name="logout_btn" class="btn btn-danger">SignOut</button>
	 </form>';
           }
       else{
		   echo
	        '<a href="signin.php" class="btn btn-success">SIGN IN!</a>
	         <a href="signup.php" class="btn btn-primary">SIGN UP!</a>';
	}
          ?>

		</div>
	</ul> 
  </nav>