

<?php
$query3=mysqli_query($conn,"select * from user where status='Noaccount'");
while($row=mysqli_fetch_assoc($query3))
{
$id=$row["u_id"];
$fn=$row["fname"];
$ln=$row["lname"];
$role=$row["role"];
$username=$fn.'/'.$id;
$p=md5('mersu'.$ln.'123#');
$status="1";
$query2=mysqli_query($conn,"select * from user where status='Noaccount'");
$count = mysqli_num_rows($query2);
if ($count >= '1')
{
$query=mysqli_query($conn,"select * from user where u_id='$id'");
if($row1=mysqli_fetch_assoc($query))
	{
$uid=$row1["u_id"];
$sql1="INSERT INTO account VALUES('$uid','$username','$p','$role','$status')";
$result=mysqli_query($conn,$sql1)or die(mysql_error());
}
}
}
$query1=mysqli_query($conn,"UPDATE user SET status='Hasaccount' where status='Noaccount'");
   echo "<fz>account created successfully</fz>";
	echo'<meta content="2;main.php?C_account_entry.php" http-equiv="refresh" />';
