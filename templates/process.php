<?php

($connection = new mysqli("localhost", "root", "", "crud")) or
  die(mysqli_error($connection));

if (isset($_POST["submit"])) {
  $date = $_POST["date"];
  $amount = $_POST["amount"];
  $category = $_POST["category"];

  $insertSql = "INSERT INTO data(amount,category,created_at) VALUES('$amount','$category','$date')";
  if (mysqli_query($connection, $insertSql)) {
    header("Location: ../index.php");
  }
}

?>