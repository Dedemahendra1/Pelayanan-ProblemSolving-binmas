<?php

//include koneksi database
include('db_connect.php');

//get data dari form
$id_lapor     = $_POST['id_lapor'];
$Nama         = $_POST['Nama'];
$Umur         = $_POST['Umur'];
$Agama    = $_POST['Agama'];
$Isi_pengaduan    = $_POST['Isi_pengaduan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE problem SET Nama = '$Nama', Umur = '$Umur', Agama = '$Agama', Isi_Pengaduan = '$Isi_pengaduan' WHERE id_lapor = '$id_lapor'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("location: problem.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>