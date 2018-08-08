<?php
include "config.php";
	$No_Berkas= $_POST['No_Berkas'];
	$q = "SELECT * from srt_out where No_Urut like '%$No_Berkas%' ";
	$result = mysql_query($q); //execute the query $q
echo "<left>";
echo "<h2> Hasil pencarian Surat </h2>";
echo "<table border='0' cellpadding='5' cellspacing='8'>";
echo "

	<tr>
	<td>No Berkas</td>
	<td>Perihal</td>
	<td>Tanggal Surat</td>
	</tr>";
while ($data = mysql_fetch_array($result)) 


{ 
echo "
	<tr>
	<td>".$data['No_Berkas']."</td>
	<td>".$data['Kategori']."</td>
	<td>".$data['Tanggal']."</td>
	<td><a href='edit out.php?id=<?php echo $data['id_user']; ?>'>Edit</a></td>
	</tr>";
}

echo "</table>";
?>
