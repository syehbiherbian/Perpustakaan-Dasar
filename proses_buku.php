<?php
include 'pages/koneksi.php';
$kode_buku = $_POST['kode_buku'];
$kode_kategori = $_POST['kode_kategori'];
$kode_penerbit = $_POST['kode_penerbit'];
$judul_buku = $_POST['judul_buku'];
$jumhal_buku = $_POST['jumhal_buku'];
$desk_buku = $_POST['desk_buku'];
$pengarang_buku = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$sql = mysql_query("insert into tb_buku values('$kode_buku', '$kode_kategori', '$kode_penerbit', '$judul_buku', '$jumhal_buku', '$desk_buku', '$pengarang_buku', '$tahun_terbit')");
if ($sql) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Buku Baru Dengan Kode $kode_buku");
} else {
	header("location:index.php?pesan=1&isi=Gagal Menambahkan Data Buku Baru Dengan Kode $kode_buku karena " . mysql_error());
}
?>