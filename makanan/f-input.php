<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form method="post" action="p-tambah.php">
        <div class="container-fluid mt-5 ml-5">
            <div class="display-4">INPUT MENU MAKANAN</div>
            <table class="mt-5">
                <tr>
                    <td>Nama Makanan</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga"><br></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td>:</td>
                    <td><input type="text" name="stok"></td>
                </tr>
            </table>
            <div class="mt-5">
                <button type="submit" name="tambah" class="btn btn-outline-dark">TAMBAH</button>
                <a href="f-menu.php" class="btn btn-outline-danger">Menu Makanan</a>
            </div>
            
        </div>
    </form>

</body>
</html>