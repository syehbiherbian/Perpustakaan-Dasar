<?php include "pages/koneksi.php";

$kode_kategori = $_POST['kode_kat'];
$nama_kategori = $_POST['nama_kat'];
$sql = mysql_query("insert into tb_kategori values ('$kode_kategori', '$nama_kategori')");
if ($sql) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Kategori Baru Dengan Kode $kode_kategori");
} else {
	header("location:index.php?pesan=2&isi=Gagal Menambahkan Data Kategori Baru Dengan Kode $kode_kategori karena " . mysql_error());
}
?>
