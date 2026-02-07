<?php
    session_start();
    include "../includes/koneksi.php";
    $email  =$_POST['email'];
    $password  =$_POST['password'];

    $hash_password = md5($password);

    $sql = "SELECT * FROM tb_user WHERE
    email='$email' AND password='$hash_password'";
    $sql_eksekusi = mysqli_query($koneksi, $sql);
    $hitung = mysqli_num_rows($sql_eksekusi);
    if($hitung > 0)
    {
       $data=mysqli_fetch_array($sql_eksekusi);
       $_SESSION['id_user']= $data['id_user'];
       $_SESSION['nis']= $data['nis'];
       $_SESSION['nama']= $data['nama'];
       $_SESSION['role']= $data['role'];
       $_SESSION['menu']= "beranda";
       header("location:../admin"); 
    } 
    else {
        header("location:../gagal.php?pesan=gagallogin"); 
    }

?>