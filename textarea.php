<html>
    <head>
        <title>PHP Form</title>
        </head>
        <body>
            <?php
            $submit = $_POST['btnSubmit'];
            if (isset($submit)){
                $isbn = $_POST['txtisbn'];
                $judul = $_POST['txtjudul'];
                $pengarang = $_POST['txtpengarang'];
                $sinopsis = $_POST['txtareasinopsis'];
                echo "Nilai variabel yang ditangkap oleh server : ";
                echo "<br /><br />";
                echo "<strong>ISBN :</strong><br /> ";
                echo $isbn . "<br /><br />";
                echo "<strong>Judul Buku :</strong><br /> ";
                echo $judul . "<br /><br />";
                echo "<strong>Pengarang :</strong><br /> ";
                echo $pengarang . "<br /><br />";
                echo "<strong>Sinopsis :</strong><br /> ";
                echo $sinopsis . "<br /><br />";
                
            }
            ?>
            </body>
            </html>
