<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$sql = "SELECT * FROM pelanggan";
$hasil = sqlsrv_query($conn, $sql);

$array = array();

    while ($row = sqlsrv_fetch_array($hasil)) {
        $data = array(
            "Idpelanggan" => $row["Idpelanggan"],
            "Namapelanggan" => $row["Namapelanggan"],
        );
        array_push($array, $data);
    }
    echo json_encode($array);
?>