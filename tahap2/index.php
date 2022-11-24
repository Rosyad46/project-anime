<?php 
require 'functions.php';

$anime = query("SELECT * FROM anime");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Anime</title>
</head>
<body>
  <h2>Daftar Anime</h2>

  <a href="add.php">Add</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Image</th>
      <th>Title</th>
      <th>Studio</th>
      <th>Genre</th>
      <th>Action</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach ($anime as $anm): ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/Kakashi.jpg" width="100"></td>
      <td><?= $anm["judul"]; ?></td>
      <td><?= $anm["studio"]; ?></td>
      <td><?= $anm["genre"]; ?></td>
      <td colspan="2">
        <a href="">Update</a>
        <a href="delete.php?id=<?= $anm["id"]; ?>" onclick="return confirm('Are you sure want delete this data?')">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>  
</body>
</html>
