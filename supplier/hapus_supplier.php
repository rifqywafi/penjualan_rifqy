<?php

include('../koneksi.php');

$id = $_GET['id_supplier'];

$query = "DELETE FROM supplier WHERE id_supplier= '$id'";

if($koneksi->query($query)) {
    header("location: view_supplier.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>