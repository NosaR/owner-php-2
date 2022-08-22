<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$sql = "SELECT * FROM menu";
$hasil = sqlsrv_query($conn, $sql);

$array["menu"] = array();

    while ($row = sqlsrv_fetch_array($hasil)) {
        array_push($array["menu"],
        $data = array(
            "Idmenu" => $row["Idmenu"],
            "Namamenu" => $row["Namamenu"],
            "Harga" => $row["Harga"],
        ));
    }
    echo json_encode($array);
?>