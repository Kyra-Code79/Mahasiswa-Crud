<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
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
    <form method="post" action="registrasi.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td colspan="3">
                    <h2>Form Data Diri</h2>
                </td>
            </tr>
            <tr>
                <td><b>Nama Lengkap</b></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" size="40" required></td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin</b></td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <td><b>Tempat Lahir</b></td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" id="tempat_lahir" size="30" required></td>
            </tr>
            <tr>
                <td><b>Tanggal Lahir</b></td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" size="30"></td>
            </tr>
            <tr>
                <td><b>Agama</b></td>
                <td>:</td>
                <td>
                    <input type="radio" name="agama" value="Islam" required> Islam
                    <input type="radio" name="agama" value="Katolik" required> Katolik
                    <input type="radio" name="agama" value="Protestan" required> Protestan
                    <input type="radio" name="agama" value="Hindu" required> Hindu
                    <input type="radio" name="agama" value="Buddha" required> Buddha
                    <input type="radio" name="agama" value="Konghucu" required> Konghucu
                </td>
            </tr>
            <tr>
                <td><b>Anak Ke</b></td>
                <td>:</td>
                <td><input type="text" name="anak_ke" size="5" required><b>dari :</b> <input type="text" name="saudara" size="5" required><b>Bersaudara</b></td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="5" required></textarea></td>
            </tr>
            <tr>
                <td><b>Telepon/HP</b></td>
                <td>:</td>
                <td><input type="number" name="telephone" id="telephone" required></td>
            </tr>
            <tr>
                <td><b>Nama Ayah</b></td>
                <td>:</td>
                <td><input type="text" name="nama_ayah" id="nama_ayah" size="40" required></td>
            </tr>
            <tr>
                <td><b>Nama Ibu</b></td>
                <td>:</td>
                <td><input type="text" name="nama_ibu" id="nama_ibu" size="40" required></td>
            </tr>
            <tr>
                <td><b>Pekerjaan Ayah</b></td>
                <td>:</td>
                <td><input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" size="40" required></td>
            </tr>
            <tr>
                <td><b>Pekerjaan Ibu</b></td>
                <td>:</td>
                <td><input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" size="40" required></td>
            </tr>
            <tr>
                <td><b>Motto Hidup</b></td>
                <td>:</td>
                <td><textarea name="motto" id="motto" cols="30" rows="2" required></textarea></td>
            </tr>
            <tr>
                <td><b>Photo</b></td>
                <td>:</td>
                <td><input type="file" name="photo" id="photo"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="Proses" value="Simpan">
                    <input type="reset" value="Reset">
                    <button type="button"><a href="read.php">Data Mahasiswa</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>