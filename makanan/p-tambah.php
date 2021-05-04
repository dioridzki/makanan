<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO menu SET nama='$nama', harga='$harga', stok='$stok'";
    $input = mysqli_query($koneksi, $query);

    if ($input) {
        header("location:f-menu.php");
    }else {
        echo "DATA GAGAL DI TAMBAH";
    }
?>