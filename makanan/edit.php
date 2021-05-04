<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <form method="post" action="p-edit.php">
        <div class="container-fluid mt-5 ml-5">
            <div class="display-4">INPUT MENU MAKANAN</div>
            <table class="mt-5">
                <?php 
                    include "koneksi.php";
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM menu WHERE id = '$id'");
                    while ($d = mysqli_fetch_array($data)){
                ?>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <tr>
                        <td>Nama Makanan</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><input type="text" name="harga" value="<?php echo $d['harga'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td>:</td>
                        <td><input type="text" name="stok" value="<?php echo $d['stok'] ?>"></td>
                    </tr>
                <?php } ?>
            </table>
            <div class="mt-5">
                <button type="submit" name="tambah" class="btn btn-outline-dark">Update Data</button>
                <a href="f-menu.php" class="btn btn-outline-danger">Menu Makanan</a>
            </div>
            
        </div>
    </form>

</body>
</html>