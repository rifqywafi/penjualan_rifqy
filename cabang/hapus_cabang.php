<?php

include('../koneksi.php');

$id = $_GET['id_cabang'];

$query = "DELETE FROM cabang WHERE id_cabang= '$id'";

if($koneksi->query($query)) {
    header("location: view_cabang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>