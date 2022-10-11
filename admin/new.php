<?php

//include koneksi database
include('../db_connect.php');

//get data dari form
$Nama_pelapor          = $_POST['Nama_pelapor'];
$Alamat          = $_POST['Alamat'];
$Keterangan       = $_POST['Keterangan'];

//query insert data ke dalam database
$query = "INSERT INTO tanggap (Nama_pelapor, Alamat, Keterangan) VALUES ('$Nama_pelapor', '$Alamat', '$Keterangan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=tanggapan");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>