<?php
include "koneksi_sqlsrv_3.php";

//TEST API PAKE POSTMAN
$id_pesanan = $_POST["Idpesanan"];
$id_menu = $_POST["Idmenu"];
$id_pelanggan = $_POST["Idpelanggan"];
$jumlah = $_POST["Jumlah"];
$id_user = $_POST["Iduser"];
$total_harga = $_POST["TotalHarga"];

$sql = "INSERT INTO pesanan3 (Idpesanan,Idmenu,Idpelanggan,Jumlah,Iduser,TotalHarga) VALUES('".$id_pesanan."', '".$id_menu."', '".$id_pelanggan."', '".$jumlah."', '".$id_user."', '".$total_harga."')";
$result = sqlsrv_query($conn, $sql);

if ($sql) {
    echo "Data Berhasil Disimpan";
} else {
    echo "Data Gagal Disimpan";
}

?>