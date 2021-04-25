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
     
</nav>

</body>
</html>