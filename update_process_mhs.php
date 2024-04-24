<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE npm='$npm'";

    if (mysqli_query($koneksi, $query)) {
        $message = "Data berhasil diubah";
        $message = urlencode($message);
        header("Location:mahasiswa.php?message={$message}");
    } else {
        $message = "Data gagal diubah";
        $message = urlencode($message);
        header("Location:update_mhs.php?id={$npm}&message={$message}");
    }
}
?>
