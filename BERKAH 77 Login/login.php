<?php
   session_start();
   if(isset($_SESSION['nama'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Login</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="new css/w3.css">

</head>
<body style="background: #3dad16">
  <div class="w3-animate-opacity">
  <div class="container">
    <br><br><br>
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title" align="center">Silahkan Login</h3>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" action="proseslogin.php" method="post" >
                      <label for="">username</label>
                <div class="form-group">
                  <input class="form-control" placeholder="username" name="username" type="text" required>
              </div>
              <label for="">Password</label>
              <div class="form-group">
                <input class="form-control" placeholder="Password" id="myInput" name="password" type="password" required><input type="checkbox" onclick="myFunction()">&nbsp;Lihat Password  <br><br>
              </div>
               <button type="submit" class="btn btn-success btn-block btn-flat" name="login"> <i class="fa fa-sign-in"></i> Login</button>
              <small>Belum Punya akun ? <a href="daftar.php">Registrasi disini</a></small><br><br>
              </form>
              </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<!-- Script Show Hide Password -->
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>