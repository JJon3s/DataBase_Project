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

//$con->close();

$page = mysqli_real_escape_string($con, $_REQUEST['page']);
if($page == "genre"){
	$genre = mysqli_real_escape_string($con, $_REQUEST['genre_name']);

	// Attempt insert query execution


	$sql = "INSERT INTO genre (genre_name) VALUE ('$genre')";


	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
	


	
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	
	}
	
	header("location: insert_genre.php");
}elseif($page == "studio"){
	
	$studio = mysqli_real_escape_string($con, $_REQUEST['studio_name']);

	// Attempt insert query execution


	$sql = "INSERT INTO studio (studio_name) VALUE ('$studio')";
	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
	


	
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	
	}
	
	header("location: insert_studio.php");

}elseif($page=="director"){
	$director = mysqli_real_escape_string($con, $_REQUEST['director_name']);

	// Attempt insert query execution


	$sql = "INSERT INTO director (director_name) VALUE ('$director')";
	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
	


	
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	
	}
	
	header("location: insert_director.php");
}elseif($page == "stream"){
	$stream = mysqli_real_escape_string($con, $_REQUEST['stream_name']);

	// Attempt insert query execution


	$sql = "INSERT INTO streaming_service (stream_name) VALUE ('$stream')";
	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
	


	}
	header("location: insert_stream.php");
	}elseif($page== "anime"){
		$nameENG = mysqli_real_escape_string($con, $_REQUEST['anime_nameENG']);
		$nameJPN = mysqli_real_escape_string($con, $_REQUEST['anime_nameJPN']);
		$Date = mysqli_real_escape_string($con, $_REQUEST['anime_date']);
		$Studio = mysqli_real_escape_string($con, $_REQUEST['anime_studio_ID']);
		$Director = mysqli_real_escape_string($con, $_REQUEST['anime_director_ID']);
		$Mature = mysqli_real_escape_string($con, $_REQUEST['anime_maturity']);
		
		$sql = "INSERT INTO anime (Name_ENG,AirDate,Name_JPN,Maturity,Director_ID,Studio_ID) VALUE ('$nameENG','$Date','$nameJPN','$Mature','$Director','$Studio')";
		if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
	


	}
	header("location: insert_anime.php");
	}elseif($page=="anime_s"){
		$Stream = mysqli_real_escape_string($con, $_REQUEST['stream_ID']);
		$anime = mysqli_real_escape_string($con, $_REQUEST['anime_ID']);
		
		$sql = "insert INTO anime_stream (Anime,Stream) value('$anime','$Stream')"
		if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
	


	}
	header("location: insert_anime.php");
		
	}elseif($page=="anime_g"){
		$genre = mysqli_real_escape_string($con, $_REQUEST['genre_ID']);
		$anime = mysqli_real_escape_string($con, $_REQUEST['anime_ID']);
		$sql = "insert INTO anime_genre(Anime,Genre) value('$anime','$genre')";
		header("location: insert_anime.php");
		
	}

	
	






 
// Close connection
mysqli_close($con);
?>