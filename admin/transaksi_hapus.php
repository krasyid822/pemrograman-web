<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from tb_transaksi where transaksi_id='$id'");
mysqli_query($koneksi, "delete from tb_pakaian where pakaian_transaksi='$id'");
header("location:transaksi.php");
