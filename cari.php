<?php session_start();
if(ISSET($_SESSION['username'])){
?>
<html>
<?php
include "koneksi.php";
if (isset($_POST['pilih'])) {
$asal1= $_POST['asal1'];
$tujuan1= $_POST['tujuan1'];
$hari1= $_POST['hari1'];
$result = $pdo->prepare("SELECT * from tiket_pesawat where asal like '%$asal1%' and tujuan like '%$tujuan1%' and hari like '%$hari1%'");
}elseif (isset($_POST['pilih2'])) {
$asal2= $_POST['asal2'];
$tujuan2= $_POST['tujuan2'];
$hari2= $_POST['hari2'];
$result = $pdo->prepare("SELECT * from tiket_keretaapi where asal like '%$asal2%' and tujuan like '%$tujuan2%' and hari like '%$hari2%'");
}elseif (isset($_POST['pilih3'])) {
	$asal3= $_POST['asal3'];
$tujuan3= $_POST['tujuan3'];
$hari3= $_POST['hari3'];
$result = $pdo->prepare("SELECT * from tiket_minibus where asal like '%$asal3%' and tujuan like '%$tujuan3%' and hari like '%$hari3%'");
}elseif (isset($_POST['pilih4'])) {
	$asal4= $_POST['asal4'];
$tujuan4= $_POST['tujuan4'];
$hari4= $_POST['hari4']; //get the nama value from form
$result = $pdo->prepare("SELECT * from tiket_bus where asal like '%$asal4%' and tujuan like '%$tujuan4%' and hari like '%$hari4%'");
}
$result->execute();
?>
<head>
	<title></title>
</head>
<body>
<h2> Hasil Searching </h2>
<table border='1' cellpadding='5' cellspacing='8' style="text-align:center">
<tr bgcolor='blue' >
<td>Asal</td>
<td>Tujuan</td>
<td>Hari</td>
<td>Jam</td>
<td>Kode Tiket</td>
</tr>
<?php while ($data = $result->fetch()) { ?>
<tr>
<td><?php echo $data['asal'];?></td>
<td><?php echo $data['tujuan'];?></td>
<td><?php echo $data['hari'];?></td>
<td><?php echo $data['jam'];?></td>
<td><?php echo $data['kode'];?></td>
</tr>
<?php }?>
</table>
  <div class="col-sm-5 col-sm-offset-2" style="margin-top:10px;">
  <form action="tiketpesawat.php" method="post">
      <input type="text" class="form-control" id="" placeholder="Kode Tiket" name="">
    <button type="submit" name="submit" class="btn btn-default">BOOK</button>
  </form>
  </div>
<!--/.container-->
<a href ="travel.php">Kembali</a>
</body>
</html>
<?php
}else{
?>Fitur Ini hanya untuk member,Mohon <a href="daftar.php">DAFTAR</a> dulu atau <a href="index.php">Login</a><?php
}
?>