<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
</head>

<body>
    <h3><?php echo $judul; ?></h3>
    <a href="<?php echo base_url('mahasiswa') ?>">Data Mahasiswa</a>
    <a href="<?php echo base_url('basis/insert') ?>">Tambah data</a>
    <table border=" 1">
        <thead>
            <tr>
                <td>NO</td>
                <td>NAMA</td>
                <td>NPM</td>
                <td>SKS SMT 1</td>
                <td>SKS SMT 2</td>
                <td>SKS SMT 3</td>
                <td>SKS SMT 4</td>
                <td>IPS SMT 1</td>
                <td>IPS SMT 2</td>
                <td>IPS SMT 3</td>
                <td>IPS SMT 4</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($basis as $data) : ?>
                <tr>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->nama; ?></td>
                    <td><?php echo $data->npm; ?></td>
                    <td><?php echo $data->sks1; ?></td>
                    <td><?php echo $data->sks2; ?></td>
                    <td><?php echo $data->sks3; ?></td>
                    <td><?php echo $data->sks4; ?></td>
                    <td><?php echo $data->ipk1; ?></td>
                    <td><?php echo $data->ipk2; ?></td>
                    <td><?php echo $data->ipk3; ?></td>
                    <td><?php echo $data->ipk4; ?></td>
                    <td><a href="<?= base_url('basis/update/' . $data->id); ?>">UPDATE</a>&nbsp;&nbsp;&nbsp;
                        <a href="<?= base_url('basis/delete/' . $data->id); ?>">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br><br>
    <h3>
        Hasil Normalisasi
    </h3>
    <table border=" 1">
        <thead>
            <tr>
                <td>NO</td>
                <td>NAMA</td>
                <td>NPM</td>
                <td>SKS SMT 1</td>
                <td>SKS SMT 2</td>
                <td>SKS SMT 3</td>
                <td>SKS SMT 4</td>
                <td>IPS SMT 1</td>
                <td>IPS SMT 2</td>
                <td>IPS SMT 3</td>
                <td>IPS SMT 4</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($basis as $data) : ?>
                <tr>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->nama; ?></td>
                    <td><?php echo $data->npm; ?></td>
                    <td><?php echo $data->n1; ?></td>
                    <td><?php echo $data->n2; ?></td>
                    <td><?php echo $data->n3; ?></td>
                    <td><?php echo $data->n4; ?></td>
                    <td><?php echo $data->n5; ?></td>
                    <td><?php echo $data->n6; ?></td>
                    <td><?php echo $data->n7; ?></td>
                    <td><?php echo $data->n8; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>