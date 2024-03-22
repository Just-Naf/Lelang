<?php
include "koneksi.php";
$query = mysqli_query($connect, "SELECT * FROM pengguna where id_pengguna = $_REQUEST[id_pengguna]");
while($data = mysqli_fetch_array($query)){
    $id_pengguna = $data['id_pengguna'];
    $nama_pengguna = $data['nama_pengguna'];
    $alamat = $data['alamat'];
    $email = $data['email'];
    $no_hp = $data['no_hp'];
    $username = $data['username'];
    $password = $data['password'];
}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input pengguna</title>
</head>
<body>
    <h1>FORM INPUT PENGGUNA</h1>
    <table width="600" border="1">
        <form action="formeditpengguna.php" method="post">
            <tr>
                <td>ID Pengguna</td>
                <td><input type="number" name="id_pengguna" value="<?php echo $data['id_pengguna']; ?>" maxlength="4" required></td>
            </tr>
            <tr>
                <td>Nama Pengguna</td>
                <td><input type="text" name="nama_pengguna"  value="<?php echo $data['nama_pengguna']; ?>" maxlength="50" ></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"  value="<?php echo $data['alamat']; ?>" ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"  value="<?php echo $data['email']; ?>" ></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="text" name="no_hp"  value="<?php echo $data['no_hp']; ?>" ></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data['username']; ?>" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"  value="<?php echo $data['password']; ?>" ></td>
            </tr>
            <tr>
                <td colspan="2>">
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" value="hapus">
                    <input type="button" href="datapengguna.php" value="data user">
                </td>
            </tr>
        </form>
    </table>
    <a href="datapengguna.php" class="">
        <button type="button">cek data yang berhasil saya curi</button>
    </a>
</body>
</html>