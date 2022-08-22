<?php
//SERVER
$serverName = "DESKTOP-OGQRBL1\RPL_123";

//DATABASE
$connectionInfo = array("Database"=>"db_restaurant_3");
$conn = sqlsrv_connect($serverName, $connectionInfo);

// UNTUK MEMULAI SESSION
session_start();

// AGAR TIDAK EROR
error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user5 WHERE Username='owner' AND Password='$password'";
    $result = sqlsrv_query($conn, $query);

    if ($row = sqlsrv_fetch_array($result)) {
        header("Location: index_2.php");
    } else {
        echo "<script>alert('Email atau Password Anda Salah.')</script>";
    }
}

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

    .container {
        width: 400px;
        min-height: 400px;
        background: white;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0,0,0,.3);
        padding: 40px 30px;
    }

    .container .login-text {
        color: #111;
        text-align: center;
        margin-bottom: 20px;
        display: block;
        text-transform: capitalize;
    }

    .container .login .input-group {
        width: 100%;
        height: 50px;
        margin-bottom: 25px;
    }

    .container .login .input-group input {
        width: 100%;
        height: 100%;
        border: 2px solid #e7e7e7;
        padding: 15px 20px;
        font-size: 1rem;
        border-radius: 30px;
        background: transparent;
        outline: none;
        transition: .3s;
    }

    .container .login .input-group:focus,
    .container .login .input-group input:valid {
        border-color: #a29bfe;
    }

    .container .login .input-group .btn {
        display: block;
        width: 100%;
        padding: 15px 20px;
        text-align: center;
        border: none;
        background: #a29bfe;
        outline: none;
        border-radius: 30px;
        font-size: 1.2rem;
        color: white;
        cursor: pointer;
        transition: .3s;
    }

    .container .login .input-group .btn:hover {
        transform: translateY(-5px);
        background: #6c5ce7;
    }

</style>
<body>
    
    <div class="container">

        <!-- FORM -->
        <form action="" method="POST" class="login">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>

            <!-- USERNAME -->
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>

            <!-- PASSWORD -->
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>

            <!-- TOMBOL LOGIN -->
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

</body>
</html>