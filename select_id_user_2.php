<?php
//MEMANGGIL KONEKSI
include "koneksi_sqlsrv_3.php";

$sql = "SELECT * FROM user5";
$hasil = sqlsrv_query($conn, $sql);

$array["user"] = array();

    while ($row = sqlsrv_fetch_array($hasil)) {
        array_push($array["user"],
        $data = array(
            "Iduser" => $row["Iduser"],
            "Username" => $row["Username"],
            "Password" => $row["Password"],
        ));
    }
    echo json_encode($array);
?>