<?php
ob_start();
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="123abc";
$dbname="mydb";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());


$stream = mysqli_real_escape_string($con, $_REQUEST['stream_ID']);
$anime = mysqli_real_escape_string($con, $_REQUEST['anime_ID']);

	// Attempt insert query execution


	$sql = "DELETE INTO anime_stream (Anime,Stream) VALUE ('$anime','$stream')";
	header("location: delete_stream.php");
	
	
// Close connection
mysqli_close($con);
?>