<?php

//include koneksi database
include('../db_connect.php');

//get data dari form
$id_tanggap     = $_POST['id_tanggap'];
$Nama_pelapor   = $_POST['Nama_pelapor'];
$Alamat         = $_POST['Alamat'];
$Keterangan     = $_POST['Keterangan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tanggap SET Nama_pelapor = '$Nama_pelapor', Alamat = '$Alamat', Keterangan = '$Keterangan' WHERE id_tanggap = '$id_tanggap'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=tanggapan");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>