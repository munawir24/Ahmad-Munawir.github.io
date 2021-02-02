<?php 
    $konek = mysqli_connect("localhost","root","","db_murid");

    if(mysqli_connect_errno($konek))
    {
        echo "Koneksi Gagal". mysqli_connect_error();
    }
?>