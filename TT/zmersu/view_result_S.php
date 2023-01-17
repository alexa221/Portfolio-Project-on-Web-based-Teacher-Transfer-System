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
	$del_sql=mysqli_query($conn,"DELETE FROM transfer_form WHERE trid=$id");
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
            <th>Transfer ID</th>
			<th>school Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Major</th>
			<th>Trans_school</th>
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
$sql2=mysqli_query($conn,"select * from result");
while($row=mysqli_fetch_array($sql2)){
$tid=$row['RID'];
$sid=$row['T_School_id'];	
$school=mysqli_query($conn,"select * from school where sid='$sid'");
$row4=mysqli_fetch_array($school);
$sname=$row4['sname'];
 $i++;
 $color=($i%2==0)?"lightblue":"white";
    ?>
        <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['RID'];?></td>
			<td><?php echo $row['sid'];?></td>
            <td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['major'];?></td>
            <td><?php echo $sname;?></td>
        </tr>
    <?php	
	
	}
    ?>
    </table>
</form>
</div>
</body>
</html>