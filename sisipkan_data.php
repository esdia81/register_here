
<!DOCTYPE html>

<html>

<head>
	<title> registrasi4</title>
</head>

<body>
	<h2>Tambahkan data </h2>
	
	
	<h4>Lengkapi seluruh kolom berikut:</h4>

	<form method="post" action="sisipkan_data_baru.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="varchar" name="Nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="varchar" name="Email"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="Tanggal"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Unggah"></td>
			</tr>		
		</table>
	</form>

	<br/>
	<a href="index.php">Kembali ke halaman utama</a>
	<br/>
</body>
