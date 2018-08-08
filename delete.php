<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from srt_in where id_srt='$id'") or die(mysql_error());

if ($query) {
	header('location:halaman awal.php?m=content&p=tampilsrt');
}
?>