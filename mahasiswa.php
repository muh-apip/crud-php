<?php
include "koneksi.php";
if (isset($_GET['message'])) {
    $message = $_GET['message'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabel Mahasiswa</title>
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
                            <h2>Tabel Mahasiswa</h2>
                            <a href="add_mhs.php" class="btn btn-primary">Tambah Mahasiswa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                                while ($data = mysqli_fetch_assoc($query)) :
                                ?>
                                    <tr>
                                        <td><?= $data['npm'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['jurusan'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="update_mhs.php?id=<?= $data['npm'] ?>" class="btn btn-warning">Edit</a>
                                                <a href="delete_mhs.php?id=<?= $data['npm'] ?>" class="btn btn-danger">Delete</a>
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
