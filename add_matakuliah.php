<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                ?>
                    <div class="alert alert-danger my-4"><?= $message ?></div>
                <?php
                }
                ?>
                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Tambah Mata Kuliah</h2>
                            <a href="matakuliah.php" class="btn btn-primary">Daftar Mata Kuliah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="add_process_matakuliah.php" method="post">
                            <div class="mb-4">
                                <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
                                <input type="text" name="kode_mk" id="kode_mk" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="jumlah_sks" class="form-label">Jumlah SKS</label>
                                <input type="text" name="jumlah_sks" id="jumlah_sks" class="form-control">
                            </div>
                            
                            <button type="submit" name="add" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
