<?php
$sql2=mysqli_query($conn,"select * from w_transfer_form");
$count=mysqli_num_rows($sql2);
 if($count==0)
{
echo"<b><i>aleredy archive!!!</i></b>";
}
else{
while($row=mysqli_fetch_array($sql2)){
$id=$row['wtrid'];
$date=$row['dateofocp'];
$fname=$row['Fname'];
$lname=$row['Lname'];
$major=$row['major'];
$woreda=$row['wcode'];
$service=$row['service'];
$first=$row['first_choice'];
$second=$row['second_choice'];
$ins_archive=mysqli_query($conn,"insert into  archive_transfer_form values(
                   NULL,
                  '$id',
				  '$fname',
				  '$lname',
				  '$date',
				  '$major',
				  '$woreda',
				  '$service',
				  '$first',
				  '$second'
				  )
                  ");
}
echo"<b><i>successfuly archive history </i></b>";
}	
$del_sql=mysqli_query($conn,"DELETE FROM w_transfer_form"); 
?>