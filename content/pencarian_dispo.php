<!--<html>
<body>
<form name="formcari" method="post" action="carisrtdispo.php">
<table width="330" border="0" align="left" cellpadding="0">
<tr>
<td height="25" colspan="3">
<strong> Cari Surat </strong>
</td>
</tr>
<tr> <td>  No Surat </td>
<td> <input type="text" name="no_srt"> </td>
</tr>
<tr>
<td></td>

<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" > </td>
</tr>

</table>
</form>
</body>
</html>-->


<?php error_reporting(0) // tambahkan untuk menghilangkan notice... hehe ?>
<!doctype html>
<html>
    <head>
        <title>--//Input Disposisi - Surat Masuk</title>
        <link rel="stylesheet" href="assets/bootstrap.min.css"/>
    </head>
    <body>
        <?php 
//        includekan fungsi paginasi
        include 'assets/pagination1.php';
		include 'config.php';
//        koneksi ke database
        //$koneksi = mysql_connect('localhost', 'root', '');
        //$db = mysql_select_db('harviacode');
        
//        mengatur variabel reload dan sql
        if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){
//        jika ada kata kunci pencarian (artinya form pencarian disubmit dan tidak kosong)
//        pakai ini
            $keyword=$_REQUEST['keyword'];
            $reload = "halaman awal.php?m=content&p=pencarian_dispo?pagination=true&keyword=$keyword";
            $sql =  "SELECT * FROM srt_in WHERE no_srt LIKE '%$keyword%'";
            $result = mysql_query($sql);
        }else{
//            jika tidak ada pencarian pakai ini
            $reload = "halaman awal.php?m=content&p=pencarian_dispo?pagination=true";
            $sql =  "SELECT * FROM srt_in";
            $result = mysql_query($sql);
        }
        
        //pagination config start
        $rpp = 10; // jumlah record per halaman
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
		
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" class="input" name="Tanggal"  
            onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.Tanggal);return false;"/><a href="javascript:void(0)" 
            onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.Tanggal);return false;">
            <img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" 
            width="34" height="29" border="0" alt=""></a></td>
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <div class="col-lg-8">
                    <!--muncul jika ada pencarian (tombol reset pencarian)-->
                    <?php
                    if($_REQUEST['keyword']<>""){
                    ?>
                        <a class="btn btn-default btn-outline" href="halaman awal.php?m=content&p=pencarian_dispo"> Reset Pencarian</a>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-4 text-right">
                    <form method="post" action="halaman awal.php?m=content&p=pencarian_dispo">
                        <div class="form-group input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Search..." value="<?php echo $_REQUEST['keyword']; ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Cari
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Berkas</th>
						<th>Perihal Surat</th>
						<th>Tanggal Surat</th>
                        <th>Input</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                    ?>
                    <tr>
                        <td width="30px">
                            <?php echo ++$id_srt;?> 
                        </td>

                        <td width="70">
                            <?php echo $data ['no_srt']; ?> 
                        </td>
						<td width="120">
                            <?php echo $data ['kategori_srt']; ?> 
                        </td>
						<td width="50">
                            <?php echo $data ['tgl_srt']; ?> 
                        </td>
                        <td width="70px" class="text-center">
                            <a href="#"> CETAK</a>
                        </td>
                    </tr>
                    <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                </tbody>
            </table>
            <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
        </div>
    </body>
    <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" 
src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; 
position:absolute; top:-500px; left:-500px;">
</iframe>
</html>

<!--->