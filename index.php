<html>

<head>
	<title>registrasi4</title>
</head>

<body>
 	<h2>Isi registrasi disini:</h2>
	<br/>
	<a href="sisipkan_data.php"> Tambahkan Data:</a>
	<br/>
	<br/>
	<table border="1">
		<tr> <th>No</th>
			 <th>Nama</th>
			 <th>Email</th>
			 <th>Tanggal</th>
			 <th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from latihan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d["nama"]; ?></td>
			<td><?php echo $d["email"]; ?></td>
			<td><?php echo $d["tanggal"]; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
				<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
			</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>

</html>