<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/baseurl.php";
    ?>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <title>kegagalan sistem </title>

</head>

<body class="bg-primary">
    <?php
    if (!isset($_GET['pesan'])) {
        $judul = "kesalahan sistem";
        $isi  = "perubahan tidak disimpan";
        $link  = "base_url";
        $ikon  = "";
        $tombol = "landing page";
        $wtom = "btn-danger";
    } else if ($_GET['pesan'] == "gagallogin")
    {
        $judul = "kata sandi salah";
        $isi  = "kombinasi email dan sandi tidak di temukan pastikan isi dengan benar";
        $link  = base_url."login/";
        $ikon  = "bi-lock-fill";
        $tombol = "kembali ke halaman masuk";
        $wtom = "btn-danger";
    } 
     else if ($_GET['pesan'] == "gagalinputkelas")
    {
        $judul = "kata sandi salah";
        $isi  = "kombinasi email dan sandi tidak di temukan pastikan isi dengan benar";
        $link  = base_url."login/";
        $ikon  = "";
        $tombol = "kembali ke halaman masuk";
        $wtom = "btn-danger";
    } 
  
    ?>
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="shadow rounded p-5 text-center bg-light">
            <h2><i class="bi <?= $ikon ?>"></i><?= $judul ?></h2>
            <p><?= $isi ?></p>
            <a href="<?= $link ?>" class="btn btn-warning mt-3 <?= $wtom ?>">kembali</a>
            
        </div>
    </div>
</body>

</html>