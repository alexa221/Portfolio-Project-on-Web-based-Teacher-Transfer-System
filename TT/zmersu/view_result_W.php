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
			<th>First Name</th>
			<th>Last Name</th>
			<th>Major</th>
			<th>Old Woreda</th>
			<th>Trans_woreda</th>
             </tr>
        <?php
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id'];
$user=mysqli_query($conn,"SELECT * FROM user where u_id='$u_id'");
 $i=0;
$row1=mysqli_fetch_array($user);
$id=$row1['u_id'];
$wcode=$row1['wcode'];
$sql2=mysqli_query($conn,"select * from wtow_result");
while($row=mysqli_fetch_array($sql2)){
$tid=$row['RID'];
$w=$row['wcode'];
$woreda=mysqli_query($conn,"select * from woreda where wcode='$w'");
$row6=mysqli_fetch_array($woreda);
//$wname=$row6['wname'];
 $i++;
 $color=($i%2==0)?"lightblue":"white";
    ?>
        <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['RID'];?></td>
            <td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['major'];?></td>
			<td><?php echo $row['wcode'];?></td>
            <td><?php echo $row['T_woreda_id'];?></td>
           <!-- <td><?php //echo date("M d, Y H:i:s",strtotime($row['date'])); ?></span></td>
            <td><a href="?tag=fill_transfer form&opr=upd&rs_id=<?php echo $row['trid'];?>" title="Update"><img src="picture/update.png" /></a></td>
            <td><a href="#?tag=fill_transfer form&opr=del&rs_id=<?php echo $row['trid'];?>" title="Assign">Assign</a></td>-->
        </tr>
    <?php	
	
	}
    ?>
    </table>
	<!--<table border="0" cellspacing="14px">
	<tr>
<td style="font-size:18px; color:#006; text-indent:160px">
<a href="?tag=Assign"style="color:#006;font-size:20px;border:3px dashed #FFFF00;background-color:#3a98c5; text-decoration:none;" >Start Transfer</a>
</td>
	</tr>
	</table>-->
</form>
</div>
</body>
</html>