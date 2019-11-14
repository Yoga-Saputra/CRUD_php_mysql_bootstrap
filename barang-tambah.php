<?php 
    include('config/koneksi.php');
    if(isset($_POST["submit"])){
        // ambil data dari tiap elemen dalam form
        $nama_brg   = $_POST["nama"];
        $harga_brg  = $_POST["harga"];
        $stok_brg   = $_POST["stok"];

        // query insert data
        $load   =   "INSERT INTO t_barang Values ('', '$nama_brg', '$harga_brg', '$stok_brg') ";
        $insert   =   mysqli_query($con, $load);

        if($insert){
            header("Location:barang.php?ref=barang-tambah&pesan=sukses");
        }else{
            header("Location:barang.php?ref=barang-tambah&pesan=gagal");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-info">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="barang.php">Barang</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <h2>Data Barang</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama Barang:</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga Barang:</label>
                <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Barang" name="harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok Barang:</label>
                <input type="text" class="form-control" id="stok" placeholder="Masukkan Stok Barang" name="stok" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
    </div>

    <script src="assets/jquery.min.js"></script>
  	<script src="assets/js/bootstrap.min.js"></script>
  	<script src="assets/popper.min.js"></script>
</body>
</html>