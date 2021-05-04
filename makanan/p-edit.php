<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "UPDATE menu SET nama='$nama', harga='$harga', stok='$stok' WHERE id='$id'";
    $input = mysqli_query($koneksi, $query);

    if ($input) {
        header("location:f-menu.php");
    }else {
        echo "DATA GAGAL DI TAMBAH";
    }
?>