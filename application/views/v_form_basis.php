<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judul ?></title>
</head>


<body>
    <h3>
        <?= $judul;  ?>
    </h3>
    <form method="post" action="<?php echo base_url('basis/insert') ?>">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NPM </td>
                <td>:</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>SKS 1 </td>
                <td>:</td>
                <td><input type="number" name="sks1"></td>
            </tr>
            <tr>
                <td>SKS 2 </td>
                <td>:</td>
                <td><input type="number" name="sks2"></td>
            </tr>
            <tr>
                <td>SKS 3 </td>
                <td>:</td>
                <td><input type="number" name="sks3"></td>
            </tr>
            <tr>
                <td>SKS 4 </td>
                <td>:</td>
                <td><input type="number" name="sks4"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 1 </td>
                <td>:</td>
                <td><input type="number" name="ipk1" step="0.01"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 2 </td>
                <td>:</td>
                <td><input type="number" name="ipk2" step="0.01"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 3 </td>
                <td>:</td>
                <td><input type="number" name="ipk3" step="0.01"></td>
            </tr>
            <tr>
                <td>IPK SEMESTER 4 </td>
                <td>:</td>
                <td><input type="number" name="ipk4" step="0.01"></td>
            </tr>
            <tr>
                <td>MASA STUDI </td>
                <td>:</td>
                <td><input type="number" name="masa_studi"></td>
            </tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

</html>