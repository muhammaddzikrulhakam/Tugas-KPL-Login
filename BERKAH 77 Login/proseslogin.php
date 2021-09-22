<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM users WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
      echo "<script>alert('Username belum terdaftar, silahkan daftar dahulu');</script>";
       echo "<script>location='daftar.php';</script>"; 
   } else {
     if($pass <> $hasil['password']) {
        echo "<script>alert('Password salah, coba lagi');</script>";
       echo "<script>location='login.php';</script>"; 
     } else {
       $_SESSION['username'] = $hasil['username'];
       echo "<script>alert('Login Berhasil');</script>";
       echo "<script>location='index.php';</script>"; 
     }
   }
?>