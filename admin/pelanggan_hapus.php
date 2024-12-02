<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_pelanggan where pelanggan_id='$id'");
header("location:pelanggan.php");
