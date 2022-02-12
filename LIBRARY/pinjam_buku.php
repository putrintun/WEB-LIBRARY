<!DOCTYPE html>
<html>
    <head>
        <title>PiNJAM BUKU</title>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="style_header.css" rel="stylesheet">
        <link href="style_home.css" rel="stylesheet">
        <link href="style_table.css" rel="stylesheet">
        <link href="style_buku.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <style>
        table {
            top: 150px;
            left: 595px;
            width: 50%;
        }
        td{
            text-align: left;
        }
    </style>
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
                <h2>Pinjam Buku<a onclick="history.back(-1)">Batal</a></h2>
                <?php
                include "koneksi.php";
                    $qry_detail_buku=mysqli_query($conn,"select * from buku where id_buku = '".$_GET['id_buku']."'");
                    $dt_buku=mysqli_fetch_array($qry_detail_buku);
                ?>
                <img class="pinjam" src="assets/foto_produk/<?=$dt_buku['foto']?>">
                <form action="masukkankeranjang.php?id_buku=<?=$dt_buku['id_buku']?>"method="post">
                    <table>
                        <tr>
                            <td>Nama Buku</td><td><?=$dt_buku['nama_buku']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td><td><?=$dt_buku['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pinjam</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="klik" type="submit" value="PINJAM"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>
    </body>
</html>