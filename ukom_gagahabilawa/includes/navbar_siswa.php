<?php
include "baseurl.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url ?>bootstrap/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar bg-primary navbar-expand-lg bg-body-primary" data-bs-theme="dark">
    <div class="container-fluid container">
      <a class="navbar-brand" href="<?= base_url ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url . "dashboard" ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?= base_url . "dashboard/kelas" ?>">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?= base_url . "dashboard/kategori" ?>">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?= base_url . "dashboard/siswa" ?>">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?= base_url . "dashboard/feedback" ?>">Feedback</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ASPIRASI
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url . "dashboard/aspirasi?status=menunggu" ?>">Menunggu</a></li>
              <li><a class="dropdown-item" href="<?= base_url . "dashboard/aspirasi?status=proses" ?>">Proses</a></li>
              <li><a class="dropdown-item" href="<?= base_url . "dashboard/aspirasi?status=selesai" ?>">Selesai</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="<?= base_url . "handle_logout.php" ?>" class="btn btn-danger">Logout</a>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>