<!DOCTYPE html>
<html>
<head>

<title>Anime Repo</title>
<style>
body { background-color: black; color:white;}
h1 { color:red; padding-left:10px }
nav.horiz ul{margin: 0; padding:0; color: red}
nav.horiz ul li {float:left; padding: 5px 10px; list-style:none; text-align: bottom; font-size: 24px}
table, th, td {
    border: 1px solid white;
	color: white;
}
a { color: red;}
</style>
</head>

<body>
<nav class = "horiz" >
<ul>
	<li style = "font-size: 34px"><a href="http://localhost/REPO/home_insert.php">The Anime Repo</a></li>
	<li><a href="http://localhost/REPO/insert_genre.php">Genre</a></li>
	<li><a href="http://localhost/REPO/insert_studio.php">Studio</a></li>
	<li><a href="http://localhost/REPO/insert_director.php">Director</a></li>
	<li><a href="http://localhost/REPO/insert_stream.php">Stream</a></li>
	<li><a href="http://localhost/REPO/insert_anime.php">Anime</a></li>

</ul>
</nav>

<br><br><br><br>

<p> Add new anime</p>
	<form action = "insert.php" method="post">
		<p> <!-- English Name -->
			<label for = "anime_nameENG">Anime English Name: </label>
			<input type="text" name="anime_nameENG" id = "animeNameENG">
		</p>
		<p> <!-- Japanese Name -->
			<label for = "anime_nameJPN">Anime Japanese Name: </label>
			<input type="text" name="anime_nameJPN" id = "animeNameJPN">
		</p>
		
		
		<p><!-- Relesae Date -->
			<label for = "anime_date">Relesae Date: </label>
			<input type="date" name="anime_date" id = "animeDate">
		</p>
		
		<p><!-- Anime Studio ID -->
			<label for = "anime_studio_ID">Studio ID: </label>
			<input type="number" name="anime_studio_ID" id = "anime_studio">
		</p>
		
		<p><!-- Anime_Director_ID-->
			<label for = "anime_director_ID">Director ID: </label>
			<input type="number" name="anime_director_ID" id = "animeDirector">
		</p>
		
		<p><!--Anime Maturity -->
			<label for = "anime_maturity">Maturity: </label>
			<input type="text" name="anime_maturity" id = "animeMaturity">
		</p>
		
		<input type="hidden" name="page" value="anime">
		<input type="submit" value="Submit">
	</form>
	
	<nav> <!-- LINK STREAM AND ANIME -->
	<p> Assign Streaming Service to Anime</p>

	<form action="insert.php" method="post">
		<p><!--Streaming Service ID -->
		<label for = "stream_ID">Streaming Service ID:</label>
		<input type="number" name="stream_ID" id = "stream_ID">
		</p>
		
		<p><!--Anime ID -->
		<label for = "anime_ID">Anime ID:</label>
		<input type="number" name="anime_ID" id = "animeID">
		</p>
		<input type="hidden" name="page" value="anime_s">
		<input type = "submit" value= "Submit">
	</form>
	</nav>
	<nav><!-- LINK Genre AND ANIME -->
	
	<p> Assign Genre to Anime</p>

	<form action="insert.php" method="post">
		<p>
		<label for = "genre_id">Genre Name:</label>
		<input type="number" name="genre_id" id = "genreid">
		</p>
		
		<p>
		<label for = "anime_ID">Anime Name:</label>
		<input type="number" name="anime_ID" id = "anime_ID">
		</p>
		<input type="hidden" name="page" value="anime_g">
		<input type = "submit" value= "Submit">
	</form>
	
	</nav>


<nav id = "director">

<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="123abc";
$dbname="mydb";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


 
// Close connection
mysqli_close($con);
?>

</nav>

</body>
</html>
