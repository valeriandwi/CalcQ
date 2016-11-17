<?php
SESSION_START();
require('koneksi.php');

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from user where username='$username'";
$query=mysql_query($sql,$koneksi);
$data=mysql_fetch_array($query);

if(($data[username]==$username) and ($data[password]==$password))
{
	$_SESSION['username']=$data['username'];
	header("location:index.php");
}
else{
	$_SESSION['username']='invalid';
	header("location:login.php");
}
?>