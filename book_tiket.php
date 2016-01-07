<?php session_start();
if(ISSET($_SESSION['username'])){
?>
<?php
include("koneksi.php");
$result = $pdo->prepare("select * from data_member");
$result->execute();
?>
<table  border='1' cellpadding='5' cellspacing='8' style="text-align:center">
	<tr bgcolor='blue'>
		<th>Username</th>
		<th>Asal</th>
		<th>Tujuan</th>
		<th>Hari</th>
		<th>Jam</th>
		<th>Kode Tiket</th>
		<th>Batal Transaksi</th>
	</tr>
	<?php while ($data = $result->fetch()){?>
	<tr>
		<td><?php echo $data['username'];?></td>
		<?php
			$rowset = $pdo->prepare("select * from transaksi inner join tiket on transaksi.id_tiket=tiket.id_tiket where uid='".$data['uid']."'");
			$rowset->execute();
			while($dol = $rowset->fetch()){
			?>
			<td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $dol['asal'];?></td>
			<td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $dol['tujuan'];?></td>
			<td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $dol['hari'];?></td>
			<td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $dol['jam'];?></td>
			<td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $dol['kode'];?></td>
			<?php }?>
	<?php }?>
	<td><button type="submit" name="submit" class="btn btn-default">HAPUS</button></td>
	</tr>	
</table>
<?php
}else{
?>
<?php
header("location:index.php");
}
?>