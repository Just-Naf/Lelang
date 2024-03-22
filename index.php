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
        <form action="inputpengguna.php" method="post">
            <tr>
                <td>ID Pengguna</td>
                <td><input type="number" name="id_pengguna" placeholder="masukan ID Pengguna" maxlength="4" required></td>
            </tr>
            <tr>
                <td>Nama Pengguna</td>
                <td><input type="text" name="nama_pengguna"  placeholder="masukan nama Pengguna" maxlength="50" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"  placeholder="masukan Alamat" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"  placeholder="masukan Email Pengguna" required></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="text" name="no_hp"  placeholder="masukan Nomor HP" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"  placeholder="masukan Username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"  placeholder="masukan Password" required></td>
            </tr>
            <tr>
                <td colspan="2>">
                    <input type="submit" value="simpan">
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