<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

//TEST API PAKE POSTMAN
$nama_menu = $_POST["Namamenu"];
$harga = $_POST["Harga"];

$sql = "INSERT INTO menu (Namamenu,Harga) VALUES('".$nama_menu."', '".$harga."')";
$result = sqlsrv_query($conn, $sql);

if ($sql) {
    echo "Data Berhasil Disimpan";
} else {
    echo "Data Gagal Disimpan";
}

?>