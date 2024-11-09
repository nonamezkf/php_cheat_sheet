<?php 
    include_once('connect.php');

    $judul = $_POST['judul'];
    $penyewa = $_POST['penyewa'];
    $durasi = $_POST['durasi'];
    $tanggal_sewa = date('Y-m-d');


    mysqli_query($connect, " INSERT INTO sewa (judul,penyewa,tanggal_sewa,durasi) VALUES ('$judul','$penyewa','$tanggal_sewa','$durasi')");

    header("location: index.php");



    // echo $judul."<br/>";
    // echo $penyewa."<br/>";
    // echo $durasi."<br/>";
    // echo $tanggal_sewa."<br/>";
?>