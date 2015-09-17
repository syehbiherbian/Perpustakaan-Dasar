<?php include "pages/koneksi.php";
$kode_penerbit = $_POST['kode_pen'];
$nama_penerbit = $_POST['nama_pen'];
$penerbit_alamat = $_POST['alamat_pen'];
$telp_penerbit = $_POST['no_telp'];
$sql = mysql_query("insert into tb_penerbit values('$kode_penerbit', '$nama_penerbit', '$penerbit_alamat', '$telp_penerbit')");
if ($sql) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Penerbit Baru Dengan Kode $kode_penerbit");
} else {
	header("location:index.php?pesan=1&isi=Gagal Menambahkan Data Penerbit Baru Dengan Kode $kode_penerbit karena " . mysql_error());
}
?>