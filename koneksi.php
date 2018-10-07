<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "formmahasiswa";
 $con     = mysqli_connect($hostname, $username, $pass, $db);

 if($con==false){
  die("koneksi gagal". $con->connect_error);
 }
 ?>
