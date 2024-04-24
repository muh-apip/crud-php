<?php
include 'koneksi.php';
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $mahasiswa_npm = $_POST['mahasiswa_npm'];
    $matakuliah_kodemk = $_POST['matakuliah_kodemk'];

    $query = "INSERT INTO krs (id, mahasiswa_npm, matakuliah_kodemk) VALUES ('$id', '$mahasiswa_npm', '$matakuliah_kodemk')";
    
    if (mysqli_query($koneksi, $query)) {
        $message = "Data berhasil ditambahkan";
        $message = urlencode($message);
        header("Location:krs.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan";
        $message = urlencode($message);
        header("Location:add_krs.php?message={$message}");
    }
}
?>
