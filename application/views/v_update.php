<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul;  ?></title>
</head>


<body>
    <h3>
        <?= $judul;  ?>
    </h3>
    <form method="post" action="<?php echo base_url('mahasiswa/update/') ?>">
    
        <?php foreach ($mahasiswa as $mhs) : ?>
        <table>
            <tr>
                <td>NO </td>
                <td>:</td>
                <td><input type="text" name="id" value="<?=$mhs->id?> "readonly></td>
            </tr>
            <tr>
                <td>NAMA </td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$mhs->nama?>"></td>
            </tr>
            <tr>
                <td>NPM </td>
                <td>:</td>
                <td><input type="text" name="npm" value="<?=$mhs->npm?>"></td>
            </tr>
            <tr>
                <td>SKS SEMESTER 1 </td>
                <td>:</td>
                <td><input type="number" name="sks1" value="<?=$mhs->sks1?>"></td>
            </tr>
            <tr>
                <td>SKS SEMESTER 2 </td>
                <td>:</td>
                <td><input type="number" name="sks2" value="<?=$mhs->sks2?>"></td>
            </tr>
            <tr>
                <td>SKS SEMESTER 3 </td>
                <td>:</td>
                <td><input type="number" name="sks3" value="<?=$mhs->sks3?>"></td>
            </tr>
            <tr>
                <td>SKS SEMESTER 4 </td>
                <td>:</td>
                <td><input type="number" name="sks4" value="<?=$mhs->sks4?>"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 1 </td>
                <td>:</td>
                <td><input type="number" name="ipk1" step="0.01" value="<?=$mhs->ipk1?>"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 2 </td>
                <td>:</td>
                <td><input type="number" name="ipk2" step="0.01" value="<?=$mhs->ipk2?>"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 3 </td>
                <td>:</td>
                <td><input type="number" name="ipk3" step="0.01" value="<?=$mhs->ipk3?>"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 4 </td>
                <td>:</td>
                <td><input type="number" name="ipk4" step="0.01" value="<?=$mhs->ipk4?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="UPDATE"></td>
            </tr>
        </table>
        <?php endforeach; ?>
    </form>
</body>

</html>