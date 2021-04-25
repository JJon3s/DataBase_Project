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
	<li style = "font-size: 34px"><a href="http://localhost/REPO/home_search.php">The Anime Repo</a></li>
	<li><a href="http://localhost/REPO/genre.php">Genre</a></li>
	<li><a href="http://localhost/REPO/studio.php">Studio</a></li>
	<li><a href="http://localhost/REPO/director.php">Director</a></li>
	<li><a href="http://localhost/REPO/search.php">Search</a></li>
</ul>
</nav>

<br><br><br><br>


<nav id = "director">

<form method="GET">
<label>search</label>
<input type="text" name="search">
<input type="submit" name="submit">
</form> 
<br><br>
<p style="color:red;font-size:24px">ANIME</p>
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

if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT anime.Name_ENG, anime.Name_JPN, anime.AirDate, anime.Maturity,director.Director_Name,studio.studio_Name 
From anime JOIN Director Join Studio
Where anime.Director_ID = director.Director_ID
And anime.Studio_ID = studio.Studio_ID
And anime.Name_ENG ='$name'";
}
$result = $con->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>Anime ENG Name</th>";
                echo "<th>Anime JPN Name</th>";
				echo "<th>Release Date</th>";
				echo "<th>Maturity</th>";
				echo "<th>Director Name</th>";
				echo "<th>Studio Name</th>";
            echo "</tr>";
while($row = $result->fetch_assoc()){
 
    echo "<tr>";
    echo "<td>" . $row['Name_ENG'] . "</td>";
    echo "<td>" . $row['Name_JPN'] . "</td>";
	echo "<td>" . $row['AirDate'] . "</td>";
	echo "<td>" . $row['Maturity'] . "</td>";
	echo "<td>" . $row['Director_Name'] . "</td>";
	echo "<td>" . $row['studio_Name'] . "</td>";
    echo "</tr>";
echo "</table><br>";
  
}
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "select genre.genre_name
from anime_genre Join anime join genre
where anime.Anime_ID = anime_genre.anime
AND genre.Genre_ID = anime_genre.Genre
AND anime.Name_ENG ='$name'" ;
}
$result = $con->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>Genre's for this Anime</th>";
            echo "</tr>";
while($row = $result->fetch_assoc()){
 
    echo "<tr>";
    echo "<td>" . $row['genre_name'] . "</td>";
    echo "</tr>";
}
echo "</table><br>";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "select streaming_service.stream_name
from anime_stream Join anime join streaming_service
where anime.Anime_ID = anime_stream.anime
AND streaming_service.stream_ID = anime_stream.stream
AND anime.Name_ENG ='$name'";
}
$result = $con->query($sql);
        echo "<table>";
            echo "<tr>";
                echo "<th>Streamin Services for this Anime</th>";
            echo "</tr>";
while($row = $result->fetch_assoc()){

    echo "<tr>";
    echo "<td>" . $row['stream_name'] . "</td>";
	echo "</tr>";
}
    
echo "</table>";
 
// Close connection
mysqli_close($con);
?>



</nav>

</body>
</html>
