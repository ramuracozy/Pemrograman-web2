<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// Buat Total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas)/ 3;
$grade;
$predikat;
$status;

// buat perhitungan if else untuk mencari status kelulusan
if ($total_nilai >=70){
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}

// buat perhitungan if else untuk mencari grade
if ($total_nilai >= 85){
    $grade = "A";
}
elseif ($total_nilai >= 70){
    $grade = "B";
}
elseif ($total_nilai >= 56){
    $grade = "C";
}
elseif ($total_nilai >= 30){
    $grade = "D";
}
else {
    $grade = "E";
}

// buat perhitungan switch case untuk mencari predikat
switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
    default:
    $predikat = "Tidak Ada";
    break;
}


// hasil cetak hasil
echo "Nama: $nama <br>"; 
echo 'Matkul:' . $matkul .'<br>'; 
echo 'Nilai UTS:' . $nilai_uts .'<br>'; 
echo 'Nilai UAS:' . $nilai_uas .'<br>'; 
echo 'Nilai Tugas:' . $nilai_tugas . '<br>'; 
echo 'Grade:' . $grade . '<br>'; 
echo 'Predikat:' . $predikat . '<br>';
echo 'Status:' . $status; 




?>