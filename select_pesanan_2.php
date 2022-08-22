<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$sql = "SELECT * FROM pesanan3";
$hasil = sqlsrv_query($conn, $sql);

$array = array();

    while ($row = sqlsrv_fetch_array($hasil)) {
        $data = array(
            "Idpesanan" => $row["Idpesanan"],
            "Idmenu" => $row["Idmenu"],
            "Idpelanggan" => $row["Idpelanggan"],
            "Jumlah" => $row["Jumlah"],
            "Iduser" => $row["Iduser"],
            "TotalHarga" => $row["TotalHarga"],
        );
        array_push($array, $data);
    }
    echo json_encode($array);
?>