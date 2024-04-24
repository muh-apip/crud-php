<?php
include 'koneksi.php';
if (isset($_POST['add'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama = $_POST['nama'];
    $jumlah_sks = $_POST['jumlah_sks'];

    $query = "INSERT INTO matakuliah (kode_mk, nama, jumlah_sks) VALUES ('$kode_mk', '$nama', '$jumlah_sks')";
    
    if (mysqli_query($koneksi, $query)) {
        $message = "Data berhasil ditambahkan";
        $message = urlencode($message);
        header("Location:matakuliah.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan";
        $message = urlencode($message);
        header("Location:add_matakuliah.php?message={$message}");
    }
}
?>
