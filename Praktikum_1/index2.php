<?php


    $title = 'Data Mahasiswa';

    $nama = 'Raka';
    $jurusan = 'Teknik Informatika';
    $rombel = 'TI01';

    $mahasiswa = array(
        array(
            'nama' => 'John Doe',
            'jurusan' => 'Teknik Informatika',
            'rombel' => 'TI01'
        ),
        array(
            'nama' => 'Jane Doe',
            'jurusan' => 'Sistem Informasi',
            'rombel' => 'SI02'
        ),
        array(
            'nama' => 'Alice Smith',
            'jurusan' => 'Teknik Komputer',
            'rombel' => 'TK03'
        ),
        array(
            'nama' => 'Bob Johnson',
            'jurusan' => 'Manajemen Informatika',
            'rombel' => 'MI04'
        ),
        array(
            'nama' => 'Eva Green',
            'jurusan' => 'Sistem Informasi',
            'rombel' => 'SI05'
      )
    );



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center"><?php echo $title?></h1>
    <table style="width: 50%" border="1">
        <body>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>Jurusan</td>
                <td>Rombel</td>
            </tr>

            <?php foreach($mahasiswa as $mhs):?>

            <tr>
                <td> <?php echo $mhs['nama']?> </td>
                <td> <?php echo $mhs['jurusan']?> </td>
                <td> <?php echo $mhs['rombel']?> </td>
            </tr>

            <?php endforeach ; ?>
        </body>
    </table>
</body>
</html>