<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah KRS</title>
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
                            <h2>Tambah KRS</h2>
                            <a href="krs.php" class="btn btn-primary">Daftar KRS</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="add_process_krs.php" method="post">
                            <div class="mb-4">
                                <label for="id" class="form-label">ID</label>
                                <input type="text" name="id" id="id" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="mahasiswa_npm" class="form-label">Mahasiswa NPM</label>
                                <input type="text" name="mahasiswa_npm" id="mahasiswa_npm" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="matakuliah_kodemk" class="form-label">Mata Kuliah Kode MK</label>
                                <input type="text" name="matakuliah_kodemk" id="matakuliah_kodemk" class="form-control">
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
