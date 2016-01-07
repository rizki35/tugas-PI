<?php
include 'koneksi.php';

try {
	$sql_pdo = "INSERT INTO data_member SET username = ?, password = ?, nama = ? , email = ? , nomer = ? , alamat = ?";
	$stmt = $koneksi->prepare($sql_pdo);
	$stmt->bindparam(1, $_POST['username']);
	$stmt->bindparam(2, $_POST['password']);
	$stmt->bindparam(3, $_POST['nama']);
	$stmt->bindparam(4, $_POST['email']);
	$stmt->bindparam(5, $_POST['nomer']);
	$stmt->bindparam(6, $_POST['alamat']);

	if($stmt->execute()){
		header('Location: index.php');
		echo "Daftar sukses";
	}else{
		die('gagal menambahkan data.');
	}
} catch (PDOException $exception){
	echo"error:" . $exception->getMessage();
}
?>