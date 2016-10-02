<?php 
session_start();
include 'DBconhandle.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

$sql =  "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);
	if (!$row = mysqli_fetch_assoc($result)) {
		header("location:gif.php");
		} else {
			$_SESSION['id']	= $row['id'];
		header("location:secret.php");	
		}	

		
?>

