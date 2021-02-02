<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
            </div>
            <div class="card-body">
                <a href="input.php" class="btn btn-sm btn-success">Tambah Data</a>
                <a href="data_murid.php" class="btn btn-sm btn-warning">Reset</a>
                <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
                <div class="container mt-3">
                <div class="row">
                <div class="col-md-5">
                    <form method="POST" class="form-data">
                        <div class="form-group row mt-2">
                        <div class="col-sm-10">
                            <input type="text" name="keyword" class="form-control" placeholder="Cari Nama">
                        </div>
                            <button type="submit" name="cari" class="btn btn-sm btn-success">Cari</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
                <table class="table table-bordered">
                    <thead class="bg-info text-white">
                    <tr>
                        <th>NOMOR</th>
                        <th>NPM</th>
                        <th>NAMA</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>JENIS KELAMIN</th>
                        <th>ALAMAT</th>
                        <th>KODE POS</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                    <?php 
                        include "config.php";
                        if(isset($_POST['cari'])){
                            $search = $_POST['keyword'];
                            $query = $konek->query("SELECT * FROM siswa WHERE nama LIKE '%$search%' ORDER BY idmurid ASC");
                        } else {
                            $query = $konek->query("SELECT * FROM siswa ORDER BY idmurid ASC");
                        }
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?php echo $data['npm']; ?> </td>
                            <td> <?php echo $data['nama']; ?> </td>
                            <td> <?php echo $data['tempat_lahir']; ?> </td>
                            <td> <?php echo $data['tanggal_lahir']; ?> </td>
                            <td> <?php echo $data['jenis_kelamin']; ?> </td>
                            <td> <?php echo $data['alamat']; ?> </td>
                            <td> <?php echo $data['kode_pos']; ?> </td>
                            <td>
                                <a href="edit_murid.php?idmurid=<?php echo $data['idmurid']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?idmurid=<?php echo $data['idmurid']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>