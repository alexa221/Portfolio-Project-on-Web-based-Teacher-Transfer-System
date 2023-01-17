<?php
$sql2=mysqli_query($conn,"select * from wtow_result");
$count=mysqli_num_rows($sql2);
 if($count==0)
{
echo"<b><i>aleredy archive!!!</i></b>";
}
else{
while($row=mysqli_fetch_array($sql2)){
$id=$row['RID'];
$woreda=$row['wcode'];
$fname=$row['Fname'];
$lname=$row['Lname'];
$major=$row['major'];
$trw=$row['T_woreda_id'];
$d=$row['date'];
$ins_archive=mysqli_query($conn,"insert into archive_result values(
                   NULL,
                  '$id',
				  '$woreda',
				  '$fname',
				  '$lname',
				  '$major',
				  '$trw',
				  '$d'
				  )
                  ");
}
echo"<b><i>successfuly archive history </i></b>";
}	
$del_sql=mysqli_query($conn,"DELETE FROM wtow_result"); 
?>