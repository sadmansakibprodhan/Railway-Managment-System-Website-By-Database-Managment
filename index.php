<HTML>
<HEAD>
<TITLE>Bangladesh Railways</TITLE>
<style type="text/css">
@import url(style.css);

#logo	{ 

    width: 80px;
    height:80PX; 
    float: left;
}

*	{
	color: white;
}
html { 
  background: url(img/pic.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:900px;
		height: 400px;
		margin: 0 auto;
		margin-top: 30px;
		color:white;
		border-radius: 25px;
  		padding-top: 10px;
    	padding-right: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	background-color: rgba(0,0,0,0.3);
	}
</style>
</HEAD>
<BODY>
<?php 
session_start();
include("header.php"); ?>
<div id="main"><div id="logo">
<A HREF="index.php">
<IMG SRC="img/logo.jpg" alt="Home" id="logo" width="350" height="350"></IMG>
</A></div><!-- 
<h1 align="left">Welcome to Bangladesh Railways!</h1><br/><br/><br/>
<h2 align="center">Have a safe journey with us</h2> -->
</div>
    <div class="hero">
      <h1>welcome to Bangladesh Railways!!!!!Book your tickets </h1>
    </div>
    <div class="hero1">
      <h2>50% discount on online booking </h2>

    </div>
      <h3></h3>
    </div>
<br/><br/><br/>
<?php
if(isset($_SESSION['user_info']))
  echo '<h3 align="center"><a href="booktkt.php">Book here</a></h3>';
else
  echo '<h3 align="center" ><a href="register.php">Please sign up or login before booking</a></h3>';
?>
</div>
</BODY>
</HTML>