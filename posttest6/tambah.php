<?php
require "config.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $suku = $_POST['suku'];
  $gama = $_POST['agama'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $alamat = $_POST['alamat'];
  $query = mysqli_query($db,"INSERT INTO pattimura (nama,suku,agama,tanggal_lahir,alamat) VALUES ('$nama','$suku','$agama','$tanggal_lahir','$alamat')");
  if($query){
    header("Location:index.php");
  } else {
    echo "Tambah data error";
  }
}
?>