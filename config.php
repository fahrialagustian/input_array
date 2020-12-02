<?php 
$con = mysqli_connect('localhost','root','','barang')or die(mysqli_error($con));
if(!$con){
    echo "Koneksi Gagal";
}
?>