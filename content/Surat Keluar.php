<html>
<head>
<title>Input Surat</title>
 <style type="text/css">
        #input_data {
            background-color: #fff;<!--#efefef;-->
            border-radius: 8px;
            margin: auto;
            width: 750px;
            align: center;
            border: 0px solid #c0c0c0;
            font-family: verdana;
            padding: 10px;
        }
        #input_data h2 {
            color: #007cc3;
            padding: 0px 0px 10px 0px;
            margin: 0px;
            font-family: basic title font;
            font-size: 10px;
        }
        #input_data p {
            color: #007cc3;
            margin: 0px;
        }
        .input {
            border-radius: 5px;
            margin-bottom: 7px;
            width: 250px;
            height: 30px;
        }
		.inputisi {
            border-radius: 5px;
            margin-bottom: 7px;
            width: 250px;
            height: 60px;
        }
        .daftar {
            background-color: #495677;
            color: white;
            font-family: basic title font;
            font-size: 20px;
            width: 100px;
            height: 35px;
            font-weight: bolder;
            border-radius: 5px;
        }
        .daftar:hover {
            color: #efefef;
            background-color: #007cc3;
        }
    </style>
</head>

<body>
<h2>Form Input Surat Keluar</h2>

<form id="input_data" name="input_data" action="insert out.php" method="post">
<table border="0" cellpadding="5" cellspacing="0" height="500px">
    <tbody>
        <tr>
            <td>No Urut</td>
            <td>:</td>
            <td><input type="text" class="input" name="No_Urut"  size="20" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td>Nomor Berkas</td>
            <td>:</td>
            <td><input type="text" class="input" name="No_Berkas"  size="20" maxlength="50" required="required" /></td>
        </tr>
		<tr>
            <td>Alamat Tujuan</td>
            <td>:</td>
            <td><input type="text" class="input" name="Alamat_Tujuan" size="80" maxlength="100" required="required" /></td>
        </tr>
        <tr>
            <td>Tanggal Surat</td>
            <td>:</td>
            <td><input type="text" class="input" name="Tanggal"  
			onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.Tanggal);return false;"/><a href="javascript:void(0)" 
			onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.Tanggal);return false;">
			<img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" 
			width="34" height="29" border="0" alt=""></a></td>
        </tr>
		  <tr>
            <td>Perihal</td>
            <td>:</td>
            <td><input type="text" class="input" name="Perihal"  size="20" maxlength="50" required="required" /></td>
        </tr>
       
         
       
        <tr>
            <td>Nomor Petunjuk</td>
            <td>:</td>
            <td><input type="text" class="input" size="20" name="Nomor_Petunjuk" rows="2" required="required" /></textarea></td>
        </tr>
		
           <tr>
            <td>Nomor</td>
            <td>:</td>
            <td><input type="text" class="input" cols="10"  rows="2" required="required" name="Nomor"/></textarea></td>
        </tr>
	
		
        <tr>
            <td align="center" class="daftar" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>

</form>
</body>


<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" 
src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; 
position:absolute; top:-500px; left:-500px;">
</iframe>
</html>