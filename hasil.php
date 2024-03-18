
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Document</title>
</head>
<body>
    <h2>Data Hasil!<h/2>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>:</td>
            <td><?php echo $_POST['nim']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['tglLahir']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_POST['jk']; ?></td>
        </tr>
        <tr>
            <td>Foto Profil</td>
            <td>:</td>
            <td><img src="<?php echo $_POST['foto']; ?>" alt="" width="150px" height="150px"></td>
        </tr>
        <tr>
            <td>Angkatan Mahasiswa</td>
            <td>:</td>
            <td><?php echo $_POST['angkatan_mahasiswa']; ?></td>
        </tr>
    </table>
</body>
</html>
