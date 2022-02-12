<!DOCTYPE html>
<html>
    <head>
        <title>SISWA</title>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="style_header.css" rel="stylesheet">
        <link href="style_home.css" rel="stylesheet">
        <link href="style_table.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body>
        <?php
            include "header.php";
        ?>
        <div class="sidebar">
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="home.php"><span class="las la-home"></span>
                        <span>Home</span></a>
                    </li>
                    <li>
                        <a href="buku.php"><span class="las la-book"></span>
                        <span>Book</span></a>
                    </li>
                    <li>
                        <a href="keranjang.php"><span class="las la-shopping-cart"></span>
                        <span>Cart</span></a>
                    </li>
                    <li>
                        <a href="histori_peminjaman.php"><span class="las la-history"></span>
                        <span>History</span></a>
                    </li>
                    <li>
                        <a href="tampil_siswa.php" class="active"><span class="las la-user-friends"></span>
                        <span>Student</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <table>
            <tr><th>No</th><th>Nama Siswa</th><th>Tanggal Lahir</th><th>Alamat</th><th>Gender</th><th>Username</th><th>kelas</th><th>Aksi</th></tr>
            <?php
                include "koneksi.php";
                $qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas = siswa.id_kelas"); $no=0;
                while($data_siswa=mysqli_fetch_array($qry_siswa)){ $no++;?>
            <tr>
                <td><?=$no?></td><td><?=$data_siswa['nama_siswa']?></td>
                <td><?=$data_siswa['tanggal_lahir']?></td>
                <td><?=$data_siswa['alamat']?></td>
                <td><?=$data_siswa['gender']?></td> 
                <td><?=$data_siswa['username']?></td>
                <td><?=$data_siswa['nama_kelas']?></td>
                <td>
                    <a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="ubah"><i class="las la-edit"></i></a> |
                    <a href="hapus.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="hapus"><i class="las la-trash"></i></a>
                </td>                
            </tr>
            <?php } ?>
            <tr>
                <td colspan="8" class="td-full"><a href="tambah_siswa.php" class="tambah" onclick="return confirm('Anda akan logout untuk menambah siswa !')">Tambah Siswa</a></td>
            </tr>
            <tr>
                <td colspan="8" class="td-full"><a href="tambah_kelas.php" class="tambah">Tambah Kelas</a></td>
            </tr>
        </table>
    </body>
</html>