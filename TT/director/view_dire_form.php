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

<body>
 <style type="text/css">
        a.disabled {
          pointer-events: none;
          cursor: default;
          opacity: .6;		
        }
    </style>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>View form</b></td>

        <td>
        	<input type="text" name="searchtxt" title="Enter school id for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search school" />
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
            <th>Teacher ID</th>
			<th>First name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Date of occu</th>
			<th>levelofedu</th>
			<th>major</th>
			<th>wcode</th>
			<th>sid</th>
			<th>service</th>
			<th>first</th>
			<th>second</th>
			<th>third</th>
             </tr>
        <?php
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id'];

$user=mysqli_query($conn,"select * from user where u_id='$u_id'");
$row3=mysqli_fetch_array($user);
if($row3)
$did=$row3['u_id'];
$woreda=$row3['wcode'];
 $i=0;
 
$school2=mysqli_query($conn,"select * from teacher where t_id='$did'");
$row4=mysqli_fetch_array($school2);
$id=$row4['wcode'];
$sch=$row4['sid'];
$school=mysqli_query($conn,"select * from school where sid='$sch'");
$row8=mysqli_fetch_array($school);
$sname=$row8['sname'];
$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	if($key !="")
$sql2=mysqli_query($conn,"select * from transfer_form where Fname like '%$key%'");
else
$sql2=mysqli_query($conn,"select * from transfer_form where sid='$sname'");
while($row=mysqli_fetch_array($sql2)){
$tid=$row['trid'];
 $i++;
 $color=($i%2==0)?"lightblue":"white";
    ?>
        <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['trid'];?></td>
			<td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['sex'];?></td>
            <td><?php echo $row['dateofocp'];?></td>
            <td><?php echo $row['levelofedu'];?></td>
            <td><?php echo $row['major'];?></td>
             <td><?php echo $row['wcode'];?></td>
             <td><?php echo $row['sid'];?></td>
             <td><?php echo floor(($row['service'])/(365*60*60*24)).".".floor((($row['service'])-floor(($row['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24)).".".floor(( ($row['service'])-floor((($row['service'])/(365*60*60*24)))*365*60*60*24-floor((($row['service'])-floor(($row['service'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24))*30*60*60*24)/(60*60*24)); ?></span></td>
             <td><?php echo $row['first_choice'];?></td>
            <td><?php echo $row['second_choice'];?></td>
            <td><?php echo $row['third_choice'];?></td>
        </tr>
    <?php	
	
	}
    ?>
    </table>
</form>
</div>
</body>
</html>