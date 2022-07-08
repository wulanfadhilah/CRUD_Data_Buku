<?php
include "koneksi.php";
$id_buku=$_POST['id_buku'];
$judul_buku=$_POST['judul_buku'];
$jenis_buku=$_POST['jenis_buku'];
$pengarang=$_POST['pengarang'];
$tahun_terbit=$_POST['tahun_terbit'];
$penerbit=$_POST['penerbit'];
$harga=$_POST['harga'];
$foto =$_FILES['foto_buku']['name'];
$tmp =$_FILES['foto_buku']['tmp_name'];

$fotobaru=date('dmYHis').$foto;

$path ="images/".$fotobaru;

if (move_uploaded_file($tmp, $path)) {
	// cek gambar berhasil atau tidak
	$query ="INSERT INTO tb_buku VALUES('".$id_buku."','".$judul_buku."','".$jenis_buku."','".$pengarang."','".$tahun_terbit."','".$penerbit."','".$harga."','".$fotobaru."')";
	$sql =mysqli_query($connect,$query);

	if ($sql) {
		header("location: index.php");
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
	}
}else{
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
}
?>


