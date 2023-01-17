<?php
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id'];
$user=mysqli_query($conn,"SELECT * FROM user where u_id='$u_id'");
$row1=mysqli_fetch_array($user);
$id=$row1['u_id'];
$wcode=$row1['wcode'];
$sql2=mysqli_query($conn,"select * from transfer_form where wcode='$wcode'");
$count=mysqli_num_rows($sql2);
 if($count==0)
{
echo"<b><i>aleredy archive!!!</i></b>";
}
else{
while($row=mysqli_fetch_array($sql2)){
$id=$row['trid'];
$date=$row['dateofocp'];
$fname=$row['Fname'];
$lname=$row['Lname'];
$major=$row['major'];
$woreda=$row['wcode'];
$school=$row['sid'];
$service=$row['service'];
$first=$row['first_choice'];
$second=$row['second_choice'];
$third=$row['third_choice'];
$ins_archive=mysqli_query($conn,"insert into  archive_school_form values(
                   NULL,
                  '$id',
				  '$fname',
				  '$lname',
				  '$date',
				  '$major',
				  '$woreda',
				  '$school',
				  '$service',
				  '$first',
				  '$second',
				  '$third'
				  )
                  ");
}
echo"<b><i>successfuly archive history </i></b>";
}	
$del_sql=mysqli_query($conn,"DELETE FROM transfer_form where wcode='$wcode'"); 
?>