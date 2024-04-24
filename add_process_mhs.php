<?php
include 'koneksi.php';
if (isset($_POST['add'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa (npm, nama, jurusan, alamat) VALUES ('$npm', '$nama', '$jurusan', '$alamat')";
    
    if (mysqli_query($koneksi, $query)) {
        $message = "Data berhasil ditambahkan";
        $message = urlencode($message);
        header("Location:mahasiswa.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan";
        $message = urlencode($message);
        header("Location:add_mhs.php?message={$message}");
    }
}
?>
