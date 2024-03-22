<h1 class="judul" style="text-align:center; margin:1em 0; font-family: 'Acme', sans-serif;">DATA YANG BERHASIL SAYA CURI</h1>
<table  align="center" border="1" class="table align-middle">

          <thead>
            <tr class="hover-overlay ripple" data-mdb-ripple-color="dark">
              <th class="text-center hover-overlay ripple" data-mdb-ripple-color="dark" style="background-color: #29aafe;">No.</th>
              <th class="text-center" style="background-color: #29aafe;">id</th>
              <th class="text-center" style="background-color: #29aafe;">nama pengguna</th>
              <th class="text-center" style="background-color: #29aafe;">alamat</th>
              <th class="text-center" style="background-color: #29aafe;">email</th>
              <th class="text-center" style="background-color: #29aafe;">nomor hp</th>
              <th class="text-center" style="background-color: #29aafe;">username</th>
              <th class="text-center" style="background-color: #29aafe;">password</th>
              <th class="text-center" style="background-color: #29aafe;">aksi</th>
            </tr>
            </thead>
          <tbody>
            <?php 
            include "koneksi.php";
            $no=1;
            $total=0;
            $query = "SELECT id_pengguna, nama_pengguna, alamat, email, no_hp, username, password
                      FROM pengguna;";
            $sql=mysqli_query($connect, $query) or die (mysqli_error($connect));
            while ($data = mysqli_fetch_array($sql)) 
            { ?>
            <tr>
              <td class="text-center"><?=$no++?>.</td>
              <td class="text-center"><?=$data['id_pengguna']?></td>
              <td class="text-center"><?=$data['nama_pengguna']?></td>
              <td class="text-center"><?=$data['alamat']?></td>
              <td class="text-center"><?=$data['email']?></td>
              <td class="text-center"><?=$data['no_hp']?></td>
              <td class="text-center"><?=$data['username']?></td>
              <td class="text-center"><?=$data['password']?></td>
              <td><a href="formeditpengguna?id=<?php echo $data['id_pengguna']; ?>">edit</a>
              <a href="hapuspengguna.php?id=<?php echo $data['id_pengguna']; ?>">hapus</a></td>
            </tr>
            <?php
            }
        ?>
            </tbody>
        </table>
      <div class="vertical-center">
        <a href="index.php" class="">
        <button type="button">balik sono kalian, ngapain liat liat</button>
        </a>
      </div>
      <style>
        .vertical-center {
          margin: 0;
          position: absolute;
          left: 45%;
          right: 45%;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
      </style>