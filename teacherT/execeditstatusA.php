<?php
	include("conection/connect.php");
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE reservation SET status='$status' WHERE id='$roomid'");
	header("location:mainA.php?tag=view_reservationA");
?>