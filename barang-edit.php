<?php 
    include('config/koneksi.php');
    $id = $_GET['id'];
    
    /* Mengambil data record berdasarkan id */
    $query  = mysqli_query($conn, "SELECT * FROM t_barang WHERE id_brg='$id' ");
    $r   =   mysqli_fetch_assoc($query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-info">
        <a class="navbar-brand" href="index.php">Navbar</a>
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
    <h2>Edit Barang</h2>
        <form action="barang-update.php" method="POST">           
            <div class="form-group">
                <input type="hidden" name="id_brg" value="<?= $r['id_brg'] ?>">
            </div>
            <div class="form-group">
                <label for="nama_brg">Nama Barang:</label>
                <input type="text" class="form-control" id="nama_brg" placeholder="Masukkan Nama" name="nama_brg" value="<?= $r['nama_brg']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga_brg">Harga Barang:</label>
                <input type="text" class="form-control" id="harga_brg" placeholder="Masukkan Harga Barang" name="harga_brg" value="<?= $r['harga_brg']; ?>" required>
            </div>
            <div class="form-group">
                <label for="stok_brg">Stok Barang:</label>
                <input type="text" class="form-control" id="stok_brg" placeholder="Masukkan Stok Barang" name="stok_brg" value="<?= $r['stok_brg']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update Barang</button>
        </form>
    </div>

    <script src="assets/jquery.min.js"></script>
  	<script src="assets/js/bootstrap.min.js"></script>
  	<script src="assets/popper.min.js"></script>
</body>
</html>