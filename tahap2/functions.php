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

	$gambar =
	$judul 	= htmlspecialchars($data["judul"]);
	$studio = htmlspecialchars($data["studio"]);
	$genre 	= htmlspecialchars($data["genre"]);

	$query 	= "INSERT INTO anime VALUES('','$gambar','$judul','$studio','$genre')";
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

	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$studio = htmlspecialchars($data["studio"]);
	$genre = htmlspecialchars($data["genre"]);

	$query = "UPDATE anime SET 
						judul = '$judul', 
						studio = '$studio', 
						genre = '$genre'
						WHERE id = '$id'";
	mysqli_query($conn, $query);

	echo mysqli_errno($conn);

	return mysqli_affected_rows($conn);
}


?>