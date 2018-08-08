<?php
include('config.php');

//tangkap data dari form

$id_srt = $_POST['id_srt'];
$no_srt = $_POST['no_srt'];
$asal_srt = $_POST['asal_srt'];
$hal_srt = $_POST['hal_srt'];
$tgl_srt = $_POST['tgl_srt'];
$kategori_srt = $_POST['kategori_srt'];
$isi_srt = $_POST['isi_srt'];
$ket_srt = $_POST['ket_srt'];
$disposisi = $_POST['disposisi'];
$to_dis = $_POST['to_dis'];

//update data ke database
$query = mysql_query("UPDATE  srt_in SET no_srt='$no_srt', asal_srt='$asal_srt', hal_srt='$hal_srt', 
										tgl_srt='tgl_srt', kategori_srt='$kategori_srt', isi_srt='$isi_srt', 
										ket_srt='$ket_srt',disposisi='$disposisi', to_dis='$to_dis' where id_srt='$id_srt'")
										or die(mysql_error());

if ($query) {
	header('location:halaman awal.php?m=content&p=tampilsrt');
}
?>