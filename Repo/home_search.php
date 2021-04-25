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
	<li style = "font-size: 34px"><a href="http://localhost/REPO/home_search.php">The Anime Repo</a></li>
	<li><a href="http://localhost/REPO/genre.php">Genre</a></li>
	<li><a href="http://localhost/REPO/studio.php">Studio</a></li>
	<li><a href="http://localhost/REPO/director.php">Director</a></li>
	<li><a href="http://localhost/REPO/search.php">Search</a></li>

</ul>
</nav>

<br><br><br><br>
<p style="color:red;font-size:24px">HOME[Search]</p>
<p> To Search entry's in the database click this <a href="http://localhost/REPO/home_search.php">LINK</a> </p>
<p> To insert new entry's click this <a href="http://localhost/REPO/home_insert.php">LINK</a></p>
<p> To delete new entry's  click this <a href="http://localhost/REPO/home_delete.php">LINK</a></p>
<p>To Update entry's click this <a href="http://localhost/REPO/home_update.php">LINK</a></p>
<p>Administrator login</p>
<nav id = "director">
<form  method="POST">
<p>
<label>UserName:</label>
<input type="text" name="admin">
</p>
<p>
<label>Password:</label>
<input type="text" name="pass">
</p>
<input type = "submit" value= "Submit">
</form>
</nav>
<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="123abc";
$dbname="mydb";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
	
 if (isset($_POST['login'])) {
        $username = $_POST['admin'];
        $password = $_POST['pass'];
        $query = $connection->prepare("SELECT * FROM admin WHERE Username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo "<p>Username password combination is wrong!</p>";
        } else {
            if (password_verify($password, $result['password'])) {
                
                echo "<p>Congratulations, you are logged in!</p>";
            } else {
                echo "<p>Username password combination is wrong!</p>";
			}
 }}
// Close connection
mysqli_close($con);
?>

</body>
</html>
