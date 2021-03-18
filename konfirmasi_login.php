<?php  
include('config.php'); 
if (isset($_POST['login'])) { 
$user = $_POST['username']; 
$pass = $_POST['password']; 
$username = mysqli_real_escape_string($db, $user); 
$password = mysqli_real_escape_string($db, MD5($pass)); 
//cek username dan password 
$sql="select `id_admin`, `level` from `admin` 
where `username`='$username' and `password`='$password'";
//echo $sql;
$query = mysqli_query($db, $sql); 
$jumlah = mysqli_num_rows($query); 
if($jumlah==0){
	header("Location:login.php?gagal=userpassSalah"); 
	}else{ 
	session_start(); 
	while($data = mysqli_fetch_row($query)){ 
	$id_admin = $data[0]; 
	$level = $data[l]; 
	$_SESSION['id_admin']=$id_admin; 
	$_SESSION['level']=$level; 
	header("Location:profil_admin.php"); 
	}
	}
}
?> 
