<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<table>
		<tr>
			<td widht="100%">
				<a href=''>
					<h1><img src="../img/klinik.png" width="100px" onclick="javascript:window.print()" height="100px" alt=""></a>  Laporan Pendaftaran</h1></a></td>

		</tr>
	</table>

<table class="table">
 <thead>
  <tr>
    		<th>No.</th>
				<th>Nomer Pasien</th>
    		<th>Pasien</th>
				<th>Dokter</th>
    		<th>Tanggal Periksa</th>
    		<th>Waktu Daftar</th>
				<th>Status Periksa</th>
  </tr>
 </thead>
<?php
  include '../config/koneksi.php';
	 		$no=0;
	 			$sql=mysqli_query($test, "SELECT * FROM tb_pendaftaran WHERE stts ='2' ORDER BY no_pendaftaran desc ");
	 			while($bc=mysqli_fetch_array($sql)){

					$sql2	=	mysqli_query($test, "SELECT * FROM tb_pasien WHERE id_pasien='$bc[id_pasien]'");
					$bc2	=	mysqli_fetch_array($sql2);

											$sql3	=	mysqli_query($test, "SELECT * FROM tb_dokter WHERE id_dokter='$bc[id_dokter]'");
											$bc3	=	mysqli_fetch_array($sql3);


		$no++;
  ?>
  <tbody>
  <tr>
    		<td><?php echo"$no"; ?></td>
				<td><?php echo"$bc[id_pasien]"; ?></td>
    		<td><?php echo"$bc2[nama_pasien]<br>$bc2[nik_pasien]"; ?></td>
    		<td><?php echo"$bc3[nama_dokter]"; ?></td>
				<td><?php echo"$bc[tgl_periksa]"; ?></td>
				<td><?php echo"$bc[waktu_pendaftaran]"; ?></td>
    		<td><?php
				if ($bc['stts']=='1') {
					@$status="Dalam Antrian";
				}elseif ($bc['stts']=='2') {
					@$status="Telah Diperiksa";
				}
				 echo @$status; ?></td>

  </tr>
  </tbody>
  <?php
	}
  ?>
</table>
</body>
</html>
