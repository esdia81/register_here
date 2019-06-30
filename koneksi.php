<?php 
//$koneksi = mysqli_connect("localhost","root","","registrasi2");
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {}, NULL, NULL); mysqli_real_connect($con, "esdiamysql.mysql.database.azure.com", "esdia@esdiamysql", {"sandibaro3.mysql"}, {"registrasi2"}, 3306);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>


