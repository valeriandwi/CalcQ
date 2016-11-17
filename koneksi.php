<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$koneksi=mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b3ae3679ede8e3","622ff1c7");
mysql_select_db("calcq",$koneksi) or die("Database tidak ada");
?>