


<?php
include 'database.php';
  if (isset($_POST['iesniegt'])){
    $virs = $_POST['virs'];
    $apr = $_POST['apr'];

    $sql = "INSERT INTO info (virsraksts, apraksts) VALUES ('$virs', '$apr')";
    $conn->query($sql);
  }

$conn->close();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <title></title>
  </head>
  <body>
    <script src="funkc.js"></script>
      <div class="header">
        <h1>Daramo darbus saraksts</h1>
      </div>

      <form method="POST" action="add.php">
          <h3>virsraksts:</h3>
        <input type="text" name="virs" id="virs" class="uzd_inp">
          <h3>apraksts:</h3>
        <input type="text" name="apr" id="apr" class="uzd_inp">

        <button type="submit" class="uzd_btn" name="iesniegt">Pievienot</button>
        <a href="index.php">Atpakal</a>
      </form>
  </body>
</html>
