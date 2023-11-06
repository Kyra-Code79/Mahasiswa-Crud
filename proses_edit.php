<?php
include 'koneksi.php';

function uploadImage($fieldName, $targetDirectory)
{
    if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] === 0) {
        $imageData = file_get_contents($_FILES[$fieldName]['tmp_name']);
        $base64Image = base64_encode($imageData);
        return $base64Image;
    } else {
        return false;
    }
}

$targetDirectory = 'C:\xampp\htdocs\Polmed\Semester3\WebLanjut\Week9\uploads\\';

$photo = uploadImage('photo', $targetDirectory);

if ($photo) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jk = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
    $tmpt = mysqli_real_escape_string($conn, $_POST['tempat_lahir']);
    $tgl = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $agama = mysqli_real_escape_string($conn, $_POST['agama']);
    $anakke = mysqli_real_escape_string($conn, $_POST['anak_ke']);
    $saudara = mysqli_real_escape_string($conn, $_POST['saudara']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['telephone']);
    $ortu1 = mysqli_real_escape_string($conn, $_POST['nama_ayah']);
    $ortu2 = mysqli_real_escape_string($conn, $_POST['nama_ibu']);
    $kerja1 = mysqli_real_escape_string($conn, $_POST['pekerjaan_ayah']);
    $kerja2 = mysqli_real_escape_string($conn, $_POST['pekerjaan_ibu']);
    $motto = mysqli_real_escape_string($conn, $_POST['motto']);

    $query = "UPDATE biodata SET nama='$nama', jenis_kelamin='$jk', tempat_lahir='$tmpt', tanggal_lahir='$tgl',
    agama='$agama', anak_ke='$anakke', saudara='$saudara', alamat='$alamat', no_hp='$no_hp', 
    nama_ayah='$ortu1', nama_ibu='$ortu2', pekerjaan_ayah='$kerja1', pekerjaan_ibu='$kerja2', motto='$motto', photo='$photo'
    WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Berhasil Update')</script>";
        include('read.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Image upload failed.";
}

mysqli_close($conn);
