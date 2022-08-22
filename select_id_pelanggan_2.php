<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$sql = "SELECT MAX(Idpelanggan) FROM pelanggan";
$hasil = sqlsrv_query($conn, $sql);

$row = sqlsrv_fetch_array($hasil);
echo json_encode($row);
?>