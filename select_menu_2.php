<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$sql = "SELECT * FROM menu";
$hasil = sqlsrv_query($conn, $sql);

$array= array();

    while ($row = sqlsrv_fetch_array($hasil)) {
        $data = array(
            "Idmenu" => $row["Idmenu"],
            "Namamenu" => $row["Namamenu"],
            "Harga" => $row["Harga"],
        );
        array_push($array, $data);
    }
    echo json_encode($array);
?>