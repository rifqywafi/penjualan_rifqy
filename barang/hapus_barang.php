<?php

include('../koneksi.php');

$id = $_GET['id_barang'];

$query = "DELETE FROM barang WHERE id_barang= '$id'";

if($koneksi->query($query)) {
    header("location: view_barang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>