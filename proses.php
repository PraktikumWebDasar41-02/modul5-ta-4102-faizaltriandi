<?php  
include 'koneksi.php';
 session_start();
  $nim            =   $_SESSION['nim'];
  $nama           =   $_SESSION['nama'];
  $email          =   $_SESSION['email'];
  $komen          =   $_SESSION['komen'];
  $tanggal        =   $_SESSION['tanggal'];
  $jeniskelamin   =   $_SESSION['jeniskelamin'];
  $programstudi   =   $_SESSION['programstudi'];
  $fakultas       =   $_SESSION['fakultas'];

  $sql = " INSERT INTO users(nim,nama,email,Komen,tanggal,jeniskelamin,programstudi,fakultas) VALUES ('$nim','$nama','$email','$komen','$tanggal','$jeniskelamin','$programstudi','$fakultas')";
   
  if(mysqli_query($con,$sql)){
   echo "Database sudah masuk<br><br><br>";
  }else{
   echo "Database Gagal <br>".$sql.mysqli_error($con);
  }

echo "DATA MAHASISWA <br>";
echo "$nim <br>";
echo "$nama<br>";
echo "Email: $email<br>";
echo "Komentar: $komen<br>";
echo "Tanggal: $tanggal<br>";
echo "Jenis Kelamin: $jeniskelamin<br>";
echo "Program Studi: $programstudi<br>";
echo "Fakultas: $fakultas<br>";


?>