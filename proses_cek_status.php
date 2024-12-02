<?php

include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['invoice'];

    $sql = "SELECT transaksi_id FROM tb_transaksi WHERE transaksi_id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "success";
    } else {
        echo "fail";
    }

    $stmt->close();
}

$koneksi->close();

?>