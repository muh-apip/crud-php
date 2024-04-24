<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $kode_mk = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM matakuliah WHERE kode_mk='$kode_mk'");
    if ($query) {
        $message = "Data berhasil dihapus";
        $message = urlencode($message);
        header("Location: matakuliah.php?message={$message}");
    } else {
        $message = "Data gagal dihapus";
        $message = urlencode($message);
        header("Location: matakuliah.php?message={$message}");
    }
}
?>
