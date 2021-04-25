<?php
$db_hostname = 'localhost';
$db_username = 'demo';
$db_password = 'demo';
$db_database = 'demo';

// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
if( $page=="genre"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search2']));
    $sql = "UPDATE genre SET genre_name='$secsearch' WHERE genre_id ='$name'";
	header("location: update_genre.php");

}
if( $page=="studio"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search3']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search4']));
    $sql = "UPDATE studio SET studio_name='$secsearch' WHERE studio_id ='$name'";
	header("location: update_studio.php");

}
if( $page=="director"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search5']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search6']));
    $sql = "UPDATE director SET director_name='$secsearch' WHERE director_id ='$name'";
	header("location: update_director.php");

}

if( $page=="stream"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search7']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search8']));
    $sql = "UPDATE stream SET stream_name='$secsearch' WHERE stream_id ='$name'";
	header("location: update_stream.php");

}
if( $page=="Name_ENG"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search9']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search10']));
    $sql = "UPDATE anime SET Name_ENG='$secsearch' WHERE anime_id ='$name'";
	header("location: update_anime.php");

}

if( $page=="Name_JPN"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search11']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search12']));
    $sql = "UPDATE anime SET Name_JPN='$secsearch' WHERE anime_id ='$name'";
	header("location: update_anime.php");

}
if( $page=="Maturity"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search13']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search14']));
    $sql = "UPDATE anime SET Maturity='$secsearch' WHERE anime_id ='$name'";
	header("location: update_anime.php");

}
if( $page=="AirDate"){
    $name = mysqli_real_escape_string($con, $_REQUEST['search15']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search16']));
    $sql = "UPDATE anime SET AirDate='$secsearch' WHERE anime_id ='$name'";
	header("location: update_anime.php");

}
?>
