<!DOCTYPE html>
<html>
    <head>
        <title>KERANJANG</title>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="style_header.css" rel="stylesheet">
        <link href="style_home.css" rel="stylesheet">
        <link href="style_table.css" rel="stylesheet">
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
                        <a href="buku.php" ><span class="las la-book"></span>
                        <span>Book</span></a>
                    </li>
                    <li>
                        <a href="keranjang.php" class="active"><span class="las la-shopping-cart"></span>
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
        <table>
            <th>No</th><th>Nama Buku</th><th>Jumlah</th><th>Aksi</th>
            <?php foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['nama_buku']?></td>
                    <td><?=$val_produk['qty']?></td>
                    <td><a href="hapus_cart.php?id=<?=$key_produk?>"><strong><i class="las la-minus-circle"></i></strong></a></td>
                </tr>
                <?php if(@$_SESSION['cart']==true){ ?>
                <tr>
                    <td colspan="4" class="td-full"><a href="checkout.php" class="tambah">Check Out</a></td>
                </tr>
            <?php } endforeach ?>
        </table>
    </body>
</html>