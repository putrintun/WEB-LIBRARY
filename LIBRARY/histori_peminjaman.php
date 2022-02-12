<!DOCTYPE html>
<html>
    <head>
        <title>HISTORY</title>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="style_header.css" rel="stylesheet">
        <link href="style_home.css" rel="stylesheet">
        <link href="style_table.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <style>
        .belum{
            background-color: #ff0000;
            padding: 5px;
            border-radius: 5px;
            color: #ffffff;
        }
        .sudah{
            background-color: #11470f;
            padding: 5px;
            border-radius: 5px;
            color: #ffffff;
        }
        .kembali{
            background-color: #ff0000;
            padding: 5px;
            border-radius: 5px;
            color: #ffffff;
        }
        .kembali:hover{
            background: #640808;
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
                        <a href="buku.php"><span class="las la-book"></span>
                        <span>Book</span></a>
                    </li>
                    <li>
                        <a href="keranjang.php"><span class="las la-shopping-cart"></span>
                        <span>Cart</span></a>
                    </li>
                    <li>
                        <a href="histori_peminjaman.php" class="active"><span class="las la-history"></span>
                        <span>History</span></a>
                    </li>
                    <li>
                        <a href="tampil_siswa.php"><span class="las la-user-friends"></span>
                        <span>Student</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <table>
            <th>NO</th><th>Tanggal Pinjam</th><th>Tanggal harus Kembali</th><th>Nama Buku</th><th>Status</th><th>Kembalikan</th>
            <?php
                include "koneksi.php";
                $qry_histori=mysqli_query($conn,"select * from peminjaman_buku order by id_peminjaman_buku desc"); $no=0;
                while($dt_histori=mysqli_fetch_array($qry_histori)){ 
                    $no++; $buku_dipinjam="<ol>";
                    $qry_buku=mysqli_query($conn,"select * from detail_peminjaman_buku join buku on buku.id_buku = detail_peminjaman_buku.id_buku where id_peminjaman_buku ='".$dt_histori['id_peminjaman_buku']."'");
                    while($dt_buku=mysqli_fetch_array($qry_buku)){ 
                        $buku_dipinjam.="<li>".$dt_buku['nama_buku']."</li>";}
                        $buku_dipinjam.="</ol>"; 
                        $qry_cek_kembali=mysqli_query($conn,"select * from pengembalian_buku where id_peminjaman_buku ='".$dt_histori['id_peminjaman_buku']."'");
                    if(mysqli_num_rows($qry_cek_kembali)>0){ 
                        $dt_kembali=mysqli_fetch_array($qry_cek_kembali);
                        $denda=" Denda Rp. ".$dt_kembali['denda'];
                        $status_kembali ="<label class='sudah'><i class='las la-calendar-check'></i>".$denda."</label>";
                        $button_kembali=""; 
                    } else {
                        $status_kembali="<label class='belum'>Belum kembali</label>";
                        $button_kembali="<a class='kembali' href='kembali.php?id=".$dt_histori['id_peminjaman_buku']."' onclick='return confirm(\"Anda yakin sudah kembali ?\")'><i class='las la-undo-alt'></i></a>";
                    }
            ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['tanggal_pinjam']?></td><td><?=$dt_histori['tanggal_kembali']?></td><td><?=$buku_dipinjam?></td><td><?=$status_kembali?></td><td><?=$button_kembali?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>