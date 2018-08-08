<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from srt_out where id_user='$id'") or die(mysql_error());

if ($query) {
	header('location:halaman awal.php?m=content&p=tampilankluar');
}
?>