<?php

include('../koneksi.php');

$id = $_GET['id_kasir'];

$query = "DELETE FROM kasir WHERE id_kasir= '$id'";

if($koneksi->query($query)) {
    header("location: view_kasir.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>