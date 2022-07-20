<?php
include('../koneksi.php');
    $id_kategori    = $_POST['id_kategori'];
    $nama           = $_POST['nama'];;

$query = "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori = '$id_kategori'";

if($koneksi->query($query)) {
    header("location:view_kategori.php");
} else {
    echo "Data Gagal Diupdate!";
}

?>