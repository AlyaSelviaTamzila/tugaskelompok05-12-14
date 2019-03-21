<html>
    <head>
        <title>PHP Form</title>
    </head>
    <body>
        <?php
          $submit = $_POST['btnsubmit'];
          if (isset($submit)){
              $warna = $_POST['warna'];
              $jeniskelamin = $_POST['jeniskelamin'];
              echo "<p>Data yang ditangkap oleh server:</p>";
              echo "Warna: <strong>$warna</strong><br />";
              echo "Jenis Kelamin: "."<strong>$jeniskelamin</strong>";
          }
        ?>
    </body>
</html>