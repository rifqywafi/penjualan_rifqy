<?php
include ('../koneksi.php');
$id_metode     = $_POST['id_metode_pembayaran'];
$nama          = $_POST['nama'];

$query = "INSERT INTO metode_pembayaran (id_metode_pembayaran, nama_metode) VALUES ('$id_metode', '$nama')";

if($koneksi->query($query)) {

    header("location: view_metode.php");

} else {

    echo "Data Gagal Disimpan!";

}

?>