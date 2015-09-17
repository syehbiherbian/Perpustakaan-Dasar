<?php include "pages/koneksi.php";
$kode_anggota = $_POST['kode_ang'];
$nama_peminjam = $_POST['nama_ang'];
$tanggal_lahir = $_POST['tanggal'] . "-" . $_POST['bulan'] . "-" . $_POST['tahun'];
$alamat_peminjam = $_POST['alamat_ang'];
$no_telp = $_POST['no_telp'];
$sql = mysql_query("insert into tb_anggota values('$kode_anggota', '$nama_peminjam', '$tanggal_lahir', '$alamat_peminjam', '$no_telp')");
if ($sql) {
	header("location:index.php?pesan=1&isi=Berhasil Menambahkan Data Anggota Baru Dengan Kode $kode_anggota");
} else {
	header("location:index.php?pesan=1&isi=Gagal Menambahkan Data Anggota Baru Dengan Kode $kode_anggota karena " . mysql_error());
}
?>