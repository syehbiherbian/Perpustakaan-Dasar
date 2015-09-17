<?php
include "pages/koneksi.php";

$id_pet = $_POST['id_pet'];
$pass = $_POST['pass'];

$sql = "select * from tb_petugas where id_petugas = '$id_pet'";
$query = mysql_query($sql);
if (mysql_num_rows($query) > 0) {
	session_start();
	$_SESSION['id_petugas'] = $id_pet;
	header("Location: index.php?p=home");
} else {
	header("location:login.php?pesan=2&isi=Karena Username atau password salah ");
}
?>