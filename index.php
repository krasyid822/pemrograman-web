<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshen Laundry Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="rsc\css\style.css">

</head>
<body>
    <!-- test
-->
    <div class="rectangle-1" id="home">
        <img src="rsc\png\logo.png" class="logo" alt="Logo" style="position:absolute; left: 10px; top: 10px;">
        <div style="position:absolute; left:20%; top: 25px;">
            <a href="#home"><span class="home-rec-1">Home</span></a>
            <a href="#service"><span class="service-rec-1">Service</span></a>
            <a href="#about"><span class="about-rec-1">About</span></a>
        </div>
        <div style="color:white; position: absolute; right: 10px; top:20px;">
            <button onclick="window.location.href='#contact'" style="border: 2px solid #FFA845E5; background: white;">Contact us</button>_<bc class="line-1-in-1"></bc>_<button onclick="window.location.href='login.php'" style="border: 2px solid #FFA845E5; background: white;">Login</button>
        </div>
    </div>

    <div class="rectangle-2">
        <div style="padding: 40px;">
            <h1 class="txt-rasakan-in-rect-2">Rasakan Kebersihan 
            Terbaik</h1>
            <p class="txt-tidak-perlu-in-rect-2">Tidak perlu khawatir lagi soal cucian! Biarkan kru profesional kami di Freshen Laundry Service mengerjakan tugas Anda.</p>
            <br>
            <button onclick="window.location.href='#contact'" class="rec-5-in-2">Contact us</button>
        </div>
        <div>
            <iframe width="240" height="135" src="https://www.youtube.com/embed/dTtv5Cx6oXI" title="Desain Interior Laundry Kekinian Tahun ini" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position: absolute; right: 50px; top: 130px; border: 3px solid white;"></iframe>
        </div>
    </div>

    <div class="rectangle-3" id="service">
        <h2 style="text-align: center; font-family: inria sans; padding-top: 10px;">Our Service</h2>
        <div style="display: flex;">
            <div style="margin-left: 1%;">
                <img src="rsc\jpg\our-service-1.jpg" style="height: 135px; width: 237px; border: 20px solid white; margin-left: 19%;" alt="Service 1">
                <p style="width: 450px; text-align: center;">
                    <b>Layanan Dry Cleaning Ramah Lingkungan</b><br><br>
                    Bersihkan pakaian halus Anda dengan aman menggunakan layanan dry cleaning ramah lingkungan kami, agar tetap segar dan bebas dari bahan kimia berbahaya....
                </p>
            </div>
            <div style="position: absolute; left: 35%;">
                <img src="rsc\jpg\our-service-2.jpg" style="height: 135px; width: 237px; border: 20px solid white; margin-left: 19%;" alt="Service 1">
                <p style="width: 450px; text-align: center;">
                    <b>Layanan Cuci & Lipat</b><br><br>
                    Hemat waktu dengan membiarkan kami menangani kebutuhan binatu Anda dengan layanan cuci & lipat yang efisien, memastikan pakaian Anda bersih....
                </p>
            </div>
            <div style="margin-right: 1%; position: absolute; right: 0; left: auto;">
                <img src="rsc\jpg\our-service-3.jpg" style="height: 135px; width: 237px; border: 20px solid white; margin-left: 19%;" alt="Service 1">
                <p style="width: 450px; text-align: center;">
                    <b>Layanan Cuci & Lipat</b><br><br>
                    Hemat waktu dengan membiarkan kami menangani kebutuhan binatu Anda dengan layanan cuci & lipat yang efisien, memastikan pakaian Anda bersih....
                </p>
            </div>
        </div>
    </div>

    <div style="display: flex;" id="about">
        <img src="rsc\jpg\about-us.jpg" height="369" width="457" style="padding-left: 8%; padding-top: 10%; padding-right: 4%; padding-bottom: 10%;">
        <div style="display: block;">
            <p>
                <b><h2><div style="color: #fbd7a7; margin-top: 19%;">About Us</div><br>Membuat pencucian menjadi mudah, satu pakaian bersih dalam satu waktu.</h2></b>
                Selamat datang di Freshen, Kami berdedikasi  untuk menyediakan solusi  pencucian berkualitas tinggi, nyaman, dan terjangkau bagi pelanggan  kami yang berharga.
            </p>
        </div>
    </div>

    <div style="margin-left: 10px; display: flex;" id="contact">
        <div>
            <h2 style="color: #fbd7a7;">Hubungi Kami</h2>
            <p><b>Punya pertanyaan atau butuh bantuan?<br>Hubungi kami hari ini!</b></p>
            <form action="proses.php" method="post">
                <input type="text" name="nama" placeholder="Nama" style="width: 200px; height: 30px; margin-top: 10px;"><br>
                <input type="tel" name="telepon" placeholder="Nomor handphone" style="width: 200px; height: 30px; margin-top: 10px;"><br>
                <input type="email" name="email" placeholder="Email" style="width: 200px; height: 30px; margin-top: 10px;"><br>
                <input type="text" name="subjek" placeholder="Subjek" style="width: 200px; height: 30px; margin-top: 10px;"><br>
                <textarea name="pesan" placeholder="Pesan" style="width: 200px; height: 100px; margin-top: 10px;"></textarea><br>
                <button type="submit" name="submit" style="width: 200px; height: 30px; margin-top: 10px; background: #fbd7a7; color: #FFA845E5;">Kirim</button>
            </form>
        </div>
        <img src="rsc\jpg\hubungi-kami.jpg" width="457" height="369" style="border: 10px solid white; right: 0; position: absolute; padding-top: 6%;">
    </div>

    <footer style="height: 6px; border-radius: 5px; padding-top: 5%; background-color: #fbd7a7; margin-top: 1%;">
        <div style="top: 1930px; position: absolute; left: 20px;">(c) 2024 Freshen Laundry Service. All Rights Reserved.</div>
        <div style="right: 30px; position: absolute; top: 1930px; color: black; font-family: inria sans;">
            <a href="#home"><img src="rsc\png\logo.png" height="34" style="padding-right: 5px;"></a>
            <a href="#about" style="padding-right: 5px;">About</a>
            <a href="#service" style="padding-right: 5px;">Services</a>
            <a href="#contact">Contact us</a>
        </div>
    </footer>
</body>
</html>