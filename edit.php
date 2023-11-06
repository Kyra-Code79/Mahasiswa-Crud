<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
        }

        table {
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="file"] {
            width: 100%;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn, "select * from biodata where id = $id");
    while ($a = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="proses_edit.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="3">
                        <h2>Form Data Diri</h2>
                    </td>
                </tr>
                <tr>
                    <td><b>Nama Lengkap</b></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" size="40" value="<?php echo $a['nama']; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" <?php if ($a['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?> required> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php if ($a['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?> required> Perempuan
                    </td>
                </tr>
                <tr>
                    <td><b>Tempat Lahir</b></td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" id="tempat_lahir" size="30" value="<?php echo $a['tempat_lahir']; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" size="30" value="<?php echo $a['tanggal_lahir']; ?>"></td>
                </tr>
                <tr>
                    <td><b>Agama</b></td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="agama" value="Islam" <?php if ($a['agama'] == 'Islam') echo 'checked'; ?> required> Islam
                        <input type="radio" name="agama" value="Katolik" <?php if ($a['agama'] == 'Katolik') echo 'checked'; ?> required> Katolik
                        <input type="radio" name="agama" value="Protestan" <?php if ($a['agama'] == 'Protestan') echo 'checked'; ?> required> Protestan
                        <input type="radio" name="agama" value="Hindu" <?php if ($a['agama'] == 'Hindu') echo 'checked'; ?> required> Hindu
                        <input type="radio" name="agama" value="Buddha" <?php if ($a['agama'] == 'Buddha') echo 'checked'; ?> required> Buddha
                        <input type="radio" name="agama" value="Konghucu" <?php if ($a['agama'] == 'Konghucu') echo 'checked'; ?> required> Konghucu
                    </td>
                </tr>
                <tr>
                    <td><b>Anak Ke</b></td>
                    <td>:</td>
                    <td><input type="text" name="anak_ke" size="5" value="<?php echo $a['anak_ke']; ?>" required><b>dari :</b> <input type="text" name="saudara" size="5" value="<?php echo $a['saudara']; ?>" required><b>Bersaudara</b></td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>:</td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="5" required><?php echo $a['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td><b>Telepon/HP</b></td>
                    <td>:</td>
                    <td><input type="number" name="telephone" id="telephone" value="<?php echo $a['no_hp']; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Nama Ayah</b></td>
                    <td>:</td>
                    <td><input type="text" name="nama_ayah" id="nama_ayah" size="40" value="<?php echo $a['nama_ayah']; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Nama Ibu</b></td>
                    <td>:</td>
                    <td><input type="text" name="nama_ibu" id="nama_ibu" size="40" value="<?php echo $a['nama_ibu']; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Pekerjaan Ayah</b></td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" size="40" value="<?php echo $a['pekerjaan_ayah']; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Pekerjaan Ibu</b></td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" size="40" value="<?php echo $a['pekerjaan_ibu']; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Motto Hidup</b></td>
                    <td>:</td>
                    <td><textarea name="motto" id="motto" cols="30" rows="2" required><?php echo $a['motto']; ?></textarea></td>
                </tr>
                <tr>
                    <td><b>Photo</b></td>
                    <td>:</td>
                    <td>
                        <input type="file" name="photo" id="photo">
                        <?php
                        if (!empty($a['photo'])) {
                            echo '<img src="uploads/' . $a['photo'] . '" width="100" height="100" />';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="Proses" value="Update">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>