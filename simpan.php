<?php

include "conn.php.php";
if(isset($_POST['submit'])){

	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$image=$_POST['image'];
	$query = INSERT INTO data(nama,nim,gambar) VALUES ($nama, $nim, $gambar);
	$result=mysqli_query($query);


	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

}


?>