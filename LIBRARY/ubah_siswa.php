<!doctype html>
<html>
    <head>
        <link href="ASSETS/RANDOM/LOGIN.jpg" rel="shortcut icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="style_login.css" rel="stylesheet">
        <title>UBAH SISWA</title>
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
        <?php
            include "koneksi.php";
            $qry_get_siswa=mysqli_query($conn,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");
            $dt_siswa=mysqli_fetch_array($qry_get_siswa);
        ?>
        <div class="login">
            <form action="proses_ubah_siswa.php" method="post" class="form">
                <img src="ASSETS/RANDOM/LOGIN.jpg" alt="">
                <h2><b>UBAH SISWA</b></h2>
                <input type="hidden" name="id_siswa" value="<?=$dt_siswa['id_siswa']?>">
                <div class="input-group">
                    <input type="text" name="nama_siswa" value="<?=$dt_siswa['nama_siswa']?>" required>
                    <label for="nama_siswa">Nama Lengkap</label>
                </div>
                <div>
                    <label for="id_kelas">Kelas</label>
                    <select name="id_kelas" class="form-control" required>
                        <option></option>
                        <?php
                            $qry_kelas=mysqli_query($conn,"select * from kelas");
                            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                if($data_kelas['id_kelas']==$dt_siswa['id_kelas']){
                                    $selek="selected";
                                } else {
                                    $selek="";
                                }
                            echo '<option value="'.$data_kelas['id_kelas'].'"'.$selek.'>'.$data_kelas['nama_kelas'].'</option>';
                            }
                        ?>
                    </select>
                </div> <br>
                <div>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?=$dt_siswa['tanggal_lahir']?>" class="form-control" required>
                </div> <br>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control" required>
                        <option></option>
                        <?php 
                        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                        foreach ($arr_gender as $key_gender => $val_gender):
                            if($key_gender==$dt_siswa['gender']){
                                $selek="selected";
                            }else{
                                $selek="";
                            }
                        ?>
                        <option value="<?=$key_gender?>"<?=$selek?>><?=$val_gender?></option>
                        <?php endforeach ?>
                    </select> <br>
                </div>
                <div class="input-group">
                    <input type="text" name="alamat" value="<?=$dt_siswa['alamat']?>" required>
                    <label for="alamat">Alamat</label>
                </div>
                <div class="input-group">
                    <input type="text" name="username" value="<?=$dt_siswa['username']?>" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <center><button onclick="history.back(-1)" class="submit">BACK</button>
                <input type="submit" value="UBAH" class="submit"></center>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>