<?php 
session_start();
include('config.php'); 
if(isset($_SESSION['id'])){ 
$id= $_SESSION['id']; 
$nama = $_POST['nama'];
$identitas = $_POST['identitas'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$trip = $_POST['trip'];
if(empty($nama)){ 
	echo "Data pemesanan harus di masukkan <a href='edit_booking.php?data=".$id."'>Klik Disini </a> Untuk Kembali"; 
}else{
	$sql = "update `tbl_pemesanan` set `nama`='$nama', `identitas`='$identitas', `alamat`='$alamat', `telp`='$telp', `email`='$email', `tanggal`='$tanggal', `trip`='$trip' where `id`='$id'"; 
	mysqli_query($db,$sql); 
	echo "Data Pemesanan Berhasil Diedit <a href='admin.php'>klik Disini </a> Untuk Kembali"; 
}
}
 ?> 