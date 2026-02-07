<?php

session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] !="admin") {
    header("location:../index.php");

  
}
   
include "../../includes/koneksi.php";
include "../../includes/baseurl.php";
include "../../includes/navbar_admin.php";
?>
<main class="flex-fill">
<div class="container py-3">
    <h5>Panel Utama</h5>
</div>
</main>
<?php

    include "../../includes/footer.php";

?>