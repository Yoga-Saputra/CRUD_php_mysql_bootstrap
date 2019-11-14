<?php 
    include('config/koneksi.php');
        $id     = $_POST['id_brg']; 
        $nama   = $_POST['nama_brg'];
        $harga = $_POST['harga_brg'];
        $stok   = $_POST['stok_brg'];

        // query update data
        $update = mysqli_query($conn, "UPDATE t_barang SET nama_brg='$nama', harga_brg='$harga', stok_brg='$stok' WHERE id_brg='$id' ");
     


        if($update){
            header('Location: barang.php');
        }else{
            echo 'Update data gagal';
        }
    

?>