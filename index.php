
<?php
  include 'database.php';
  $sql = "SELECT * FROM info";
  $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="header">
      <h1>Darāmo lietu saraksts</h1>
      <a href="add.php">pievienot jaunu</a>
    </div>
    <div id="fullitems">
      <?php foreach ($result as $r) { ?>
      <div class="id" data-id="<?=$r["id"]?>">
        <h3>Uzdevums:</h3>
        <div class="raksts"><?=$r["virsraksts"]?></div>
        <div class="raksts"><?=$r["apraksts"]?></div>
      </div>
      <?php } ?>
    </div>
  </body>
</html>
