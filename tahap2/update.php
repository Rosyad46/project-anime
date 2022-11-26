<?php 
require 'functions.php';

$id = $_GET['id'];
$anm = query("SELECT * FROM anime WHERE id = '$id'")[0];

if ( isset($_POST['update']) ) {
  if (update($_POST) > 0) {
    echo "
     <script>
      alert('Updated Succed');
      document.location.href = 'index.php';
     </script>";
  } else {
    echo "
      <script>
        alert('Updated Failed');
        
      </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Anime</title>
</head>
<body>
  <h2>Update Anime</h2>

  <?php if ( isset($error) ): ?>
		<p style="color: red; font-style: italic;">Updated Failed!</p>
	<?php endif; ?>
  

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $anm['id']; ?>">


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
      <td><input type="text" name="judul" id="judul" required value="<?= $anm['judul']; ?>"></td>
      </label>
    </tr>
    <tr>
      <td><label for="studio">
      Studio</td>
      <td><input type="text" name="studio" id="studio" required value="<?= $anm['studio']; ?>"></td>
      </label>
    </tr>
    <tr>
      <td><label for="genre">
      Genre</td>
      <td><input type="text" name="genre" id="genre" required value="<?= $anm['genre']; ?>"></td>
      </label>
    </tr>
    <td></td>
    <td>
      <button type="submit" name="update">Update</button>
    </td>
  </form>
  </table>
  
</body>
</html>