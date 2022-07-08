<html>
<head>
	<title> APLIKASI CRUD SEDERHANA </title>	
</head>
<body>
	<h1>Tambah Data Buku</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
		<tr>
			<td>ID BUKU</td>
			<td><input type="text" name="id_buku"></td>
		</tr>
		<tr>
			<td>JUDUL BUKU</td>
			<td><textarea name="judul_buku"></textarea></td>	
		</tr>
		<tr>
			<td>JENIS BUKU</td>
				<td>
				<input type="radio" name="jenis_buku" value="fiksi"> Fiksi
				<input type="radio" name="jenis_buku" value="novel"> Novel
				<input type="radio" name="jenis_buku" value="sejarah"> Sejarah
				<input type="radio" name="jenis_buku" value="agama"> Agama
				</td>
		</tr>
		<tr>
			<td>PENGARANG</td>
			<td><input type="text" name="pengarang"></td>
		</tr>
		<tr>
			<td>TAHUN TERBIT</td>
			<td><input type="text" name="tahun_terbit"></td>
		</tr>
		<tr>
			<td>PENERBIT</td>
			<td><input type="text" name="penerbit"></td>
		</tr>
		<tr>
			<td>HARGA</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>FOTO BUKU</td>
			<td><input type="file" name="foto_buku"></td>
		</tr>
</table>

	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
</form>
</body>
</html>