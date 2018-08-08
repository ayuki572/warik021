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
        	<td><input type="text" name="asal_srt" maxlength="100" required="required" value="<?php echo $data['asal_srt']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Tanggal</td>
        	<td>:</td>
        	<td><input type="text" name="tgl_srt" required="required" value="<?php echo $data['tgl_srt']; ?>" 
			onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_srt);return false;"/><a href="javascript:void(0)" 
			onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_srt);return false;">
			<img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" 
			width="34" height="29" border="0" alt=""></a></td>
		</tr>
    	<tr>
        	<td>Kategori Surat</td>
        	<td>:</td>
        	<td><input type="text" name="kategori_srt" required="required" value="<?php echo $data['kategori_srt']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Isi Surat</td>
        	<td>:</td>
        	<td><input type="text" name="isi_srt" maxlength="14" required="required" value="<?php echo $data['isi_srt']; ?>" /></td>
        </tr>
			<td>Keterangan Surat</td>
        	<td>:</td>
        	<td><input type="text" name="ket_srt" maxlength="14" required="required" value="<?php echo $data['ket_srt']; ?>" /></td>
        </tr>
			<td>Disposisi</td>
        	<td>:</td>
        	<td><input type="text" name="disposisi" maxlength="14" required="required" value="<?php echo $data['disposisi']; ?>" /></td>
        </tr>
			<td>Tujuan Disposisi</td>
        	<td>:</td>
        	<td><input type="text" name="to_dis" maxlength="14" required="required" value="<?php echo $data['to_dis']; ?>" /></td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="tampilsrt.php">Lihat Data</a>

</body>
<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" 
src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; 
position:absolute; top:-500px; left:-500px;">
</iframe>
</html>