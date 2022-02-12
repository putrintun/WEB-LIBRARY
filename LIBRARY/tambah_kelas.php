<!doctype html>
<html>
    <head>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="style_login.css" rel="stylesheet">
        <title>TAMBAH KELAS</title>
    </head>
    <body>
        <div class="login">
            <form action="proses_tambah_kelas.php" method="post" class="form">
                <img src="assets/RANDOM/LOGIN.jpg" alt="">
                <h2><b>TAMBAH KELAS</b></h2>
                <div class="input-group">
                    <input type="text" name="nama_kelas" id="nama_kelas" required>
                    <label for="nama_kelas">Nama Kelas</label>
                </div>
                <div class="input-group">
                    <input type="text" name="kelompok" id="kelompok" required>
                    <label for="kelompok">Kelompok</label>
                </div>
                <center><button onclick="history.back(-1)" class="submit">BACK</button>
                <input type="submit" value="Tambah" class="submit"></center>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>