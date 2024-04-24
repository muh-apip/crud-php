<?php
include "koneksi.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM krs WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Update KRS</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h2>Update KRS</h2>
                                <a href="krs.php" class="btn btn-primary">Daftar KRS</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="update_process_krs.php" method="post">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <div class="mb-4">
                                    <label for="mahasiswa_npm" class="form-label">Mahasiswa NPM</label>
                                    <input type="text" name="mahasiswa_npm" id="mahasiswa_npm" class="form-control" value="<?= $data['mahasiswa_npm'] ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="matakuliah_kodemk" class="form-label">Matakuliah Kode MK</label>
                                    <input type="text" name="matakuliah_kodemk" id="matakuliah_kodemk" class="form-control" value="<?= $data['matakuliah_kodemk'] ?>">
                                </div>
                                <button type="submit" name="edit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>
<?php
}
?>
