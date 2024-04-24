<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $mahasiswa_npm = $_POST['mahasiswa_npm'];
    $matakuliah_kodemk = $_POST['matakuliah_kodemk'];

    $query = "UPDATE krs SET mahasiswa_npm='$mahasiswa_npm', matakuliah_kodemk='$matakuliah_kodemk' WHERE id='$id'";

    if (mysqli_query($koneksi, $query)) {
        $message = "Data berhasil diubah";
        $message = urlencode($message);
        header("Location: krs.php?message={$message}");
    } else {
        $message = "Data gagal diubah";
        $message = urlencode($message);
        header("Location: update_krs.php?id={$id}&message={$message}");
    }
}
?>
