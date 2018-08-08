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
            $reload = "halaman awal.php?m=content&p=pencarian_srt?pagination=true&keyword=$keyword";
            $sql =  "SELECT * FROM srt_in WHERE no_srt LIKE 'SELECT * FROM srt_out WHERE No_Urut LIKE '%$keyword%'";
            $result = mysql_query($sql);
        }else{
//            jika tidak ada pencarian pakai ini
            $reload = "halaman awal.php?m=content&p=pencarian_srt?pagination=true";
            $sql =  "SELECT * FROM srt_in", "SELECT * FROM srt_out";
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
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <div class="col-lg-8">
                    <!--muncul jika ada pencarian (tombol reset pencarian)-->
                    <?php
                    if($_REQUEST['keyword']<>""){
                    ?>
                        <a class="btn btn-default btn-outline" href="halaman awal.php?m=content&p=pencarian_srt"> Reset Pencarian</a>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-4 text-right">
                    <form method="post" action="halaman awal.php?m=content&p=pencarian_srt">
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
                        <th>No Surat</th>
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
                            <?php echo ++$no_urut;?> 
                        </td>

                        <td width="70">
                            <?php echo $data ['no_srt']; ?> 
                        </td>
						<td width="120">
                            <?php echo $data ['hal_srt']; ?> 
                        </td>
						<td width="50">
                            <?php echo $data ['tgl_srt']; ?> 
                        </td>
						
                        </td>
                        <td width="70px" class="text-center">
                            <a href="#"> Edit</a>|
							<a href="#"> Hapus</a>
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
</html>
