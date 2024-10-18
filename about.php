<?php

$test = mysqli_connect("localhost", "root", "");
    mysqli_select_db($test,"rekam_medis");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Klinik Gundarmedika</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">

.style2 {
	color: #FFFFFF;
	font-size: 18px;
}
.style3 {color: #FFFFFF}

  </style>
</head>
<body>
<!--header-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Klinik Gundarmedika</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <!--<li><a href="?indek=profil">Profil</a></li> -->
      <li><a href="?indek=vdm">Jadwal Dokter</a></li>
	  <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

	  <!--login-->
      <li><a href="?indek=login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<!--/header-->

<div class="container">

<body>
<div class="container">
  <center><h1 align="center">Tentang Klinik</h1><hr align="center" color="#000000"></center>
  <p align="center"><h3 align="center">Klinik Gundarmedika menghadirkan klinik dengan komitmen untuk menyajikan pengalaman pengobatan yang tak tertandingi. Di Klinik Gundarmedika, bukan hanya tentang menyembuhkan penyakit, tetapi juga memberikan perhatian khusus untuk memastikan setiap pasien meraih kesejahteraan total. Dengan sentuhan kehangatan dan pelayanan yang berfokus pada individu, kami menciptakan suasana yang mendukung proses penyembuhan.Percayakan keluarga Anda pada tim berpengalaman kami yang berkomitmen untuk memberikan perawatan terbaik. Kami menghadirkan solusi kesehatan yang personal dan terjangkau, menciptakan jalan menuju kesejahteraan yang berkelanjutan.

Bersama-sama, kita bangun kesehatan yang kokoh dan terjaga. Selamat datang di Klinik Gundarmedika, di mana kesejahteraan Anda adalah prioritas utama!</h3>
  </p>
  <p align="center"><hr align="center" color="#000000">
  </p>
<!-- <p align="center"><h4 align="center">Misi</h4>
</p>
<p align="center">1. Meningkatkan layanan kesehatan yang profesional.  </p>
<p align="center">2. Kami senantiasa memegang erat aturan dan prosedur.  </p> -->
</div>
<p></p>
</body>
</html>
