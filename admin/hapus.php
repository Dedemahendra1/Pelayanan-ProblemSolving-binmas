<?php

include('../db_connect.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM problem WHERE id_tanggap = '$id'";

if($con->query($query)) {
    header("location: index.php?page=tanggapan");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>