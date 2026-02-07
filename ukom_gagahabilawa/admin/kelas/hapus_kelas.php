<?php
include "../../includes/koneksi.php";

$id = intval($_POST['id_kelas']);

mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id_kelas=$id");

header("location:index.php");
exit;
?>
