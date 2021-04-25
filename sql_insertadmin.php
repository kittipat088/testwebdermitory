<? ob_start();?>

<?php
session_start();
require_once( "config.php" );
$main = new WConfig();

include 'condb.php';


$sql = "INSERT INTO `admin` (`No`, `title`, `adminname`, `adminlastname`, `username`, `password`) VALUES (NULL, '".$_POST['atitle']."', '".$_POST['aname']."', '".$_POST['alastname']."', '".$_POST['user']."', '".$_POST['pass']."');";

$result = mysqli_query($mysqli, $sql);


if ($result){
	header('Location: addadmin.php');
}
else {
	echo "error";
}

?>
