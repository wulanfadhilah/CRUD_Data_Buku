<?php 
include "koneksi.php";
$id_buku=$_GET['id_buku'];
$judul_buku=$_POST['judul_buku'];
$jenis_buku=$_POST['jenis_buku'];
$pengarang=$_POST['pengarang'];
$tahun_terbit=$_POST['tahun_terbit'];
$penerbit=$_POST['penerbit'];
$harga=$_POST['harga'];
$foto =$_FILES['foto_buku']['name'];
$tmp =$_FILES['foto_buku']['tmp_name'];


if (isset($_POST['ubah_foto'])) {
	$foto_buku=$_FILES['foto_buku']['name'];
	$tmp=$_FILES['foto_buku']['tmp_name'];

	$fotobaru =date('dmYHis').$foto_buku;

	$path="images/".$fotobaru;

	if (move_uploaded_file($tmp,$path)) {
		$query="SELECT * FROM tb_buku WHERE id_buku='".$id_buku."'";
		$sql=mysqli_query ($connect,$query);
		$data=mysqli_fetch_array($sql);

		if (is_file("images/".$data['foto_buku'])) 
			unlink("images/".$data['foto_buku']);

		$query="UPDATE tb_buku SET judul_buku='".$judul_buku."' , jenis_buku='".$jenis_buku."',pengarang='".$pengarang."',tahun_terbit='".$tahun_terbit."',penerbit='".$penerbit."',harga='".$harga."',foto_buku='".$fotobaru."' WHERE id_buku='".$id_buku."'";
		$sql =mysqli_query($connect,$query);

		if ($sql) {
			header("location:index.php");

		}else{
			echo "maaf,terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali ke Form </a>";
		}
	}else{
		echo "Maaf, Gambar gagal untuk di upload.";
		echo "<br><a href='form_ubah.php'>Kembali ke Form </a>";

	}
	}else{
		$query="UPDATE tb_buku SET judul_buku='".$judul_buku."' , jenis_buku='".$jenis_buku."',pengarang='".$pengarang."',tahun_terbit='".$tahun_terbit."',penerbit='".$penerbit."',harga='".$harga."',foto_buku='".$fotobaru."' WHERE id_buku='".$id_buku."'";
		$sql =mysqli_query($connect,$query);

		if(sql){
			header("location: index.php");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali ke Form </a>";
		}
	}
	?>
