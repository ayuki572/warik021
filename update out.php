<?php
include('config.php');

//tangkap data dari form

$No_Urut = $_POST['No_Urut'];
$No_Berkas = $_POST['No_Berkas'];
$Alamat_Tujuan = $_POST['Alamat_Tujuan'];
$Tanggal = $_POST['Tanggal'];
$Perihal = $_POST['Perihal'];
$No_Petunjuk = $_POST['No_Petunjuk'];
$Nomor = $_POST['Nomor'];

//update data ke database
$query = mysql_query("UPDATE  srt_out SET No_Urut='$No_Urut', No_Berkas='$No_Berkas', Alamat_Tujuan='$Alamat_Tujuan', Tanggal='$Tanggal', Perihal='$Perihal', No_Petunjuk='$No_Petunjuk', Nomor='$Nomor'")
										or die(mysql_error());

if ($query) {
	header('location:halaman awal.php?m=content&p=tampilankluar');
}
?>