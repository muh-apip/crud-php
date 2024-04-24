<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama = $_POST['nama'];
    $jumlah_sks = $_POST['jumlah_sks'];

    $query = "UPDATE matakuliah SET nama='$nama', jumlah_sks='$jumlah_sks' WHERE kode_mk='$kode_mk'";

    if (mysqli_query($koneksi, $query)) {
        $message = "Data berhasil diubah";
        $message = urlencode($message);
        header("Location: matakuliah.php?message={$message}");
    } else {
        $message = "Data gagal diubah";
        $message = urlencode($message);
        header("Location: update_matakuliah.php?id={$kode_mk}&message={$message}");
    }
}
?>
