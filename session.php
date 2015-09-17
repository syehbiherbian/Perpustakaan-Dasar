<?php
session_start();
if (!isset($_SESSION['id_petugas']) || empty($_SESSION['id_petugas'])) {
	echo "<script> alert('anda tidak memiliki hak akses ke admin area') </script>";
	header("Location:login.php");
}
?>