<?php 
$sql2=mysqli_query($conn,"select * from teacher");
while($row=mysqli_fetch_array($sql2)){
$teachid=$row['u_id'];
$service=$row['service'];
$doc=$row['dateofocp'];
$today=$row['To_day'];
$newser=abs(strtotime($today)-strtotime($doc));
$upd_time=mysqli_query($conn,"UPDATE teacher SET To_day=NOW()");
$sql4=mysqli_query($conn,"UPDATE teacher SET service='$newser' where u_id='$teachid'");
}
?>