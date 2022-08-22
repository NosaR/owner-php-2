<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

//TEST API PAKE POSTMAN

//SEHARUSNYA DIKASIH ID MEJA (TAPI GPP SIH KALO GADA)

$nama_pelanggan = $_POST["Namapelanggan"];

$sql = "INSERT INTO pelanggan (Namapelanggan) VALUES('".$nama_pelanggan."')";
$result = sqlsrv_query($conn, $sql);

if ($sql) {
    echo "Data Berhasil Disimpan";
} else {
    echo "Data Gagal Disimpan";
}

?>