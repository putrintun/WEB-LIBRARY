<!doctype html>
<html lang="en">
    <head>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="style_login.css" rel="stylesheet">
        <title>TAMBAH BUKU</title>
    </head>
    <style>
        .login{
            height: 110vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <body>
        <div class="login">
            <form action="proses_tambah_buku.php" method="post" class="form" enctype="multipart/form-data">
                <img src="ASSETS/RANDOM/LOGIN.jpg" alt="">
                <h2><b>TAMBAH BUKU</b></h2>
                <div class="input-group">
                    <input type="text" name="nama_buku" required>
                    <label for="nama_buku">Nama Buku</label>
                </div>
                <div class="input-group">
                    <input type="text" name="pengarang" required>
                    <label for="pengarang">Pengarang</label>
                </div>
                <div class="input-group">
                    <input type="text" name="deskripsi" required>
                    <label for="deskripsi">Deskripsi</label>
                </div>
                <div>
                    <label for="file">Foto Produk</label>
                    <input type="file" name="file" class="form-control" required>
                </div> <br>
                <center><button onclick="history.back(-1)" class="submit">BACK</button>
                <input type="submit" value="TAMBAH" class="submit"></center>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>