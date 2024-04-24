<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM krs WHERE id='$id'");
    if ($query) {
        $message = "Data berhasil dihapus";
        $message = urlencode($message);
        header("Location: krs.php?message={$message}");
    } else {
        $message = "Data gagal dihapus";
        $message = urlencode($message);
        header("Location: krs.php?message={$message}");
    }
}
?>
