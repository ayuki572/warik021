<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:halaman awal.php');
}
?>
<html>
<head>
<title align="center">LOGIN</title>
<link rel="stylesheet" href="assets/pure-min.css">
		<link rel="stylesheet" href="assets/baby-blue.css">
</head>

<body>
<h1 align="center">LOGIN</h1>

<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3 align="center">Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3 align="center">Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3 align="center">Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3 align="center">Username dan Password tidak terdaftar!</h3>';
	}
}
?>

<!--<form name="login" action="otentikasi.php" method="post">
<label>Username</label>
<input type="text" name="username" class="input" autocomplete="off" id="username"/>
<label>Password</label>
<input type="password" name="password" class="input" autocomplete="off" id="password"/>

<input type="submit" class="button button-primary" value="log in" id="login"/>
<span class='msg'></span>
<div id="error">
</div>
</div>
</form>
-->

<form name="login" action="otentikasi.php" method="post">
<table border="0" cellpadding="5" cellspacing="0" align="center">
	<tr>
    	<td>Username</td>
    	<td>:</td>
    	<td><input type="text" name="username" /></td>
    </tr>
	<tr>
    	<td>Password</td>
    	<td>:</td>
    	<td><input type="password" name="password" /></td>
    </tr>
	<tr align="right">
    	<td colspan="3" align="center"><input type="submit" name="login" value="Login" /></td>
    </tr>
</table>
</form>
</body>
</html>