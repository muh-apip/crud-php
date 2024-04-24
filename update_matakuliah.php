<?php
include "koneksi.php";
if (isset($_GET['id'])) {
    $kode_mk = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE kode_mk='$kode_mk'");
    $data = mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Update Mata Kuliah</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h2>Update Mata Kuliah</h2>
                                <a href="matakuliah.php" class="btn btn-primary">Daftar Mata Kuliah</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="update_process_matakuliah.php" method="post">
                                <input type="hidden" name="kode_mk" value="<?= $kode_mk ?>">
                                <div class="mb-4">
                                    <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
                                    <input type="text" name="kode_mk" id="kode_mk" class="form-control" value="<?= $data['kode_mk'] ?>" readonly>
                                </div>
                                <div class="mb-4">
                                    <label for="nama" class="form-label">Nama Mata Kuliah</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="jumlah_sks" class="form-label">Jumlah SKS</label>
                                    <input type="text" name="jumlah_sks" id="jumlah_sks" class="form-control" value="<?= $data['jumlah_sks'] ?>">
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
