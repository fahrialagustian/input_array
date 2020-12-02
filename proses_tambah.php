<?php 
include "config.php";
if (isset($_POST['submit'])) {
    $jum = count($_POST['nama_barang']);
    for ($i=0; $i < $jum; $i++) { 
        $nama_barang = $_POST['nama_barang'][$i];
        $sql = mysqli_query($con,"INSERT INTO barang VALUES('','$nama_barang')") or die(mysqli_error($con));
    }

    echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='index.php';</script>";
}
?>