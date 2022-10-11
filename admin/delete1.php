<?php

include('../db_connect.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM problem WHERE id_lapor = '$id'";

if($con->query($query)) {
    header("location: index.php?page=input_data");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>