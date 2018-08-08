<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$no_srt = $_POST['no_srt'];
$asal_srt = $_POST['asal_srt'];
$hal_srt = $_POST['hal_srt'];
$tgl_srt = $_POST['tgl_srt'];
$kategori_srt = $_POST['kategori_srt'];
$isi_srt = $_POST['isi_srt'];
$ket_srt = $_POST['ket_srt'];
$disposisi = $_POST['disposisi'];
$to_dis = $_POST['to_dis'];
//simpan data ke database
$query = mysql_query("INSERT INTO srt_in (no_srt, asal_srt, hal_srt, tgl_srt, kategori_srt, isi_srt, ket_srt,
											disposisi, to_dis)
											VALUES('$no_srt', '$asal_srt', '$hal_srt', '$tgl_srt', 
												'$kategori_srt', '$isi_srt', '$ket_srt', '$disposisi', '$to_dis')") 
												or die(mysql_error());

if ($query) {
	header('location:halaman awal.php?message=success');
}
?>