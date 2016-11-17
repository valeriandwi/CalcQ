<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CalcQ Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
</head>
<?php
	session_start(); 
	if(isset($_SESSION['username'])) {
    	header("location:index.php");
    }
?>
  <body>
	<div class="container">
	  <div class="info">
	    <h1>Calc.Q Login</h1>
	  </div>
	</div>
	<div class="form">
	  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
	  <form class="register-form" method="POST" action="register.php">
	    <input type="text" placeholder="Username" name="username"/>
	    <input type="password" placeholder="Password" name="password"/>
	    <input type="text" placeholder="E-mail address" name="email"/>
	    <button type="submit">Create</button>
	    <p class="message">Already registered? <a href="#">Sign In</a></p>
	  </form>
	  <form class="login-form" method="POST" action="validation.php">
	    <input type="text" placeholder="Username" name="username"/>
	    <input type="password" placeholder="Password" name="password"/>
	    <button type="submit">Login</button>
	    <p class="message">Not registered? <a href="#">Create an account</a></p>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script type="text/javascript">
    $('.message a').click(function(){$('form').animate({height: "toggle", opacity: "toggle"}, "slow");});	
    </script>
  </body>
</html>
