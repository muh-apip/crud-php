<?php
include "koneksi.php";
if (isset($_GET['message'])) {
    $message = $_GET['message'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabel Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($message)) : ?>
                    <div class="alert alert-success my-4"><?= $message ?></div>
                <?php endif; ?>
                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Tabel Mata Kuliah</h2>
                            <a href="add_matakuliah.php" class="btn btn-primary">Tambah Mata Kuliah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kode MK</th>
                                    <th>Nama</th>
                                    <th>Jumlah SKS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM matakuliah");
                                while ($data = mysqli_fetch_assoc($query)) :
                                ?>
                                    <tr>
                                        <td><?= $data['kode_mk'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['jumlah_sks'] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="update_matakuliah.php?id=<?= $data['kode_mk'] ?>" class="btn btn-warning">Edit</a>
                                                <a href="delete_matakuliah.php?id=<?= $data['kode_mk'] ?>" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
