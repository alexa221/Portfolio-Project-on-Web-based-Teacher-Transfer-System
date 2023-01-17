<?php 
session_start();
if (!isset($_SESSION['id'])){
header('location:../indexA.php');
}
$id_session=$_SESSION['id'];
?>