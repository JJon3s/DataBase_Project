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
	<li><a href="http://localhost/REPO/update_DB.php">Update</a></li>
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
			<input type="hidden" name="page" value="Name_ENG">
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
            <label for = "anime_nameJAPN_update"> Updated Anime Japanese Name: </label>
			
            <input type="text" name="search12" id = "animeNameJAPN_update">
		</p>
		<input type="hidden" name="page" value="Name_JPN">
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_director">Director Name: </label>
			<input type="text" name="search5" id = "animeDirector">
            <br>
            <br>
            <label for = "anime_director_update"> Updated Director Name: </label>
			
            <input type="text" name="search6" id = "animeDirector_update">
		</p>
		<input type="hidden" name="page" value="director">
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_studio">Studio Name: </label>
			<input type="text" name="search3" id = "animeStudio">
            <br>
            <br>
            <label for = "anime_studio_update"> Updated Studio Name: </label>
			
            <input type="text" name="search4" id = "animeStudio_update">
		
		</p>
		<input type="hidden" name="page" value="studio">
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_stream">Streaming Service: </label>
			<input type="text" name="search7" id = "animeStream">
            <br>
            <br>
            <label for = "anime_stream_update"> Updated Streaming Service: </label>
			
            <input type="text" name="search8" id = "animeStream_update">
		</p>
		<input type="hidden" name="page" value="stream">
		<input type="submit" value="Submit">
	</form>
     <hr>
     <form action = "update.php" method="post">
		<p>
			<label for = "anime_genre">Genre Style: </label>
			<input type="text" name="search1" id = "animeStream">
            <br>
            <br>
            <label for = "anime_genre_update"> Updated Genre Style: </label>

            <input type="text" name="search2" id = "animeGenre_update">
		</p>
		<input type="hidden" name="page" value="genre">
		<input type="submit" value="Submit">
	</form>
     <hr>
      <form action = "update.php" method="post">
		<p>
			<label for = "anime_maturity">Maturity ID: </label>
			<input type="text" name="search13" id = "animeMaturity">
            <br>
            <br>
            <label for = "anime_maturity_update"> Updated Maturity Rating: </label>

            <input type="text" name="search14" id = "animeMaturity_update">
		</p>
		<input type="hidden" name="page" value="Maturity">
		<input type="submit" value="Submit">
	</form>
     <hr>
      <form action = "update.php" method="post">
		<p>
			<label for = "anime_airDate">Air Date: </label>
			<input type="text" name="search15" id = "animeAirDate">
            <br>
            <br>
            <label for = "anime_airDate_update"> Updated Air Date: </label>
            <input type="text" name="search16" id = "animeAirDate_update">
		</p>
		<input type="hidden" name="page" value="AirDate">
		<input type="submit" value="Submit">
	</form>
     
</nav>

</body>
</html>