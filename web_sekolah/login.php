<?php 
    session_start();
    include "config.php";
    $username = mysqli_real_escape_string($konek, $_POST['username']);
    $password = mysqli_real_escape_string($konek, $_POST['password']);

    $sql = mysqli_query($konek, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
    $data = mysqli_fetch_array($sql);

    if( ! empty($data)){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        setcookie("message","delete",time()-1);
        header("location: data_murid.php");
    } else {
        setcookie("message", "<h5>Maaf, username atau password salah!</h5>", time()+3600);
        header("location: index.php");
    }
?>