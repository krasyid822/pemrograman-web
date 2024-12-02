<!DOCTYPE html>
<html>

<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <style>
        .navbar {
            background-color: #FFFFFF;
            border: 3px solid black;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            padding: 0;
        }

        .navbar-nav {
            display: flex;
            flex-direction: row;
            padding-left: 0;
            margin: 0;
        }

        .navbar-nav>li {
            margin: 0 15px;
        }

        .navbar-nav>li>a {
            color: black;
            background-color: #FFFFFF;
        }

        .navbar-nav>.active>a {
            background-color: #f8f8f8;
            color: #000000;
        }
    </style>
</head>

<body style="background:#FFDDAE">
    <nav class="navbar navbar-inverse" style=" background-color:#FFFFFF">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <center>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home.php" style="background-color:#FFFFFF; color:black"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="service.php" style="background-color:#FFFFFF; color:black"><i class="glyphicon glyphicon-user"></i> Service</a></li>
                        <li><a href="about.php" style="background-color:#FFFFFF; color:black"><i class="glyphicon glyphicon-random"></i> About</a></li>
                    </ul>
                </div>
            </center>
        </div>
    </nav>

    <br />
    <br />
    <center>
        <h2>SISTEM INFORMASI FAMILY LAUNDRY</h2>
    </center>
    <br />
    <br />

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <?php
            session_start();
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
                } else if ($_GET['pesan'] == "logout") {
                    echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
                }
            }
            ?>

            <form action="login.php" method="post">
                <div class="panel">
                    <br />
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <input type="submit" class="btn btn-primary" value="Log In">
                    </div>
                    <br />
                </div>
            </form>

        </div>
    </div>
</body>

</html>