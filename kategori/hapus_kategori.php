<?php

include('../koneksi.php');

$id = $_GET['id_kategori'];

$query = "DELETE FROM kategori WHERE id_kategori= '$id'";

if($koneksi->query($query)) {
    header("location: view_kategori.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>