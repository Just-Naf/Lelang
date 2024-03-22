<?php 
include "koneksi.php";
$query = mysqli_query($connect, "INSERT INTO pengguna VALUES(
    $_POST[id_pengguna],
    '$_POST[nama_pengguna]',
    '$_POST[alamat]',
    '$_POST[email]',
    '$_POST[no_hp]',
    '$_POST[username]',
    '$_POST[password]')");
if($query)
{echo "<script> alert('DATA ANDA BERHASIL DI SIMPAN. SEKARANG SAYA PUNYA DATA ANDA HAHAHAHAH'); 
window.location.href='datapengguna.php';</script>";}
else
{echo "<script> alert('ULANGIN GIH DATA KALIAN BELOM MASOK'); 
    window.location.href='index.php';</script>";}
?>