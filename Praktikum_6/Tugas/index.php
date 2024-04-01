<?php
    include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Parkir</title>
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #0F0F0F;">
    <h1 style="color: white;">Data Parkir</h1>
  </nav>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="input.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Plat Nomor</th>
          <th scope="col">Jenis Kendaraan</th>
          <th scope="col">Merk Kendaraan</th>
          <th scope="col">Nama Seri Kendaraan</th>
          <th scope="col">Warna Kendaraan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `dataparkir`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['Plat_Nomor'] ?> </td>
            <td> <?= $row['Jenis_Kendaraan'] ?> </td>
            <td> <?= $row['Merk_Kendaraan'] ?> </td>
            <td> <?= $row['Nama_Seri_Kendaraan'] ?> </td>
            <td> <?= $row['Warna_Kendaraan'] ?> </td>
            <td>
              <a href="edit.php?<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5"></i></a>
              <a href="delete.php<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
          <?php
          }
          ?>
      </tbody>
    </table>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>