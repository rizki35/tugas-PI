<?php session_start(); 
//load database connection
include("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];
// MySQL data
$_SESSION['username']=$username;
$query = $pdo->prepare("select * from data_member where username LIKE '%$username%' AND password LIKE '%$password%'");
$query->execute();
if($check = $query->fetch()){
if($check['username'] == $_POST['username']){
header('Location: home.php');
}else{
echo "You have failed to login. Please <a href='index.php'>Login </a> again";
}
} else {
echo "username and password invalid ! Please <a href='index.php'>Login</a> again";
}
?>