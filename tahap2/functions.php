<?php 
$conn = mysqli_connect("localhost", "root", "", "project");

function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows 	= [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function add($data) {
	global $conn;

	$gambar = upload();
	if ( !$gambar ){
		return false;
	}
	$judul 	= htmlspecialchars($data["judul"]);
	$studio = htmlspecialchars($data["studio"]);
	$genre 	= htmlspecialchars($data["genre"]);

	$query 	= "INSERT INTO anime VALUES('','$judul','$studio','$genre','$gambar')";
	mysqli_query($conn, $query);

	echo mysqli_errno($conn);

	return mysqli_affected_rows($conn);
}

function delete($id) {
	global $conn;

	$query = "DELETE FROM anime WHERE id = $id";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function update($data) {
	global $conn;

	$id 				= $data["id"];
	$judul 			= htmlspecialchars($data["judul"]);
	$studio 		= htmlspecialchars($data["studio"]);
	$genre 			= htmlspecialchars($data["genre"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	if ( $_FILES["gambar"]["error"] === 4 ){
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE anime SET 
						judul = '$judul', 
						studio = '$studio', 
						genre = '$genre',
						gambar = '$gambar'
						WHERE id = '$id'";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){
	$namaFile 	= $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error 			= $_FILES['gambar']['error'];
	$tmpName 		= $_FILES['gambar']['tmp_name'];

	if ( $error === 4 ){
		echo "<script>
						alert('Choose an image first!');
					</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
		echo "<script>
						alert('You're not inserted an image!');
					</script>";
		return false;
	}

	if ( $ukuranFile > 1000000 ){
		echo "<script>
						alert('Maximum size is 1Mb!');
					</script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru.= '.';
	$namaFileBaru.= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

	return $namaFileBaru;

}


?>