<!DOCTYPE html>
<html>
<head>

<title>Anime Repo</title>
<style>
body {background-color: black; }
h1 { color:red; padding-left:10px }
h3 { color: white; padding-left:10px }
nav.horiz ul{margin: 0; padding:0; color: red}
nav.horiz ul li {float:left; padding: 5px 10px; list-style:none; text-align: bottom; font-size: 24px}
label {Color: white;}
table {color: white;}
genre {color: white;}

</style>
</head>

<body>
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
if( $page=="genre"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search2']));
	$sql = "UPDATE genre SET genre_name='$secsearch' WHERE genre_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}
elseif( $page=="studio"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search3']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search4']));
	$sql = "UPDATE studio SET studio_name='$secsearch' WHERE studio_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}
elseif( $page=="director"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search5']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search6']));
	$sql = "UPDATE director SET director_name='$secsearch' WHERE director_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}
elseif( $page=="stream"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search7']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search8']));
	$sql = "UPDATE stream SET stream_name='$secsearch' WHERE stream_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}
elseif( $page=="Name_ENG"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search9']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search10']));
	$sql = "UPDATE anime SET Name_ENG='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}

elseif( $page=="Name_JPN"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search11']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search12']));
	$sql = "UPDATE anime SET Name_JPN='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}
elseif( $page=="Maturity"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search13']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search14']));
	$sql = "UPDATE anime SET Maturity='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}
elseif( $page=="AirDate"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search15']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search16']));
	$sql = "UPDATE anime SET AirDate='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update.php");
}
// Close connection
mysqli_close($con);
?>
<nav class = "horiz" >
<ul>
	<li style = "font-size: 34px"><a onclick="based()">The Anime Repo:</a></li>
	<li style = "font-size: 34px"> Update Page</li>
</ul>
</nav>

<br>
<br>
<br>
<br>


 <nav id="update" style="display:block">
	<h3>Update Anime Database</h3>
	<form action = "update.php" method="post">
        
		<p>
			<label for = "anime_nameENG">Anime ID: </label>
			<input type="text" name="search9" id = "animeNameENG">
            <br>
            <br>
            <label for = "anime_nameENG_update">Updated Anime English Name: </label>
            <input type="text" name="search10" id = "animeNameENG_update">
		</p>
		
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_nameJAPN">Anime Japanese Name: </label>
			<input type="text" name="search11" id = "animeNameJAPN">
            <br>
            <br>
            <label for = "anime_nameJAPN_update"> Updadted Anime Japanese Name: </label>
            <input type="text" name="search12" id = "animeNameJAPN_update">
		</p>
		
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_director">Director Name: </label>
			<input type="text" name="search5" id = "animeDirector">
            <br>
            <br>
            <label for = "anime_director_update"> Updadted Director Name: </label>
            <input type="text" name="search6" id = "animeDirector_update">
		</p>
		
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_studio">Studio Name: </label>
			<input type="text" name="search3" id = "animeStudio">
            <br>
            <br>
            <label for = "anime_studio_update"> Updadted Studio Name: </label>
            <input type="text" name="search4" id = "animeStudio_update">
		
		</p>
		
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_stream">Streaming Service: </label>
			<input type="text" name="search7" id = "animeStream">
            <br>
            <br>
            <label for = "anime_stream_update"> Updadted Streaming Service: </label>
            <input type="text" name="search8" id = "animeStream_update">
		</p>
		
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_genre">Genre Style: </label>
			<input type="text" name="search1" id = "animeStream">
            <br>
            <br>
            <label for = "anime_genre_update"> Updadted Genre Style: </label>
            <input type="text" name="search2" id = "animeGenre_update">
		</p>
		
		<input type="submit" value="Submit">
	</form>
     <hr>
      <form action = "update.php" method="post">
		<p>
			<label for = "anime_maturity">Maturity ID: </label>
			<input type="text" name="search13" id = "animeMaturity">
            <br>
            <br>
            <label for = "anime_maturity_update"> Updadted Maturity Rating: </label>
            <input type="text" name="search14" id = "animeMaturity_update">
		</p>
		
		<input type="submit" value="Submit">
	</form>
     <hr>
      <form action = "update.php" method="post">
		<p>
			<label for = "anime_airDate">Air Date: </label>
			<input type="text" name="search15" id = "animeAirDate">
            <br>
            <br>
            <label for = "anime_airDate_update"> Updadted Air Date: </label>
            <input type="text" name="search16" id = "animeAirDate_update">
		</p>
		
		<input type="submit" value="Submit">
	</form>
     
</nav>

</body>
</html>