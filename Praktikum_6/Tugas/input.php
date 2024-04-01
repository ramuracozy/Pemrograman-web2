<?php
include 'connect.php';

if (isset($_POST['submit'])) {
$platNomor = $_POST['Plat_Nomor'];
$jenisKendaraan = $_POST['Jenis_Kendaraan'];
$merkKendaraan = $_POST['Merk_Kendaraan'];
$namaSeriKendaraan = $_POST['Nama_Seri_Kendaraan'];
$warnaKendaraan = $_POST['Warna_Kendaraan'];

$sql = "INSERT INTO `dataparkir`(Plat_Nomor, Jenis_Kendaraaan, Merk_Kendaraan, Nama_Seri_Kendaraan, Warna_Kendaraan)
VALUES ('$platNomor','$jenisKendaraan', '$merkKendaraan', '$namaSeriKendaraan','$warnaKendaraan') ";

$result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
      <div class="text-center mb-4">
         <h3>Data Parkir</h3>
         <p class="text-muted">Complete the form below to add a new parking</p>
      </div>

      <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="mb-3">
        <label class="form-label">Plat Nomor</label>
        <input type="text" class="form-control" name="Plat_Nomor" placeholder="Input Plat Nomor">
        </div>
        <div class="mb-3">
        <label class="form-label">Jenis Kendaraan</label>
        <input type="text" class="form-control" name="Jenis_Kendaraan" placeholder="Input Jenis Kendaraan">
        </div>
        <div class="mb-3">
        <label class="form-label">Merk Kendaraan</label>
        <input type="text" class="form-control" name="Merk_Kendaraan" placeholder="Input Merk Kendaraan">
        </div>
        <div class="mb-3">
        <label class="form-label">Nama Seri Kendaraan</label>
        <input type="text" class="form-control" name="Nama_Seri_Kendaraan" placeholder="Input Nama Seri Kendaraan">
        </div>
        <div class="mb-3">
        <label class="form-label">Warna kendaraan</label>
        <input type="text" class="form-control" name="Warna_Kendaraan" placeholder="Input Warna Kendaraan">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-dark me-3" name="submit">Simpan</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
         </form>
      </div>
   </div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</body>
</html>