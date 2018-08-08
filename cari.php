<?php
include "config.php";
	$no_srt= $_POST['no_srt'];
	$q = "SELECT * from srt_in where no_srt like '%$no_srt%' ";
	$result = mysql_query($q); //execute the query $q
echo "<left>";
echo "<h2> Hasil pencarian Surat </h2>";
echo "<table border='0' cellpadding='5' cellspacing='8'>";
echo "

	<tr>
	<td>No Surat</td>
	<td>Perihal</td>
	<td>Tanggal Surat</td>
	</tr>";
while ($data = mysql_fetch_array($result)) 


{ 
echo "
	<tr>
	<td>".$data['no_srt']."</td>
	<td>".$data['hal_srt']."</td>
	<td>".$data['tgl_srt']."</td>
	<td><a href='edit.php?id=<?php echo $data['id_srt']; ?>'>Edit</a></td>
	</tr>";
}

echo "</table>";
?>
