<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang di Klinik Gundarmedika </title>

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

    <div id="wrapper">

            <?php include "navbar.php";?>
            <?php include "sidemenu.php";?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <?php
                      
                   ?>
                  <?php
                      switch (@$_GET['menu']) {
                        //pasien
                        case 'pasien':
                          include 'prev_pasien.php';
                          break;
                        case 'inputPasien':
                          include 'input_pasien.php';
                          break;
                        case 'editPasien':
                          include 'update_pasien.php';
                          break;
                        //dokter
                        case 'dokter':
                          include 'prev_dokter.php';
                          break;
                        case 'inputDokter':
                          include 'input_dokter.php';
                          break;
                        case 'editDokter':
                          include 'update_dokter.php';
                          break;
                        //pendaftaran periksa
                        case 'antrian':
                          include 'prev_antrian.php';
                          break;
                        case 'inputPendaftaran':
                          include 'input_pendaftaran.php';
                          break;
                        case 'editPendaftaran':
                          include 'update_pendaftaran.php';
                          break;
                        //rekam medis
                        case 'rekam_medis':
                          include 'prev_rekam_medis.php';
                          break;
                        case 'inputRekamMedis':
                          include 'input_rekam_medis.php';
                          break;
                        case 'editRekamMedis':
                          include 'update_rekam_medis.php';
                          break;

                        default:
                  ?>
                        <div class="col-lg-12">
                            <h1 class="page-header">Home</h1>
                            <div class="col-md-12 ">
                        <img src="../img/klinik5.png" height="200px" width="400px" align="center" id="welcome" class="img-responsive" >
                        <h2 align="center">Selamat Datang di Klinik Gundarmedika </h2>
                        </div>
                        </div>
                  <?php
                          break;
                      }
                  ?>


                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php
//}
//else{
//  header("Location: login.php");
//}
?>
