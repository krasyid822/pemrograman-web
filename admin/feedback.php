<?php include "header.php"; 
include '../koneksi.php';?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Feedback Pelanggan</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Subjek</th>
                    <th>Pesan</th>
                </tr>

                <?php
                $data = mysqli_query($koneksi, "select * from tb_feedback");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['no_hp']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        <td><?php echo $d['subjek']; ?></td>
                        <td><?php echo $d['pesan']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        </div>
    </div>
