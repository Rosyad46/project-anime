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

	return $conn;
}