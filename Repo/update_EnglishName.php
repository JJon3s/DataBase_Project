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

<nav class = "horiz" >
<ul>
	<li style = "font-size: 34px"><a href="http://localhost/REPO/home_update.php">The Anime Repo</a></li>
	<li><a href="http://localhost/REPO/update_Maturity.php">Maturity</a></li>
	<li><a href="http://localhost/REPO/update_AirDate.php">Air Date</a></li>
	<li><a href="http://localhost/REPO/update_Director.php">Director</a></li>
	<li><a href="http://localhost/REPO/update_EnglishName.php">English Name</a></li>
	<li><a href="http://localhost/REPO/update_Genre.php">Genre</a></li>
	<li><a href="http://localhost/REPO/update_JapaneseName.php">Japanese Name</a></li>
	<li><a href="http://localhost/REPO/update_Stream.php">Stream</a></li>
	<li><a href="http://localhost/REPO/update_Studio.php">Studio</a></li>
</ul>
</nav>
<br><br><br>
<form action = "update.php" method="post">
		<p>
			<label for = "anime_director">Director ID: </label>
			<input type="text" name="search5" id = "animeDirector">
            <br>
            <br>
            <label for = "anime_director_update"> Updated Director Name: </label>
			
            <input type="text" name="search6" id = "animeDirector_update">
		</p>
		<input type="hidden" name="page" value="director">
		<input type="submit" value="Submit">
	</form>
</body>
</html>