<?php 
include('config.php');
//include('cek-login.php');
?>

<html>
<head>
<title>Edit Surat Masuk</title>
</head>

<body>
<h1>Form Edit Surat Keluar</h1>

<?php 
$id = $_GET['id'];

$query = mysql_query("select * from srt_out where id_user='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update out.php" method="post">
<input type="hidden" name="id_srt" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>No Urut</td>
        	<td>:</td>
        	<td><input type="text" name="No_Urut" maxlength="20" required="required" value="<?php echo $data['No_Urut']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>No Berkas</td>
        	<td>:</td>
        	<td><input type="text" name="No_Berkas" maxlength="20" required="required" value="<?php echo $data['No_Berkas']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Alamat Tujuan</td>
        	<td>:</td>
        	<td><input type="text" name="Alamat_Tujuan" maxlength="100" required="required" value="<?php echo $data['Alamat_Tujuan']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Tanggal</td>
        	<td>:</td>
        	<td><input type="text" name="Tanggal" required="required" value="<?php echo $data['Tanggal']; ?>" 
			onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_srt);return false;"/><a href="javascript:void(0)" 
			onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_srt);return false;">
			<img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" 
			width="34" height="29" border="0" alt=""></a></td>
		</tr>
    	<tr>
        	<td>Perihal</td>
        	<td>:</td>
        	<td><input type="text" name="Perihal" required="required" value="<?php echo $data['Perihal']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Nomor Petunjuk</td>
        	<td>:</td>
        	<td><input type="text" name="Nomor_Petunjuk" maxlength="14" required="required" value="<?php echo $data['Nomor Petunjuk']; ?>" /></td>
        </tr>
			<td>Nomor</td>
        	<td>:</td>
        	<td><input type="text" name="Nomor" maxlength="14" required="required" value="<?php echo $data['Nomor']; ?>" /></td>
        </tr>
			
        </tr>
    </tbody>
</table>
</form>

<a href="tampilankluar.php">Lihat Data</a>

</body>
<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" 
src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; 
position:absolute; top:-500px; left:-500px;">
</iframe>
</html>