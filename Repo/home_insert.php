<!DOCTYPE html>
<html>
<head>

<title>Anime Repo</title>
<style>
body { background-color: black ;color:white;}
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


<nav id = "director">
<p style="color:red;font-size:24px">HOME[Insert]</p>
<p> To  log out and search entry's in the database click this <a href="http://localhost/REPO/home_search.php">LINK</a> </p>
<p> To insert new entry's click this <a href="http://localhost/REPO/home_insert.php">LINK</a></p>
<p> To delete new entry's  click this <a href="http://localhost/REPO/home_delete.php">LINK</a></p>
<p> To update entry's click this <a href="http://localhost/REPO/home_update.php">LINK</a> </p>


</nav>

</body>
</html>
