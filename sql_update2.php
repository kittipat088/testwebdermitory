<? ob_start();?>

<?php
session_start();
require_once( "config.php" );
$main = new WConfig();

include 'condb.php';

$no = $_POST['no'];

$sql = "UPDATE `dor3` SET `status` = '".$_POST['status']."' WHERE `dor3`.`No` = $no;";


$result = mysqli_query($mysqli, $sql);

if ($result){
	header('Location: admintb2.php');
}
else {
	echo "error";
}
?>