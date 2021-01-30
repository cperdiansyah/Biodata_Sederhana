<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "uas");
// Upload File
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "assets/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
$foto = $dirUpload . $namaFile;

if (isset($_POST['nama'])) {
    $name = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $query_pengelola = $koneksi->query("INSERT INTO user(nama,alamat,foto) VALUES ('$name','$alamat','$foto')");
    header('Location: http://localhost/Biodata_Sederhana');
} else {
    echo "Ada Yang Salah, Silahkan cek kembali";
    header('Location: http://localhost/Biodata_Sederhana');
}
