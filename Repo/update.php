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
	header("location: update_DB.php");
}
elseif( $page=="studio"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search3']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search4']));
	$sql = "UPDATE studio SET studio_name='$secsearch' WHERE studio_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update_DB.php");
}
elseif( $page=="director"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search5']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search6']));
	$sql = "UPDATE director SET director_name='$secsearch' WHERE director_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update_DB.php");
}
elseif( $page=="stream"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search7']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search8']));
	$sql = "UPDATE stream SET stream_name='$secsearch' WHERE stream_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update_DB.php");
}
elseif( $page=="Name_ENG"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search9']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search10']));
	$sql = "UPDATE anime SET Name_ENG='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update_DB.php");
}

elseif( $page=="Name_JPN"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search11']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search12']));
	$sql = "UPDATE anime SET Name_JPN='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update_DB.php");
}
elseif( $page=="Maturity"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search13']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search14']));
	$sql = "UPDATE anime SET Maturity='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update_DB.php");
}
elseif( $page=="AirDate"){
	$name = mysqli_real_escape_string($con, $_REQUEST['search15']));
	$secsearch = mysqli_real_escape_string($con, $_REQUEST['search16']));
	$sql = "UPDATE anime SET AirDate='$secsearch' WHERE anime_id ='$name'";
		if(mysqli_query($con, $sql)){
        		echo "Records added successfully.";
    		}
	header("location: update_DB.php");
}
// Close connection
mysqli_close($con);
?>