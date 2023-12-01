<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
</head>

<body>
    <h3><?php echo $judul; ?></h3>
    <a href="<?php echo base_url('basis') ?>">Data Basis</a>
    <a href="<?php echo base_url('mahasiswa/insert') ?>">Tambah data</a>
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
            <?php foreach ($mhs as $data) : ?>
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
                    <td><a href="<?= base_url('mahasiswa/update/' . $data->id); ?>">UPDATE</a>&nbsp;&nbsp;&nbsp;
                        <a href="<?= base_url('mahasiswa/delete/' . $data->id); ?>">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br><br>
    <h3>Hasil Normalisasi & Hasil Akhir Prediksi Masa Studi</h3>
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
                <td>Hasil Cosine Tertinggi</td>
                <td>Rekomendasi Seperti</td>
                <td>Prediksi Masa Studi</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mhs as $data) : ?>
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
                    <td> <?php
                            $i = 0;
                            // Inisialisasi sigma dan x2, y2
                            $sigma = 0;
                            $x2 = 0;
                            $y2 = 0;


                            // Menyimpan hasil cosine similarity untuk setiap basis kasus
                            $cosine_similarity_results = [];
                            $max_cosine_similarity = 0;
                            foreach ($basis_kasus as $index => $basis) {
                                // Reset variables for each iteration
                                $sigma = 0;
                                $x2 = 0;
                                $y2 = 0;

                                // Iterate over each element in $basis (excluding the first element)
                                for ($i = 1; $i <= 8; $i++) {
                                    // Assuming $data has properties like n1, n2, ..., n8
                                    $data_property = "n" . $i;
                                    $data_basis = "n" . $i;
                                    $sigma += ($data->$data_property * $basis->$data_basis);
                                    $x2 += pow($data->$data_property, 2);
                                    $y2 += pow($basis->$data_basis, 2);
                                }
                                $cosine_similarity = $sigma / (sqrt($x2) * sqrt($y2));
                                $cosine_similarity_results[$index] = $cosine_similarity;

                                if ($cosine_similarity_results[$index] >= $max_cosine_similarity) {
                                    $max_cosine_similarity = $cosine_similarity_results[$index];
                                    $saved_index = $index;
                                }
                            }
                            // $max_cosine_similarity = max($cosine_similarity_results);
                            // $index_of_max_cosine_similarity = array_keys($cosine_similarity_results, $max_cosine_similarity)[0];
                            $selected_basis_kasus = $basis_kasus[$saved_index];
                            // Menampilkan hasil cosine similarity untuk setiap basis kasus
                            echo  $max_cosine_similarity;
                            ?>
                    </td>
                    <td><?php echo 'Mahasiswa '. ($saved_index+1) ?></td>
                    <td><?php echo $selected_basis_kasus->masa_studi.' Semester' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>