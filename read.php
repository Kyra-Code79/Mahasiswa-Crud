<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Mahasiswa</title>
</head>

<body>
    <center>
        <h2>Daftar Nama Mahasiswa</h2>
        <button type="button"><a href="index.php">Tambah Mahasiswa</a></button>
    </center>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Tempat Lahir</td>
            <td>Tanggal Lahir</td>
            <td>Agama</td>
            <td>Anak Ke</td>
            <td>Saudara</td>
            <td>Alamat</td>
            <td>No HP</td>
            <td>Nama Ayah</td>
            <td>Nama Ibu</td>
            <td>Pekerjaan Ayah</td>
            <td>Pekerjaan Ibu</td>
            <td>Motto</td>
            <td>Photo</td>
            <td>Opsi</td>
        </tr>
        <?php
        $data = mysqli_query($conn, "Select * from biodata");
        while ($a = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $a['id'] ?></td>
                <td><?php echo $a['nama'] ?></td>
                <td><?php echo $a['jenis_kelamin'] ?></td>
                <td><?php echo $a['tempat_lahir'] ?></td>
                <td><?php echo $a['tanggal_lahir'] ?></td>
                <td><?php echo $a['agama'] ?></td>
                <td><?php echo $a['anak_ke'] ?></td>
                <td><?php echo $a['saudara'] ?></td>
                <td><?php echo $a['alamat'] ?></td>
                <td><?php echo $a['no_hp'] ?></td>
                <td><?php echo $a['nama_ayah'] ?></td>
                <td><?php echo $a['nama_ibu'] ?></td>
                <td><?php echo $a['pekerjaan_ayah'] ?></td>
                <td><?php echo $a['pekerjaan_ibu'] ?></td>
                <td><?php echo $a['motto'] ?></td>
                <td><?php echo "<img src='data:image/jpeg;base64," . $a['photo'] . "' width='50' height='50'>" ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $a['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $a['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>