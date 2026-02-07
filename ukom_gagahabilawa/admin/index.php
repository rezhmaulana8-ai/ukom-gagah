<?php

session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location:../index.php");
}
$_SESSION['menu']  ="beranda";
include "../includes/koneksi.php";
include "../includes/baseurl.php";
include "../includes/navbar_admin.php";
?>
<main class="flex-fill">
    <div class="container py-3">
        <h5>Panel utama</h5><hr>
        <div class="row g-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100" >
                    <div class="card-body">
                        <h5 class="card-title">Total Kelas</h5>
                        <h2>1000 siswa</h2>
                        <a href="#" class="btn btn-primary mt-2 form-control">Lihat Kelas  <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100" >
                    <div class="card-body">
                        <h5 class="card-title">Total Aspirasi</h5>
                         <h2>2400 siswa</h2>
                        <a href="#" class="btn btn-primary mt-2 form-control">lihat aspirasi  <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100" >
                    <div class="card-body">
                        <h5 class="card-title">Total kategori</h5>
                        <h2>1000 siswa</h2>
                        <a href="#" class="btn btn-primary mt-2 form-control">lihat kategori  <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100" >
                    <div class="card-body">
                        <h5 class="card-title">Total siswa</h5>
                       <h2>100 siswa</h2>
                        <a href="#" class="btn btn-primary mt-2 form-control">lihat siswa <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php

include "../includes/footer.php";

?>