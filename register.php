<?php
	include('koneksi.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$query = mysql_query("SELECT username FROM user WHERE username='$username'");

	if((!empty($username))&&(!empty($password))&&(!empty($email))&&(mysql_num_rows($query))==0){
		$sql=mysql_query("INSERT INTO user(username,password,email) values('$username','$password','$email');");
		$query=mysql_query($sql,$koneksi);
		header("location:login.php");
	}else if(mysql_num_rows($query)!=0){
		echo"<script>alert('Username already exists, use another username!');javascript:history.go(-1);</script>";
	}
	else{
		echo"<script>alert('Field tidak boleh kosong! ');javascript:history.go(-1);</script>";
	}
?>