<?php 
    $title = 'Praktikum 1 PHP' ;
    $nama = ' Raka';
    $umur = 20 ;
    $hobi = 'test' ;

// echo ' welcome' . $nama . ' dengan umur ' . $umur ;

    define('PHI', 3.14);
    $jari_jari = 8;
    $keliling = 2 * PHI * $jari_jari;
    $luas = PHI * $jari_jari * $jari_jari;

    // echo $keliling;
    // echo '<br>' . $jari_jari;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> <?php echo $title?> </h1>

    <p>Keliling Lingkaran : <?php echo $keliling?></p>
    <p>Luas Lingkaran: <?php echo $luas?></p>

</body>
</html>