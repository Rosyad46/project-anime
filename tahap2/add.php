<?php 
require 'functions.php';

if ( isset($_POST["add"])) {
  if ( add($_POST) > 0) {
    header("Location: index.php");
  } else {
    $error = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Anime</title>
</head>
<body>
  <h2>Add Anime</h2>

  <?php if ( isset($error) ): ?>
		<p style="color: red; font-style: italic;">Add Failed!</p>
	<?php endif; ?>
  

  <form action="" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
      <td><label for="gambar">
      Image</td>
      <td><input type="file" name="gambar" id="gambar"></td>
      </label>
    </tr>
    <tr>
      <td><label for="judul">
      Title</td>
      <td><input type="text" name="judul" id="judul"></td>
      </label>
    </tr>
    <tr>
      <td><label for="studio">
      Studio</td>
      <td><input type="text" name="studio" id="studio"></td>
      </label>
    </tr>
    <tr>
      <td><label for="genre">
      Genre</td>
      <td><input type="text" name="genre" id="genre"></td>
      </label>
    </tr>
    <td></td>
    <td>
      <button type="submit" name="add">Add</button>
    </td>
  </form>
  </table>
  
</body>
</html>