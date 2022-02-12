<!DOCTYPE html>
<html>
    <head>
        <title>DASHBOARD</title>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="style_header.css" rel="stylesheet">
        <link href="style_home.css" rel="stylesheet">
        <link href="style_buku.css" rel="stylesheet">
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
                        <a href="buku.php" class="active"><span class="las la-book"></span>
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
                        <a href="tampil_siswa.php"><span class="las la-user-friends"></span>
                        <span>Student</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <main>
            <div class="daftar">
                <h2>Daftar Buku <a href="tambah_buku.php">tambah</a></h2>
                <?php
                    include "koneksi.php";
                    $qry_buku = mysqli_query ($conn,"select * from buku");
                    while($dt_buku=mysqli_fetch_array($qry_buku)){
                ?>
                <div class="list-produk">
                    <img src="assets/foto_produk/<?=$dt_buku['foto']?>">
                    <h4><?=$dt_buku['nama_buku']?></h4>
                    <h5>Oleh : <?=$dt_buku['pengarang']?></h5>     
                    <h5><?=substr($dt_buku['deskripsi'],0,20)?></h5>                
                    <a class="btn btn-pinjam" href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>">Pinjam</a>
                    <a class="btn btn-hapus" href="hapus_buku.php?id_buku=<?=$dt_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
            </div>
            <?php
                }
            ?>
        </main>
    </body>
</html>