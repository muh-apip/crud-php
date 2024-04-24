<?php
include "koneksi.php";
if (isset($_GET['id'])) {
    $npm = $_GET['id']; // Menggunakan 'npm' sebagai nilai untuk menghapus data
    $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm='$npm'");
    if ($query) {
        $message = "Data berhasil dihapus";
        $message = urlencode($message);
        header("Location:mahasiswa.php?message={$message}");
    } else {
        $message = "Data gagal dihapus";
        $message = urlencode($message);
        header("Location:mahasiswa.php?message={$message}");
    }
}
?>
