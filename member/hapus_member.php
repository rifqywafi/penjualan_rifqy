<?php

include('../koneksi.php');

$id = $_GET['id_member'];

$query = "DELETE FROM member WHERE id_member= '$id'";

if($koneksi->query($query)) {
    header("location: view_member.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>