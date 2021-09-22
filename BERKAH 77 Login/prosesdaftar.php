<?php
   require_once("koneksi.php");
    $nama = $_POST['nama'];
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM users WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
      echo "<script>alert('Username telah terdaftar');</script>";
         echo "<script>location='daftar.php';</script>";
   } else {
     if(!$username || !$pass) {
        echo "<script>alert('data masih kosong, silahkan lengkapi terlebih dahulu');</script>";
         echo "<script>location='daftar.php';</script>";
     } else {
       $data = "INSERT INTO users VALUES (NULL, '$nama','$username', '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
             echo "<script>alert('Pendaftaran berhasil, Silahkan Login');</script>";
             echo "<script>location='login.php';</script>";      
       } else {
         echo "<script>alert('Anda Gagal Login');</script>";
         echo "<script>location='daftar.php';</script>";
       }
     }
   }
?>