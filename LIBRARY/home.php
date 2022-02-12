<!DOCTYPE html>
<html>
    <head>
        <title>DASHBOARD</title>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="style_header.css" rel="stylesheet">
        <link href="style_home.css" rel="stylesheet">
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
                        <a href="home.php" class="active"><span class="las la-home"></span>
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
                        <a href="tampil_siswa.php"><span class="las la-user-friends"></span>
                        <span>Student</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <main>
                <div class="container">
                    <img class="img-header" src="ASSETS/RANDOM/HEADER.jpg" alt="">
                </div> <br>
                <div class="card">
                    <div>
                        <h1>Selamat Datang <?=$_SESSION["nama_siswa"]?></h1>
                        <span>Banyaklah membaca buku ya !</span>
                    </div>
                    <div>
                        <span class="las la-hand-peace"></span>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>