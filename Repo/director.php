<!DOCTYPE html>
<html>
<head>

<title>Anime Repo</title>
<style>
body { background-color: black;color:white;}
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
<p style="color:red;font-size:24px">DIRECTOR'S</p>
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

$sql = "SELECT director.Director_Name, anime.Name_ENG FROM director JOIN anime WHERE anime.Director_ID =  director.Director_ID;";
$result = mysqli_query($con, $sql);

    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Director Name</th>";
                echo "<th>Anime name</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row["Director_Name"] . "</td>";
                echo "<td>" . $row["Name_ENG"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
  echo "0 results";
    }
 
// Close connection
mysqli_close($con);
?>

</nav>

</body>
</html>
