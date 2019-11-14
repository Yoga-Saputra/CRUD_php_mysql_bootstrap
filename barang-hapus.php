<?php 
    include('config/koneksi.php');
    $id =   $_GET['id'];
    
    $delete = mysqli_query($conn, "DELETE FROM t_barang WHERE id_brg='$id' ");
    
    if($delete)
        header('Location: barang.php');
    else
        echo 'Delete data gagal';
?>