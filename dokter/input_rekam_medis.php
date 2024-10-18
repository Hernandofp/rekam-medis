<?php
    include '../config/koneksi.php';
    $sql5 = mysqli_query($test, "SELECT * FROM tb_pendaftaran WHERE no_pendaftaran='$_GET[id]'");
    $bc5  = mysqli_fetch_array($sql5);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Halaman Input Rekam Medis</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
                    <form role="form" enctype="multipart/form-data" method="POST" action="rekamMedis.php">
             <div class="form-group">
                                <label>Pasien</label>


                      <?php
                              include '../config/koneksi.php';
                              $sql1 = mysqli_query($test, "SELECT * FROM tb_pasien WHERE id_pasien='$bc5[id_pasien]'");
                              $bc1=mysqli_fetch_array($sql1);

                                echo "<br>$bc1[id_pasien] - $bc1[nama_pasien]";

                        ?>
                <input type="hidden"  name="id_pasien" value="<?php echo($bc1['id_pasien']) ?>">
              </div>
              <div class="form-group">
                                 <label>Dokter</label>


                       <?php
                               include '../config/koneksi.php';
                               $sql2 = mysqli_query($test, "SELECT * FROM tb_dokter WHERE id_dokter='$bc5[id_dokter]'");
                               $bc2=mysqli_fetch_array($sql2);

                                 echo "<br>$bc2[id_dokter] - $bc2[nama_dokter]";

                         ?>
                <input type="hidden"  name="id_dokter" value="<?php echo($bc2['id_dokter']) ?>">
               </div>
               <div class="form-group">
                              <label>Umur</label>
                        <input class="form-control" placeholder="Enter text" name="umur" required>
               </div>
               <div class="form-group">
                              <label>Diagnosa</label>
                      <textarea class="form-control" placeholder="Enter text" name="diagnosa" required>
                      </textarea>
              </div>
              <div class="form-group">
                             <label>Terapi</label>
                     <textarea class="form-control" placeholder="Enter text" name="terapi" required>
                     </textarea>
             </div>




                         <button type="submit" class="btn btn-outline btn-info" name ="kirim" >Simpan <i class="fa fa-save fa-fw"></i></button>


              </div>

                <!-- /.col-lg-6 (nested) -->
                <div class="col-lg-6">


                    </form>

                </div>
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
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
