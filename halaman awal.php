  <?php 
  include('config.php'); 
  include('cek-login.php');
 ?> 

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Administrasi Surat Masuk</title>

		<link rel="stylesheet" href="assets/pure-min.css">
		<link rel="stylesheet" href="assets/baby-blue.css">
		<!--<link rel="stylesheet" href="css/style.default.css" type="text/css" />-->

	</head>

	<body>

		<div id="layout">
			<a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>

			<div id="menu">
				<div class="pure-menu pure-menu-open">
					<a class="pure-menu-heading" href="/">Menu</a>

					<ul>

						<li class=" ">
							<a href="halaman awal.php?m=content&p=home">Home</a>
						</li>
						<li class=" ">
							<a href="halaman awal.php?m=content&p=in2">Surat Masuk</a>
						</li>
						<li class=" ">
							<a href="halaman awal.php?m=content&p=tampilsrt">Data Surat Masuk</a>
						</li>
						<li class=" ">
							<a href="halaman awal.php?m=content&p=Surat Keluar">Surat Keluar</a>
						</li>
				
						<li class=" ">
							<a href="halaman awal.php?m=content&p=tampilankluar">Data Surat Keluar</a>
						</li>
						<li class=" ">
							<a href="halaman awal.php?m=content&p=pencarian_dispo">Cetak Surat Masuk</a>
						</li>
						<li class=" ">
						<li class=" ">
							<a href="halaman awal.php?m=content&p=Cetak Surat Keluar">Cetak Surat Keluar</a>
						<li align="center">
						-----------------------------
						</li>
						<li>
					<li>
						<?php 
						echo "User : <strong>".$_SESSION['username']."</strong>";
						?>
						</li>
						</li>
						<li>
						 <a href="logout.php">Logout</a>
						</li>
						
						
					</ul>
				</div>
			</div><!--div menu -->
<!--- Content ------------------------------->
			<div id="main">

				<div class="header">
					<h3> SURAT MENYURAT</h3>

					<h3>DISKOMINFO BANJAR</h3>

				</div>

				<div class="content">
					<?php
           
            if (!isset($_GET['p'])) {
                include ('content/home.php');
            } else {
                $page = $_GET['p'];
                $modul = $_GET['m'];
                include $modul . '/' . $page . ".php";
            }
            ?>
				</div>

				<!-------------FOOOOOOOOOOOOOOOOOOOOOTER----------------------------->
				<div class="footer">
					<div class="legal pure-g">
				
						<div class="pure-u-1 pure-u-sm-1-2">

							<p class="legal-copyright">
								&copy; tsumambu All rights reserved.
							</p>
						</div>
					</div>

				</div>
			</div><!-- div main -->
		</div>
		<!--div layout -->

	</body>
</html>
