<?php 
include('config.php');
//include('cek-login.php');
?>

<html>
<head>
<title>Edit Surat Masuk</title>
</head>

<body>
<h1>Form Edit Surat Masuk</h1>

<?php 
$id = $_GET['id'];

$query = mysql_query("select * from srt_in where id_srt='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update.php" method="post">
<input type="hidden" name="id_srt" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>No</td>
        	<td>:</td>
        	<td><input type="text" name="id_srt" maxlength="20" required="required" value="<?php echo $data['id_srt']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>No Surat</td>
        	<td>:</td>
        	<td><input type="text" name="no_srt" maxlength="20" required="required" value="<?php echo $data['no_srt']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Asal Surat</td>
        	<td>:</td>
        	<td><input type="text" name="asal_srt" size="80" maxlength="100" required="required" value="<?php echo $data['asal_srt']; ?>" /></td>
        </tr>
		<tr>
        	<td>Perihal Surat</td>
        	<td>:</td>
        	<td><input type="text" name="hal_srt" size="80" maxlength="100" required="required" value="<?php echo $data['asal_srt']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Tanggal</td>
        	<td>:</td>
        	<td><input type="text" name="tgl_srt" required="required" value="<?php echo $data['tgl_srt']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Kategori Surat</td>
        	<td>:</td>
        	<td><input type="text" name="kategori_srt"  required="required" value="<?php echo $data['kategori_srt']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Isi Surat</td>
        	<td>:</td>
        	<td><input type="text" name="isi_srt" size="100" maxlength="255" required="required" value="<?php echo $data['isi_srt']; ?>" /></td>
        </tr>
			<td>Keterangan Surat</td>
        	<td>:</td>
        	<td><input type="text" name="ket_srt" size="100" maxlength="200" required="required" value="<?php echo $data['ket_srt']; ?>" /></td>
        </tr>
			
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="halaman awal.php?m=content&p=tampilsrt">Lihat Data</a>

</body>
</html>