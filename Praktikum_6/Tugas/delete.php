<?php
include "connect.php";
$id = $_GET["id"];
$query = "DELETE FROM `dataparkir` WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: index.php");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }