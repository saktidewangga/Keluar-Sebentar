<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['kirim'])){

	// ambil data dari formulir
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email   = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	
	// buat query
	$sql = "INSERT INTO `tbl_contact` (`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
	$query = mysqli_query($db, $sql);
	//apakah query simpan berhasil?
	if($query){
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: contact.php?status=sukses');
	}else {
		// kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: contact.php?status=gagal');
	}	
	
} else {
  die("Akses dilarang...");
}

?>