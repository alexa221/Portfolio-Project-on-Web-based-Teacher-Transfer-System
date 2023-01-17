<?php 
require("conection/connect.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:../index.php');
}
$sql2=mysqli_query($conn,"select * from teacher");
while($row=mysqli_fetch_array($sql2)){
$teachid=$row['t_id'];
$service=$row['service'];
$doc=$row['dateofocp'];
$wcode=$row['wcode'];
$today=$row['To_day'];
$newser=abs(strtotime($today)-strtotime($doc));
$sql4=mysqli_query($conn,"select * from woreda where wcode='$wcode'");
$row2=mysqli_fetch_array($sql4);
$mul=$row2['multiplayer'];
$multi=30*60*60*24;
$multi_two=$multi*2;
$y=floor($newser/(365*60*60*24));
if($mul=='1.1')
{
$total=$y*$multi;
$finaleservice=$total+$newser;	
}
else if($mul=='1.2')
{
$total=$y*$multi_two;
$finaleservice=$total+$newser;	
}
else if($mul=='1')
{
$finaleservice=$newser;
}
$upd_time=mysqli_query($conn,"UPDATE teacher SET To_day=NOW()");
$sql4=mysqli_query($conn,"UPDATE teacher SET service='$newser' where t_id='$teachid'");
$sql6=mysqli_query($conn,"UPDATE transfer_form SET service='$newser' where trid='$teachid'");
$sql7=mysqli_query($conn,"UPDATE transfer_form SET sum_E='$finaleservice' where trid='$teachid'");
}
$id_session=$_SESSION['id'];
?>