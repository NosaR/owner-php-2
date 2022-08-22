<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$sql = "SELECT * FROM transaksi2";
$hasil = sqlsrv_query($conn, $sql);

$array["transaksi2"] = array();

    while ($row = sqlsrv_fetch_array($hasil)) {
        array_push($array["transaksi2"],
        $data = array(
            "Idtransaksi" => $row["Idtransaksi"],
        ));
    }
    echo json_encode($array);
?>