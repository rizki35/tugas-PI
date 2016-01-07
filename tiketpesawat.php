<?php session_start();
if(ISSET($_SESSION['username'])){
?>
<html>
<head>
	<title></title>
</head>
<body>
<h2> Hasil Searching </h2>
<table border='1' cellpadding='5' cellspacing='8' style="text-align:center">
<tr bgcolor='blue' >
<td>Harga</td>
<td>Jumlah Orang</td>
<td>Total</td>
<td>Setuju</td>
</tr>
<tr>
<td></td>
<td><input type="text" class="form-control" id="" name=""></td>
<td></td>
<td><button type="submit" name="submit" class="btn btn-default">BOOK</button></td>
</tr>
</table>
<!--/.container-->
<a href ="travel.php">Kembali</a>
</body>
</html>
<?php
}else{
?>Fitur Ini hanya untuk member,Mohon <a href="daftar.php">DAFTAR</a> dulu atau <a href="index.php">Login</a><?php
}
?>