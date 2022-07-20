<?php
include('../koneksi.php');
    $id_barang      = $_POST['id_barang'];
    $id_supplier    = $_POST['id_supplier'];
    $id_kategori    = $_POST['id_kategori'];
    $nama_barang    = $_POST['nama_barang'];
    $harga_modal    = $_POST['harga_modal'];
    $harga_jual     = $_POST['harga_jual'];
    $stock          = $_POST['stock'];
    $tanggal_masuk  = $_POST['tanggal_masuk'];

$query = "UPDATE barang SET nama_barang = '$nama_barang', id_supplier = '$id_supplier', id_kategori = '$id_kategori',
harga_modal = '$harga_modal', harga_jual = '$harga_jual', stock = '$stock', tanggal_masuk = '$tanggal_masuk' 
WHERE id_barang = '$id_barang'";

if($koneksi->query($query)) {
    header("location:view_barang.php");
} else {
    echo "Data Gagal Diupdate!";
}

?>