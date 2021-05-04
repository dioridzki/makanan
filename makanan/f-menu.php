<?php
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid mt-5 ml-5">
        <div class="display-4">MENU MAKANAN</div>
        <table border="4" class="mt-3">
            <a href="f-input.php" class="btn btn-outline-secondary mt-3">Tambah Menu</a>
            <tr>
                <th>Kode Brg</th>
                <th>Nama Makan</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Terjual</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                <?php  
                    while($d = mysqli_fetch_array($data)){
                ?>
                    <tr>
                        <td><?php echo $d['id'] ?></td>
                        <td><?php echo $d['nama'] ?></td>
                        <td><?php echo $d['harga'] ?></td>
                        <td><?php echo $d['stok'] ?></td>
                        <td><?php echo $d['terjual'] ?></td>
                        <td>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $d['id']; ?>">UBAH</a>
                        </td>
                    </tr>  
            <?php } ?>
            </tbody>
        </table>
        <form>
            <div class="display-4 mt-5">PESAN MAKANAN</div>
            <?php if (isset($_GET['tombolcari'])) {
                $txtcari = $_GET['txtcari'];
                $data = mysqli_query($koneksi, "SELECT * FROM menu WHERE id LIKE '%$txtcari%' "); 
                $d = mysqli_fetch_array($data);
            ?>
                <table>
                    <tr>
                        <td>Nama Makanan</td>
                        <td>:</td>
                        <td><label><?php echo $d['nama'] ?></label></td>
                    </tr>
                    <tr>
                        <td>Harga Makanan</td>
                        <td>:</td>
                        <td><label><?php echo $d['harga'] ?></label></td>
                    </tr>
                    <tr>
                        <td>BAYAR ! </td>
                        <td>:</td>
                        <td><input type="text" name="harga"></td>
                        <td><a href="" class="btn btn-success">BAYAAR</a></td>
                    </tr>
                </table>
            <?php } ?>
            <input type="text" placeholder="masukan kode makanan" name="txtcari">
            <button class="btn btn-outline-success" type="submit" name="tombolcari">Cari</button>
        </form>
    </div>
</body>
</html>


