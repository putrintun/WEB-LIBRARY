<?php
    if($_GET['id_buku']){
        include "koneksi.php";
        $id = $_GET['id_buku'];
        $sql = $conn -> query ("select * from buku where id_buku = '$id'");
        $data = $sql -> fetch_assoc();
        $foto = $data['foto'];
        if(file_exists("assets/foto_produk/$foto")){
            unlink("assets/foto_produk/$foto");
        }
        $qry_hapus=mysqli_query($conn,"delete from buku where id_buku='".$_GET['id_buku']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus buku');location.href='buku.php';</script>";
        }else{
            echo "<script>alert('Gagal hapus buku');location.href='buku.php';</script>";
        }
    }
?>