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
<title>teacher transfer system</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
<link rel="stylesheet" type="text/css" href="font_teach/css/solid.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/brands.css">
</head>

<body>
    <style>
     #prof{
         font-size:22px;
         color:white;
        margin-left:60px;
        margin-top:0px;
        background-color:#3a98c5;
        border-radius:16px;
        height:390px;

     }   
</style>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:140px;"><b>your profile </b></td>

    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="0" width="420px" align="left" cellpadding="3" id="prof"  cellspacing="4">
        
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
$school=$row['sid'];
$sql6=mysqli_query($conn,"select * from school where sid='$school'");
$row6=mysqli_fetch_array($sql6);
$sname=$row6['sname'];
$sql2=mysqli_query($conn,"select * from woreda where wcode='$wcode'");
$row2=mysqli_fetch_array($sql2);
$mul=$row2['multiplayer'];
$woreda=$row2['wname'];
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

 ?>
 <tr>    
			<th style="text-align:right">First name</th>
            <td ><?php echo $row['Fname'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">Last Name</th>
            <td><?php echo $row['Lname'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">Age</th>
            <td><?php echo $row['age'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">Sex</th>
            <td><?php echo $row['sex'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">Date of occu</th>
            <td><?php echo $row['dateofocp'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">levelofedu</th>
            <td><?php echo $row['levelofedu'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">major</th>
            <td><?php echo $row['major'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">wcode</th>
            <td><?php echo $row2['wname'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">School</th>
            <td><?php echo $row6['sname'];?></td>
            </tr>
            <tr>
			<th style="text-align:right">service</th>
            <td><?php echo floor(($row['service'])/(365*60*60*24)).".".floor((($row['service'])-floor(($row['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24)).".".floor(( ($row['service'])-floor((($row['service'])/(365*60*60*24)))*365*60*60*24-floor((($row['service'])-floor(($row['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24))*30*60*60*24)/(60*60*24)); ?></span></td>
             </tr>
       
  
   <?php	
}

    ?>
    </table>
</form>
</div>
</body>
</html>