<?php

include '../config/koneksi.php';

@$pasien                  = $_POST['id_pasien'];
@$dokter                  = $_POST['id_dokter'];
@$diagnosa                = $_POST['diagnosa'];
@$terapi                  = $_POST['terapi'];
@$umur                    = $_POST['umur'];
@$tgl_periksa             = date("H:i:s d-m-Y");

// var_dump($_tera);
if(isset($_POST['kirim'])){
            $sql3 = mysqli_query($test, "SELECT max(id_dokter) as id_dokter FROM tb_dokter");
            $bc3  = mysqli_fetch_array($sql3);
            @$id_dokter = $bc3['id_dokter'] + 1;
            echo "$id_dokter";

      $sql6 = "INSERT INTO tb_rekam_medis VALUES ('', '$pasien', '$dokter',  '$tgl_periksa', '$umur','$terapi','$diagnosa')";
      mysqli_query($test, $sql6);

      $sql7 = "UPDATE tb_pendaftaran SET tgl_periksa='$tgl_periksa', stts='2' WHERE no_pendaftaran='$_GET[id]'";
      mysqli_query($test, $sql7);


      echo '<script language="javascript">
      alert ("Data Berhasil Disimpan");
      </script>';


?>
<script type="text/javascript">
window.location ="?menu=rekam_medis" ;
</script>
<?php
header('location:?menu=rekam_medis');
}
?>