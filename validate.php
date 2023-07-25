<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H2O store</title>
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        .ref {
            color: red;
            text-decoration: none;
        }

        .ref:hover {
            border-bottom: 1px solid;
        }
    </style>
</head>
<body>

    <?php

        date_default_timezone_set('Asia/Bangkok');
        $myDate = date('Y-m-d H:i:s');
        $email = $_POST['emailaddress'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $alamat2 = $_POST['alamat2'];
        $kota = $_POST['kota'];
        $kecamatan = $_POST['kecamatan'];
        $kelurahan = $_POST['kelurahan'];
        $kode_pos = $_POST['kodePos'];
        $seluler = $_POST['seluler'];
        $LogFile = fopen("pelanggan.txt", "a");
        fputs($LogFile, "Date : $myDate\n");
        fputs($LogFile, "Email : $email\n");
        fputs($LogFile, "Nama : $nama\n");
        fputs($LogFile, "Alamat  : $alamat\n");
        fputs($LogFile, "Alamat Kedua : $alamat2\n");
        fputs($LogFile, "Kota : $kota\n");
        fputs($LogFile, "Kecamatan : $kecamatan\n");
        fputs($LogFile, "Kelurahan : $kelurahan\n");
        fputs($LogFile, "Kode pos : $kode_pos\n");
        fputs($LogFile, "Nomor Telepon : $seluler\n \n-----------------------------------------------------------\n");
        
        fclose($LogFile);

       
        echo "<h1 style='font-size:20px;font-weight:normal;margin-top: 150px;text-align:center;'>Terima kasih pesanan anda segera diproses</h1>";
        echo "<p style='font-size:20px;font-weight:normal;text-align:center;'>Ingin belanja lagi?&nbsp;<a href=\"index.php\" class=\"ref\">Silakan kembali</a></p>";

    ?>

</body>
</html>
