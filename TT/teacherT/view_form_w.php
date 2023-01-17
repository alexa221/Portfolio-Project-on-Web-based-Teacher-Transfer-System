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
	$del_sql=mysqli_query($conn,"DELETE FROM schedule WHERE schedule_id=$id");
	if($del_sql)
		echo "<h3 style='color:#e01f3c'>Schedule has been Deleted... !</h3>";
	else
		$msg="Could not Delete :".mysql_error();	

}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teacher transfer system</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:140px;"><b>View filled transfer form</b></td>
        <!--<td>
        	<a href="?tag=schedule_entry"><input type="button" title="Add new schedule" name="butAdd" value="Add New" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="Enter destination_city for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Schedule" />
        </td>-->
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>Teacher ID</th>
			<th>First name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Date of occu</th>
			<th>levelofedu</th>
			<th>major</th>
			<th>wcode</th>
			<th>service</th>
			<th>multiplayer</th>
			<th>Sum</th>
			<th>first</th>
			<th>second</th>
			<!--<th>Action</th>-->
             </tr>
       
<?php
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id'];
$teacher=mysqli_query($conn,"SELECT * FROM teacher where t_id=$u_id");
while($row=mysqli_fetch_array($teacher)){
$id=$row['t_id'];
$wcode=$row['wcode'];
$service=$row['service'];
$sql2=mysqli_query($conn,"select * from woreda where wcode='$wcode'");
$row2=mysqli_fetch_array($sql2);
$mul=$row2['multiplayer'];
$multi=30*60*60*24;
$multi_two=$multi*2;
$y=floor($service/(365*60*60*24));
if($mul=='1.1')
{
$total=$y*$multi;
$finaleservice=$total+$service;	
}
else if($mul=='1.2')
{
$total=$y*$multi_two;
$finaleservice=$total+$service;	
}
else if($mul=='1')
{
$finaleservice=$service;
}
$sql_sel=mysqli_query($conn,"SELECT * FROM  w_transfer_form where wtrid =$u_id");
$row3=mysqli_fetch_array($sql_sel);
$count=mysqli_num_rows($sql_sel);
if($count==0)
{
	echo"no fill form";
}
else{
//$userid=$row3['trid'];
//$finalservice=$row3['service'];
//$multiple=$row3['multiplayer'];
//$first=$row3['first_choice'];
//$second=$row3['second_choice'];
//$third=$row3['third_choice'];
 ?>
  <tr>
  <td><?php echo $row3['wtrid'];?></td> 
  <td><?php echo $row3['Fname'];?></td>
  <td><?php echo $row3['Lname'];?></td>
  <td><?php echo $row3['age'];?></td>
  <td><?php echo $row3['sex'];?></td>
  <td><?php echo $row3['dateofocp'];?></td>
  <td><?php echo $row3['levelofedu'];?></td>
  <td><?php echo $row3['major'];?></td>
  <td><?php echo $row3['wcode'];?></td>
  <td><?php echo floor(($row3['service'])/(365*60*60*24)).".".floor((($row3['service'])-floor(($row3['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24)).".".floor(( ($row3['service'])-floor((($row3['service'])/(365*60*60*24)))*365*60*60*24-floor((($row3['service'])-floor(($row3['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24))*30*60*60*24)/(60*60*24)); ?></span></td>
  <td><?php echo $row3['multiplayer'];?></td>
  <td><?php echo floor(($row3['sum_E'])/(365*60*60*24)).".".floor((($row3['sum_E'])-floor(($row3['sum_E'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24)).".".floor((($row3['sum_E'])-floor((($row3['sum_E'])/(365*60*60*24)))*365*60*60*24-floor((($row3['sum_E'])-floor(($row3['sum_E'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24))*30*60*60*24)/(60*60*24));?></td>
  <td><?php echo $row3['first_choice'];?></td>
  <td><?php echo $row3['second_choice'];?></td>
 <!--<td><a href="?tag=fill_transfer form&opr=upd&rs_id=<?php echo $row3['trid'];?>" title="Update"><img src="picture/update.png" /></a></td>-->
  </tr>
  <?php
}
?>
   <?php	
}
    ?>
    </table>
</form>
</div>
</body>
</html>