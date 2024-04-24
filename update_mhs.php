<?php
include "koneksi.php";
if (isset($_GET['id'])) {
    $npm = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm='$npm'");
    $data = mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Update Mahasiswa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h2>Update Mahasiswa</h2>
                                <a href="mahasiswa.php" class="btn btn-primary">Daftar Mahasiswa</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="update_process_mhs.php" method="post">
                                <input type="hidden" name="npm" value="<?= $npm ?>">
                                <div class="mb-4">
                                    <label for="npm" class="form-label">NPM</label>
                                    <input type="text" name="npm" id="npm" class="form-control" value="<?= $data['npm'] ?>" readonly>
                                </div>
                                <div class="mb-4">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?= $data['jurusan'] ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control"><?= $data['alamat'] ?></textarea>
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
