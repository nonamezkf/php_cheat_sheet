<?php
include_once('connect.php');

$id = $_GET['id'];
$judul = $_POST['judul'];
$penyewa = $_POST['penyewa'];
$durasi = $_POST['durasi'];

$tanggal_sewa = date('Y-m-d');

mysqli_query($connect, "DELETE FROM sewa WHERE id='$id'");

header("location: index.php");

?>