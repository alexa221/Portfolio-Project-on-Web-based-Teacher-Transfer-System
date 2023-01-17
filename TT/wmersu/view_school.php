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
	$del_sql=mysqli_query($conn,"DELETE FROM school WHERE sid=$id");
	if($del_sql)
		echo "school has been Deleted... !";
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
<table width="799px" border="0">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>View school</b></td>
        <td>
        <a href="?tag=school_entry"><input type="button" title="Add new school" name="butAdd" value="Add New" id="button-search" /></a>
        </td>
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

    <table border="1" width="950px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>No</th>
			<th>School ID</th>
            <th>School Name</th>
            <th>School level</th>            
            <th>Woreda Code</th>
            <th>Rank</th>
            <th>Date Added</th>
             <th >Operation</th>
        </tr>
       <?php
$user=mysqli_query($conn,"SELECT * FROM user where u_id='$id_session'");
 $i=0;
$row1=mysqli_fetch_array($user);
$id=$row1['u_id'];
$wcode=$row1['wcode'];
$sql2=mysqli_query($conn,"select * from school where wcode='$wcode'");
while($row=mysqli_fetch_array($sql2)){
$schid=$row['sid'];
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['sid'];?></td>
            <td><?php echo $row['sname'];?></td>
            <td><?php echo $row['slevel'];?></td>
            <td><?php echo $row['wcode'];?></td>
            <td><?php echo $row['rank'];?></td>
            <td><?php echo date("M d, Y ",strtotime($row['date'])); ?></span></td>
            <td><a href="?tag=school_entry&opr=upd&rs_id=<?php echo $row['sid'];?>" title="Update"><img src="picture/update.png" /></a></td>
            <!--<td><a href="?tag=view_school&opr=del&rs_id=<?php echo $row['sid'];?>" title="Delete"><img src="picture/delete.png" /></a></td>-->
             
        </tr>
    <?php	
    }
    ?>
    </table>
</form>
</div>
</body>
</html>