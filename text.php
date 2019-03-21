<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Form</title>
  </head>
  <body>
    <?php
      $submit = $_POST['btnSubmit'];
      if(isset($submit)){
        $nama = $_POST['txtnama'];
        $alamat = $_POST['txtalamat'];
        $kota = $_POST['txtkota'];
        $telp = $_POST['txttelp'];
        echo "Nilai Variabel yang ditangkap oleh server : ";

        echo "<br />";
        echo "Nama : <b>$nama</b> <br />";
        echo "Alamat : <b>$alamat</b> <br />";
        echo "Kota : <b>$kota</b> <br />";
        echo "Telepon : <b>$telp</b> <br />";
      }
     ?>
  </body>
</html>
