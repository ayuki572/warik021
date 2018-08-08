<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$No_Urut = $_POST['No_Urut'];
$No_Berkas = $_POST['No_Berkas'];
$Alamat_Tujuan = $_POST['Alamat_Tujuan'];
$Tanggal = $_POST['Tanggal'];
$Perihal = $_POST['Perihal'];
$Nomor_Petunjuk = $_POST['Nomor_Petunjuk'];
$Nomor = $_POST['Nomor'];
//simpan data ke database
$query = mysql_query("Insert INTO srt_out (No_Urut, No_Berkas, Alamat_Tujuan, Tanggal, Perihal, Nomor_Petunjuk, Nomor)
											VALUES('$No_Urut', '$No_Berkas', '$Alamat_Tujuan', '$Tanggal', '$Perihal', '$Nomor_Petunjuk', '$Nomor')") 
												or die(mysql_error());

if ($query) {
	header('location:halaman awal.php?message=success');
}
?>