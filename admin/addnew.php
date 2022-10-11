<?php

//include koneksi database
include('../db_connect.php');

//get data dari form
$Nama           = $_POST['Nama'];
$Umur          = $_POST['Umur'];
$Agama       = $_POST['Agama'];
$Isi_pengaduan = $_POST['Isi_pengaduan'];

//query insert data ke dalam database
$query = "INSERT INTO Problem (Nama, Umur, Agama, Isi_pengaduan) VALUES ('$Nama', '$Umur', '$Agama', '$Isi_pengaduan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=input_data");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>