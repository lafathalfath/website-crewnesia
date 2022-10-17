<?php

include("config.php");



// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $domisili = $_POST['domisili'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $asal = $_POST['asal'];
    $jurusan = $_POST['jurusan'];
    $divisi = $_POST['divisi'];
    $cv = $_FILES['cv']['name'];

    $dir = "../cv/";
    $tmpFile = $_FILES['cv']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $cv);

    // buat query
    $sql = "INSERT INTO pendaftaran (nama, tmpt_lahir, tgl_lahir, jk, domisili, alamat, email, no_hp, asal, jurusan, divisi, cv) VALUE ('$nama', '$tmpt_lahir', '$tgl_lahir', '$jk', '$domisili', '$alamat', '$email', '$no_hp', '$asal', '$jurusan', '$divisi', '$cv')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: pendaftaranTim.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pendaftaranTim.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
