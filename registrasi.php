<form method="post">
<center><h1>Pendaftaran Mahasiswa</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" placeholder="NIM" maxlength="10"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama" maxlength="20"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="E-mail" name="email" placeholder="eaxample@gmail.com"></td>
		</tr>
   <tr> 
    <td>KOMENTAR : <br><textarea name="komen" placeholder="Isikan Komentar"></textarea><br></td>
    </tr>
     <tr> 
    <td>Tanggal Lahir : <br><input type="date" name="tanggal"><br></td>
    </tr>
		<tr>
			<td>JenisKelamin</td>
			<td><input type="radio" name="jeniskelamin" value="laki- laki">laki-laki<br>
				<input type="radio" name="jeniskelamin" value="perempuan">perempuan<br>
		</tr>
		<tr>	
			<td>ProgramStudi</td>
			<td><select name="programstudi" id="programstudi">
					<option value="D3 Teknologi Telekomunikasi">D3 Teknologi Telekomunikasi</option>
  					<option value="D3 Rekayasa Perangkat Lunak Aplikasi">D3 Rekayasa Perangkat Lunak Aplikasi</option>
  					<option value="D3 Sistem Informasi Akuntansi">D3 Sistem Informasi Akuntansi</option>
  					<option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
  					<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
  					<option value="D3 Perhotelan">D3 Perhotelan</option>
  					<option value="S1 Terapan Teknologi Rekayasa Multimedia">S1 Terapan Teknologi Rekayasa Multimedia</option>			
  			</select>
  		</tr>
  		<tr>
  			<td>Fakultas</td>
			<td><select name="fakultas" id="fakultas">
					<option value="FKB">FKB</option>
  					<option value="FIT">FIT</option>
  					<option value="FIK">FIK</option>
  					<option value="FEB">FEB</option>
  					<option value="FTE">FTE</option>	
  			</select>
  		</tr>
  		
			<td><input type="submit" name="submit" value="Login"></td>
	</table>
</center>

<?php
if (isset($_POST['submit'])) {
    session_start();
    $nim				  = $_POST['nim'];
    $nama				  = $_POST['nama'];
    $email			  = $_POST['email'];
    $komen        = $_POST['komen'];
    $tanggal      = $_POST['tanggal'];
    $jeniskelamin	= $_POST['jeniskelamin'];
    $programstudi	= $_POST['programstudi'];
    $fakultas			= $_POST['fakultas'];
    
    $_SESSION['nim']          = $nim;
    $_SESSION['nama']         = $nama;
    $_SESSION['email']        = $email;
    $_SESSION['komen']        = $komen;
    $_SESSION['tanggal']      = $tanggal;
    $_SESSION['jeniskelamin'] = $jeniskelamin;
    $_SESSION['programstudi'] = $programstudi;
    $_SESSION['fakultas']     = $fakultas;


    $error = array();
    if (strlen($nim)<=10) {
      $error['nim']=="nim harus 10";
    }if(strlen($nama)<=20){
      $error['nama']=="nama harus 20";
    }if (is_null($email)) {
      $error['email']=="email tidak boleh kosong";
    }if (is_null($jeniskelamin)) {
      $error['jeniskelamin']=="jeniskelamin tidak boleh kosong";
    }if (is_null($tanggal)) {
      $error['tanggal']=="tanggal tidak boleh kosong";
    }if (strlen($komen)<=5) {
      $error['komen']=="komen harus 5";
    }if (is_null($programstudi)) {
      $error['programstudi']=="programstudi tidak boleh kosong";
    }if (is_null($fakultas)) {
      $error['fakultas']=="fakultas tidak boleh kosong";
    }else{
      header("location:proses.php"); 
    }
   
}
?>
