<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Identitas Dosen</title>
</head>
<body>
    <h2>Identitas Dosen</h2>
    <?php
        $Dosen = [
            'Nama' => 'Elok',
            'Domisili' => 'Malang',
            'Jenis Kelamin' => 'Perempuan'
        ];
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $Dosen['Nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td>:</td>
            <td><?= $Dosen['Domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $Dosen['Jenis Kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
