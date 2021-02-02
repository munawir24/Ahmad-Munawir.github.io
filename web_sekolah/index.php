<?php 
    include "config.php";
    session_start();
    if(isset($_SESSION['username'])){
        header("location: data_murid.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Login Sebelum Masuk Database
            </div>
            <div class="card-body">
            <?php 
                if(isset($_COOKIE["message"])){
                    echo $_COOKIE["message"];
                }
            ?>
                <form action="login.php" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control col-md-9" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control col-md-9" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                    <button type="reset" class="btn btn-danger" >BATAL</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>