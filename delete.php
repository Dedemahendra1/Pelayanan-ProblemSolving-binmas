<?php

include('db_connect.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM problem WHERE id_lapor = '$id'";

if($con->query($query)) {
    header("location: problem.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>