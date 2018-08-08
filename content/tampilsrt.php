 <?php 
 include('config.php');
 ?>

<html>
<head>
<title>Data Surat masuk</title>
</head>

<body>
<h2>Data Surat Masuk</h2>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>

<a href="halaman awal.php?m=content&p=in2">+ Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
        	<td>No.Urut</td>
        	<td>No Berkas</td>
        	<td>Alamat Pengirim</td>
        	<td>Tanggal</td>
        	<td>Nomor</td>
        	<td>Perihal</td>
        	<td>Nomor Petunjuk</td>
        	<td>Nomor Paket</td>
        </tr>
    </thead>
    <tbody>
    <?php
	
	$query = mysql_query( "select * from srt_in" );
	//$result = mysql_query($sql) or die (mysql_error()); 
	
	$no = 1;
	while($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $data['id_srt']; ?></td>
        	<td><?php echo $data['no_srt']; ?></td>
        	<td><?php echo $data['asal_srt']; ?></td>
        	<td><?php echo $data['tgl_srt']; ?></td>
        	<td><?php echo $data['hal_srt']; ?></td>
        	<td><?php echo $data['kategori_srt']; ?></td>
        	<td><?php echo $data['isi_srt']; ?></td>
			<td><?php echo $data['ket_srt']; ?></td>
			
            <td>
				
            	<a href="edit.php?id=<?php echo $data['id_srt']; ?>">Edit</a> || 
                <a href="delete.php?id=<?php echo $data['id_srt']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table>
</body>
</html>