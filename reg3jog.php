<?php session_start();
if(ISSET($_SESSION['username'])){
?>
<html>
<head>
	<title></title>
</head>
<body>
<h2> Register </h2>
<form action="" method="POST">
<table  border='1' cellpadding='5' cellspacing='8' style="text-align:center">
<tr bgcolor='blue' >
<td>Harga</td>
<td>Jumlah Orang</td>
<td>Total</td>
<td>Setuju</td>
</tr>
<tr>
<td>RP 7.000.000</td>
<td><input type="text" name="jumlah"><button type="submit" name="submit" class="btn btn-default">Hitung</button></td>
<td><?php  
if (isset($_POST['submit'])) {  
$org = $_POST['jumlah'];
$harga = 7000000;
$hasil = $harga*$org;
echo "RP $hasil";
}else{}
?></td>
<td><button type="submit" name="submit" class="btn btn-default">BOOK</button></td>
</tr>
</table>
</form>
<!--/.container-->
<a href ="advenjog.php">Kembali</a>
</body>
</html>
<?php
}else{
?>Fitur Ini hanya untuk member,Mohon <a href="daftar.php">DAFTAR</a> dulu atau <a href="index.php">Login</a><?php
}
?>