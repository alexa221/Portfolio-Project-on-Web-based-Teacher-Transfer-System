<?php
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id'];
$user=mysqli_query($conn,"SELECT * FROM user where u_id='$u_id'");
$row1=mysqli_fetch_array($user);
$id=$row1['u_id'];
$wcode=$row1['wcode'];
$sql2=mysqli_query($conn,"select * from result where wcode='$wcode'");
$count=mysqli_num_rows($sql2);
 if($count==0)
{
echo"<b><i>aleredy archive!!!</i></b>";
}
else{
while($row=mysqli_fetch_array($sql2)){
$id=$row['RID'];
$school=$row['sid'];
$woreda=$row['wcode'];
$fname=$row['Fname'];
$lname=$row['Lname'];
$major=$row['major'];
$trw=$row['T_School_id'];
$ins_archive=mysqli_query($conn,"insert into archive_school_result values(
                   NULL,
                  '$id',
				  '$school',
				  '$woreda',
				  '$fname',
				  '$lname',
				  '$major',
				  '$trw'
				  )
                  ");
}
echo"<b><i>successfuly archive history </i></b>";
}	
$del_sql=mysqli_query($conn,"DELETE FROM result where wcode='$wcode'"); 
?>