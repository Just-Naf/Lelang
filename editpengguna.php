<?php
include "koneksi.php";
$query = mysqli_query($connect, "UPDATE pengguna set nama_pengguna='$_POST[nama_pengguna]', alamat='$_POST[alamat]', email='$_POST[email]', no_hp='$_POST[no_hp]', username='$_POST[username]', password='$_POST[password]' where id_pengguna=$_POST[id_pengguna]");

if($query){
    echo "<script>alert('update berhasil');window.location.href='datepengguna.php';</script>";
}
?>