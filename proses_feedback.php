<?php

$nama = $_POST['nama'];
$noHp = $_POST['telepon'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

include "koneksi_home.php";
mysqli_query($conn, "insert into tb_feedback(nama, no_hp, email, subjek, pesan)
values(
       '$nama',
       '$noHp',
       '$email',
       '$subjek',
       '$pesan')");


echo '<script> alert("Pesan Berhasil Dikirim") </script>';
?>