<?php
include ('../koneksi.php');
$id_barang     = $_POST['id_barang'];
$id_supplier   = $_POST['id_supplier'];
$id_kategori   = $_POST['id_kategori'];
$nama_barang   = $_POST['nama_barang'];
$harga_modal   = $_POST['harga_modal'];
$harga_jual    = $_POST['harga_jual'];
$stock         = $_POST['stock'];
$tanggal_masuk = $_POST['tanggal_masuk'];

$query = "INSERT INTO barang (id_barang, id_supplier, nama_barang, id_kategori, harga_modal, harga_jual, stock, tanggal_masuk)
        VALUES ('$id_barang', '$id_supplier', '$nama_barang', '$id_kategori', '$harga_modal', '$harga_jual', '$stock', '$tanggal_masuk')";

if($koneksi->query($query)) {

    header("location: view_barang.php");

} else {

    echo "Data Gagal Disimpan!";

}

?>