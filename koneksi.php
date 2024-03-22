<?php 
$host="localhost";
$user="root";
$password="";
$db="lelang_online";
$connect=mysqli_connect($host, $user, $password, $db);
if($connect)
{echo "";}
else{echo "koneksi gagal";}
?>