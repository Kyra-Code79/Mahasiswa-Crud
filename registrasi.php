<?php
include 'koneksi.php';

function uploadImage($fieldName, $targetDirectory)
{
    if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] === 0) {
        $imageData = file_get_contents($_FILES[$fieldName]['tmp_name']);
        $base64Image = base64_encode($imageData);
        return $base64Image;
    } else {
        return false; // File upload error
    }
}

$targetDirectory = 'C:\xampp\htdocs\Polmed\Semester3\WebLanjut\Week9\uploads\\'; // For Windows

$photo = uploadImage('photo', $targetDirectory);

if ($photo) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jk = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
    $tmpt = mysqli_real_escape_string($conn, $_POST['tempat_lahir']);
    $tgl = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $agama = mysqli_real_escape_string($conn, $_POST['agama']);
    $anakke = mysqli_real_escape_string($conn, $_POST['anak_ke']);
    $saudara = mysqli_real_escape_string($conn, $_POST['saudara']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $telepon = mysqli_real_escape_string($conn, $_POST['telephone']);
    $ortu1 = mysqli_real_escape_string($conn, $_POST['nama_ayah']);
    $ortu2 = mysqli_real_escape_string($conn, $_POST['nama_ibu']);
    $kerja1 = mysqli_real_escape_string($conn, $_POST['pekerjaan_ayah']);
    $kerja2 = mysqli_real_escape_string($conn, $_POST['pekerjaan_ibu']);
    $motto = mysqli_real_escape_string($conn, $_POST['motto']);

    $query = "INSERT INTO biodata (nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, anak_ke, saudara, alamat, no_hp, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, motto, photo) 
    VALUES ('$nama', '$jk', '$tmpt', '$tgl', '$agama', '$anakke', '$saudara', '$alamat', '$telepon', '$ortu1', '$ortu2', '$kerja1', '$kerja2', '$motto', '$photo')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        include('read.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Image upload failed.";
}
mysqli_close($conn);
