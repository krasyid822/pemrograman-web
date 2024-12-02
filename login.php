<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

// Mengubah nama tabel dari 'admin' menjadi 'tb_admin'
$data = mysqli_query($koneksi, "select * from tb_admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
} else {
    header("location:index_login.php?pesan=gagal");
}
