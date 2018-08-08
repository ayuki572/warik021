<!--<html>
<body>
>
<tr>
<td height="25" colspan="1">
<strong> Cari Surat </strong>
</td>
</tr>
<tr> <td>  No Surat </td>
<td> <input type="text" name="No_Berkas"> </td>
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
            $reload = "halaman awal.php?m=content&p=Cetak Surat Keluar?pagination=true&keyword=$keyword";
            $sql =  "SELECT * FROM srt_out WHERE No_Berkasb LIKE '%$keyword%'";
            $result = mysql_query($sql);
        }else{
//            jika tidak ada pencarian pakai ini
            $reload = "halaman awal.php?m=content&p=Cetak Surat Keluar?pagination=true";
            $sql =  "SELECT * FROM srt_out";
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
        <div 
            <div class="row">
                <div class="col-lg-8">
                    <!--muncul jika ada pencarian (tombol reset pencarian)-->
                    <?php
                    if($_REQUEST['keyword']<>""){
                    ?>
                        <a class="btn btn-default btn-outline" href="halaman awal.php?m=content&p=Cetak Surat Keluar"> Reset Pencarian</a>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-4 text-right">
                    <form method="post" action="halaman awal.php?m=content&p=Cetak Surat Keluar">
                        <div class="form-group input-group">
                           
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
                            <?php echo ++$id_user
					;?> 
                        </td>

                        <td width="50">
                            <?php echo $data ['No_Berkas']; ?> 
                        </td>
						<td width="120">
                            <?php echo $data ['Perihal']; ?> 
                        </td>
						<td width="10">
                            <?php echo $data ['Tanggal']; ?> 
                        </td>
                        
                    </tr>
					
                    <?php
					
                        $i++; 
                        $count++;
                    }
                    ?>
                </tbody>
            </table>
            <div style= "padding-top:10px;">
            <a href= "content/Cetak Surat Keluar.php" target"_blank"><button>Cetak</button><a/>
            <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
        </div>
    </body>
</html>

<!--->