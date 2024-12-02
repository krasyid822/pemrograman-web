<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi, "insert into tb_pelanggan (pelanggan_nama,pelanggan_hp,pelanggan_alamat) values('$nama','$hp','$alamat')");
header("location:pelanggan.php");
