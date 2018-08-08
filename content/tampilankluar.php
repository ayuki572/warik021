 <?php 
 include('config.php');
 ?>

<html>
<head>
<title>Data Surat Keluar</title>

</head>

<body>
<h2>Data Surat Keluar</h2>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>

<a href="halaman awal.php?m=content&p=Surat Keluar">+ Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
		    <td>No</td>
        	<td>No.Urut</td>
        	<td>No Berkas</td>
        	<td>Alamat Pengirim</td>
        	<td>Tanggal</td>
        	<td>Perihal</td>
        	<td>Nomor Petunjuk</td>
        	<td>Nomor </td>
        </tr>
    </thead>
    <tbody>
    <?php
	
	$query = mysql_query( "select * from srt_out" );
	//$result = mysql_query($sql) or die (mysql_error()); 
	
	$no = 1;
	while($data = mysql_fetch_array($query)) {
	?>
    	<tr>
		    <td><?php echo $data['id_user']; ?></td>
        	<td><?php echo $data['No_Urut']; ?></td>
        	<td><?php echo $data['No_Berkas']; ?></td>
        	<td><?php echo $data['Alamat_Tujuan']; ?></td>
        	<td><?php echo $data['Tanggal']; ?></td>
        	<td><?php echo $data['Perihal']; ?></td>
        	<td><?php echo $data['Nomor_Petunjuk']; ?></td>
			<td><?php echo $data['Nomor']; ?></td>
            
			
			
			<td>
				
            	<a href="edit out.php?id=<?php echo $data['id_user']; ?>">Edit</a> ||
                <a href="delete_out.php?id=<?php echo $data['id_user']; ?>">Delete</a>
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