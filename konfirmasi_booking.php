<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['kirim'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
    $identitas = $_POST['identitas'];
	$alamat   = $_POST['alamat'];
	$telp = $_POST['telp'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
	$trip = $_POST['trip'];
	
	
	// buat query
	$sql = "INSERT INTO `tbl_pemesanan` (`nama`, `identitas`, `alamat`, `telp`, `email`, `tanggal`, `trip`) VALUES ('$nama', '$identitas', '$alamat', '$telp', '$email', '$tanggal', '$trip')";
	$query = mysqli_query($db, $sql);
	//apakah query simpan berhasil?
	if($query){
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: tours.php?status=sukses');
	}else {
		// kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: booking.php?status=gagal');
	}	
	
} else {
  die("Akses dilarang...");
}

?>