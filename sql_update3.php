<? ob_start();?>

<?php
session_start();
require_once( "config.php" );
$main = new WConfig();

include 'condb.php';

$no = $_POST['no'];

$sql = "UPDATE `dor` SET `status` = '".$_POST['status']."' WHERE `dor`.`No` = $no;";


$result = mysqli_query($mysqli, $sql);

if ($result){
	header('Location: admintb3.php');
}
else {
	echo "error";
}
?>