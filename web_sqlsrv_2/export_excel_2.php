<?php
//SERVER
$serverName = "DESKTOP-OGQRBL1\RPL_123";

//DATABASE
$connectionInfo = array("Database"=>"db_restaurant_3");
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300;400&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Heebo', sans-serif;
    }

    body {
        width: 100%;
        min-height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-table {
        width: 1000px;
        min-height: 1000px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0,0,0,.3);
        padding: 10px 30px;
        display: flex;
        flex-direction: column;
    }

    .content-table {
        border-collapse: collapse;
        font-size: 0.9em;
        min-width: 300px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,.15);
    }

    .content-table thead tr {
        background-color: #009879;
        color: white;
        text-align: left;
    }

    .content-table th,
    .content-table td {
        padding: 12px 15px;
    }

    .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .btn-export,
    .btn-logout {
        background-color: #009879;
        color: white;
        border-radius: 5px;
        border: none;
        width: 100px;
        height: 40px;
        margin: 10px 0 20px 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0, 0.15);
    }

    a {
        text-decoration: none;
        color: white;
    }
</style>
<body>
    
    <div class="container-table">

        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=export-excel.xls")
        ?>

        <!-- TABLE DATA -->
        <table class="content-table" id="myTable">

            <!-- HEADER TABLE -->
            <thead>
                <tr>
                    <td>Id Transaksi</td>
                    <td>Id Pesanan</td>
                    <td>Total</td>
                </tr>
            </thead>

            <!-- MENAMPILKAN DATA DARI DATABASE -->
            <?php
            $sql = "SELECT * FROM transaksi2";
            $hasil = sqlsrv_query($conn, $sql);

            // JIKA HANYA MENAMPILKAN DATA, TIDAK PERLU MENGGUNAKAN WHILE
            while ($row = sqlsrv_fetch_array($hasil)) {
            ?>

            <tbody>
                <tr>
                    <td><?php echo $row['Idtransaksi'] ?></td>
                    <td><?php echo $row['Idpesanan'] ?></td>
                    <td><?php echo $row['Total'] ?></td>
                </tr>
            </tbody>

            <!-- UNTUK MENUTUP TAG AGAR DATA DAPAT MUNCUL -->
            <?php
            }
            ?>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('$myTable'). DataTable();
        });
    </script>
</body>
</html>