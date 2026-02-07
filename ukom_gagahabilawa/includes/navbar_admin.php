
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url ?>bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url ?>bootstrap-icons/bootstrap-icons.css">

</head>

<body class="d-flex flex-column min-vh-100">
    <!-- awal navbar -->
    <nav class="navbar bg-primary navbar-expand-lg bg-body-primary  shadow" data-bs-theme="dark">
        <div class="container">
                <a href="<?=  base_url."admin"?>" class="navbar-brand fw-bold">Aduin</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a href="<?= base_url."admin/kelas";?>" class="nav-link <?php if($_SESSION['menu']=="kelas") {echo "active bg-warning text-dark";}?>">Kelas</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Siswa</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Kategori</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Aspirasi</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Umpan Balik</a></li>
                        
                    </ul>
                    
                  <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="<?= base_url ?>login/logout.php" class="btn btn-danger">Keluar</a></li>
                  </ul>
                </div>
        </div>
    </nav>
    <!-- akhir navbar -->
</body>
</html>