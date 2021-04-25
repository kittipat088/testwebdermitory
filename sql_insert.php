<? ob_start();?>

<?php
session_start();
require_once( "config.php" );
$main = new WConfig();

include 'condb.php';


$sql = "INSERT INTO `".$_POST['dor']."` (`No`, `title`, `name`, `lastname`, `studentid`, `class`, `room`, `object`, `detail`, `status`) VALUES (NULL, '".$_POST['stitle']."', '".$_POST['sname']."', '".$_POST['slastname']."', '".$_POST['sid']."', '".$_POST['class']."', '".$_POST['room']."', '".$_POST['object']."', '".$_POST['detail']."', '');";

$result = mysqli_query($mysqli, $sql);


if ($result){
	header('Location: index.php');
}
else {
	echo "error";
}

?>
