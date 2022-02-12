<!doctype html>
<html lang="en">
    <head>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="style_login.css" rel="stylesheet">
        <title>SIGN UP</title>
        <style>
            .login{
                height: 165.8vh;
                width: 100vw;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div class="login">
            <form action="proses_tambah_siswa.php" method="post" class="form">
                <img src="ASSETS/RANDOM/LOGIN.jpg" alt="">
                <h2><b>SIGN UP SISWA</b></h2>
                <div class="input-group">
                    <input type="text" name="nama_siswa" required>
                    <label for="nama_siswa">Nama Lengkap</label>
                </div>
                <div>
                    <label for="id_kelas">Kelas</label>
                    <select name="id_kelas" class="form-control" required>
                        <option></option>
                        <?php
                            include "koneksi.php";
                            $qry_kelas=mysqli_query($conn,"select * from kelas"); 
                            while($data_kelas=mysqli_fetch_array($qry_kelas)){echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';}
                        ?>
                    </select>
                </div> <br>
                <div>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="" class="form-control" required>
                </div> <br>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control" required>
                        <option></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                    </select> <br>
                </div>
                <div class="input-group">
                    <input type="text" name="alamat" required>
                    <label for="alamat">Alamat</label>
                </div>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <center><input type="submit" value="SIGN UP" class="submit"></center> <br>
                <center><p>Already have an Account ? <a href="login.php">Log In</a></p></center>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>