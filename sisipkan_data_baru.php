<?php 

include 'koneksi.php';

if (isset($_POST["unggah"])); {

	$nama    = $_POST["nama"];
	$email   = $_POST["email"];
	$tanggal = $_POST["tanggal"];
	
	$query = "INSERT INTO latihan
	VALUES ('', $nama', '$email', '$tanggal')

	";
	mysqli_query ($koneksi, $query);
}
header("location:index.php");
 
?>
