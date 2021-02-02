<?php
    include "config.php";
    $id =$_GET['idmurid'];
    $ambildata = mysqli_query($konek, "DELETE FROM siswa WHERE idmurid='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web_sekolah/data_murid.php'>";
    
?>
