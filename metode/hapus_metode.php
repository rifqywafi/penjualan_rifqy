<?php

include('../koneksi.php');

$id = $_GET['id_metode_pembayaran'];

$query = "DELETE FROM metode_pembayaran WHERE id_metode_pembayaran= '$id'";

if($koneksi->query($query)) {
    header("location: view_metode.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>