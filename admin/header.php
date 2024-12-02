<!DOCTYPE html>
<html>

<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body style="background: #FFDDAE">

    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
    ?>
    <nav class="navbar navbar-inverse" style="border-radius: 3px ;background-color:#FFFFFF">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="background-color:#FFFFFF ; color:black">LAUNDRY</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="pelanggan.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-user "></i> Pelanggan</a></li>
                    <li><a href="transaksi.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
                    <li><a href="laporan.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>
                    <li><a href="feedback.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-envelope"></i> Feedback</a></li>

                    <li class="dropdown"> <a href="#" style="background-color:#FFFFFF ; color:black" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="harga.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>
                            <li><a href="ganti_password.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php" style="background-color:#FFFFFF ; color:black"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text" style="background-color:#FFFFFF ; color:black">Halo, <b> <?php echo $_SESSION['username']; ?></b> !</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>