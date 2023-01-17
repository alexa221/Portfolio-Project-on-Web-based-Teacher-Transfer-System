<!--for delete Record -->
<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM transfer_form WHERE trid=$id");
	if($del_sql)
		echo "<h3 style='color:#e01f3c'>transfer_form has been Deleted... !</h3>";
	else
		$msg="Could not Delete :".mysql_error();	

}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>teacher transfer system</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>
<style>
#assign{
	margin-left:150px;
}

</style>
<body>
<div id="style_div" >
<form method="post">
	<table border="0" cellspacing="14px" id="assign">
	<tr>
	<td style="width:400px" ><b>view all archive fill form</b>
</td>
	</tr>
	</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
		    <th>No</th>
			<th>tech_id</th>
			<th>First name</th>
			<th>Last Name</th>
			<th>Date of occu</th>
			<th>major</th>
			<th>wcode</th>
			<th>service</th>
			<th>first</th>
			<th>second</th>
             </tr>
        <?php
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id'];
$user=mysqli_query($conn,"SELECT * FROM user where u_id='$u_id'");
 $i=0;
$row1=mysqli_fetch_array($user);
//$id=$row1['u_id'];
//$wcode=$row1['wcode'];
$sql2=mysqli_query($conn,"select * from archive_transfer_form order BY service DESC ");
while($row=mysqli_fetch_array($sql2)){	
//$tid=$row['wtrid'];
//$w=$row['wcode'];
//$first=$row['first_choice'];
//$sql1=mysqli_query($conn,"select * from woreda where wcode='$w'");
//$row2=mysqli_fetch_array($sql1);
//$woreda=$row2['wname'];

 $i++;
 $color=($i%2==0)?"lightblue":"white";
    ?>
        <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['wtrid'];?></td>
			<td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['dateofocp'];?></td>
            <td><?php echo $row['major'];?></td>
            <td><?php echo $row['wcode']?></td>
             <td><?php echo floor(($row['service'])/(365*60*60*24)).".".floor((($row['service'])-floor(($row['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24)).".".floor(( ($row['service'])-floor((($row['service'])/(365*60*60*24)))*365*60*60*24-floor((($row['service'])-floor(($row['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24))*30*60*60*24)/(60*60*24)); ?></span></td>
             <td><?php echo $row['first_choice'];?></td>
            <td><?php echo $row['second_choice'];?></td>
        </tr>
    <?php	
	
	}
    ?>
    </table>

</form>
</div>
</body>
</html>