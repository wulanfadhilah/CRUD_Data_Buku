<?php 
include "koneksi.php";
$id_buku= $_GET['id_buku'];

$query="SELECT * FROM tb_buku WHERE id_buku='".$id_buku."'";
		$sql=mysqli_query ($connect,$query);
		$data=mysqli_fetch_array($sql);

	if (is_file("images/".$data['foto_buku'])) 
		 unlink("images/".$data['foto_buku']);

	$query2="DELETE FROM tb_buku WHERE id_buku='".$id_buku."'";
	$sql2=mysqli_query ($connect,$query2);

	if($sql2){
		header("location: index.php");
	}else{
		echo "Data gagal di hapus. <a href='index.php'>Kembali</a>";
	}
?>