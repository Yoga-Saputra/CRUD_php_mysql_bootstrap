 <!-- Menampilkan data barang -->
 <?php 
        include('config/koneksi.php');

        // ambil data dari table t_barang
        $load    = "SELECT * FROM t_barang";
        $result  = mysqli_query($conn, $load);
        $no = 1;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
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
    <h3>Data Barang</h3>
    <a href="barang-tambah.php"><button type="button" class="btn btn-info">Tambah Data Barang</button></a><table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Barang</th> 
            <th class="text-center">Harga Barang</th>
            <th class="text-center">Stok Barang</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td class="text-center"> <?= $no ?> </td>
                <td class="text-center"><?= $row["nama_brg"]; ?></td>
                <td class="text-center"><?= $row["harga_brg"]; ?></td>
                <td class="text-center"><?= $row["stok_brg"]; ?></td>
                <td class="text-center">
                <a href="barang-edit.php?id=<?=  $row['id_brg'] ?>" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> Edit</a>
                    <a href="barang-hapus.php?id=<?= $row["id_brg"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus??')"> <i class="fa fa-trash-o"></i> Hapus</a>
                </td>  
            </tr>
        <?php $no++; ?>
    <?php endwhile  ?>
            </tbody>
    </tbody>
  </table>
</div>


	  <script src="assets/jquery.min.js"></script>
  	<script src="assets/js/bootstrap.min.js"></script>
  	<script src="assets/popper.min.js"></script>

</body>
</html>
