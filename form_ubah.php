<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Ubah Data Buku</h1>
	<?php
	include"koneksi.php";
	$id_buku=$_GET['id_buku'];

	$query="SELECT * FROM tb_buku WHERE id_buku='".$id_buku."'";
	$sql =mysqli_query($connect,$query);
	$data =mysqli_fetch_array($sql);
	?>

	<form method="post" action="proses_ubah.php?id_buku=<?php echo $id_buku; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>JUDUL BUKU</td>
		<td><textarea name="judul_buku"><?php echo $data['judul_buku']; ?></textarea></td>
	</tr>
	<tr>
		<td>JENIS BUKU</td>
		<td>
			<?php 
			if ($data['jenis_buku']== "fiksi") {
				echo "<input type='radio' name='jenis_buku' value='fiksi' checked='checked'> fiksi";
				echo "<input type='radio' name='jenis_buku' value='novel'>novel";
				echo "<input type='radio' name='jenis_buku' value='sejarah'>sejarah";
				echo "<input type='radio' name='jenis_buku' value='agama'>agama";
			}else if ($data['jenis_buku']== "novel") {
				echo "<input type='radio' name='jenis_buku' value='fiksi'>fiksi";
				echo "<input type='radio' name='jenis_buku' value='novel' checked='checked'> novel";
				echo "<input type='radio' name='jenis_buku' value='sejarah'>sejarah";
				echo "<input type='radio' name='jenis_buku' value='agama'>agama";
			}else if  ($data['jenis_buku']== "sejarah"){
				echo "<input type='radio' name='jenis_buku' value='fiksi'>fiksi";
				echo "<input type='radio' name='jenis_buku' value='novel'> novel";
				echo "<input type='radio' name='jenis_buku' value='sejarah' checked='checked'>sejarah";
				echo "<input type='radio' name='jenis_buku' value='agama'>agama";
			}else if($data['jenis_buku']== "agama"){
				echo "<input type='radio' name='jenis_buku' value='fiksi'>fiksi";
				echo "<input type='radio' name='jenis_buku' value='novel'> novel";
				echo "<input type='radio' name='jenis_buku' value='sejarah'>sejarah";
				echo "<input type='radio' name='jenis_buku' value='agama' checked='checked'>agama";
			}
			?>
		</td>
	</tr>
	<tr>
		<td>PENGARANG</td>
		<td><input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>"></td>
	</tr>
	<tr>
		<td>TAHUN TERBIT</td>
		<td><input type="text" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>"></td>
	</tr>
	<tr>
		<td>PENERBIT</td>
		<td><input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>"></td>
	</tr>
	<tr>
		<td>HARGA</td>
		<td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto_buku">
		</td>
	</tr>
</table>

<hr>
<input type="submit" value="Ubah">
<a href="index.php"><input type="button" value="Batal"></a>
</form>
</body>
</html>