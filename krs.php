<?php
include "koneksi.php";
if (isset($_GET['message'])) {
    $message = $_GET['message'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabel KRS</title>
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
                            <h2>Tabel KRS</h2>
                            <a href="add_krs.php" class="btn btn-primary">Tambah KRS</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mahasiswa NPM</th>
                                    <th>Matakuliah Kode MK</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM krs");
                                while ($data = mysqli_fetch_assoc($query)) :
                                ?>
                                    <tr>
                                        <td><?= $data['id'] ?></td>
                                        <td><?= $data['mahasiswa_npm'] ?></td>
                                        <td><?= $data['matakuliah_kodemk'] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="update_krs.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                                                <a href="delete_krs.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
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
