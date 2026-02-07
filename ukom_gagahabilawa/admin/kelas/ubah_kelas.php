<?php
include "../../includes/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_kelas      = mysqli_real_escape_string($koneksi, $_POST['id_kelas']);
    $nama_kelas    = mysqli_real_escape_string($koneksi, $_POST['nama_kelas']);
    $tahun_ajaran  = mysqli_real_escape_string($koneksi, $_POST['tahun_ajaran']);

    $sql = "UPDATE tb_kelas SET 
                nama_kelas='$nama_kelas',
                tahun_ajaran='$tahun_ajaran'
            WHERE id_kelas='$id_kelas'";

    $sql_query = mysqli_query($koneksi, $sql);

    if ($sql_query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal diubah: " . mysqli_error($koneksi);
    }
} else {
    echo "Akses tidak valid!";
}
?>
