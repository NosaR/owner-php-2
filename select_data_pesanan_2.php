<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$id_pesanan = $_POST['Idpesanan'];

$sql = "SELECT DISTINCT (Namapelanggan) from pesanan3,pelanggan WHERE pesanan3.Idpelanggan = pelanggan.Idpelanggan AND Idpesanan='$id_pesanan'";
$hasil = sqlsrv_query($conn, $sql);

$row = sqlsrv_fetch_array($hasil);

echo json_encode($row);
?>