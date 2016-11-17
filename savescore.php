<?php
	session_start();
	include('koneksi.php');
	$score=$_POST['score'];
	$level=$_GET['level'];
	$username=$_SESSION['username'];

	if(isset($username)) {
		error_reporting(0);
    	$query=mysql_query("INSERT INTO score(username,level,score,timeplay)values('$username','$level','$score',NOW());");
    	header("location:index.php");
    }else{
    	header("location:index.php");
    }