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
	$del_sql=mysql_query("DELETE FROM schedule WHERE schedule_id=$id");
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
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>View teacher</b></td>
        <td>
        	<a href="?tag=schedule_entry"><input type="button" title="Add new schedule" name="butAdd" value="Add New" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="Enter destination_city for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Schedule" />
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
			<th>Director ID</th>
			<th>Name</th>
			<th>Woreda</th>	
            <th>School id</th>
			<th>Level_education</th>
            <th>Amharic	</th>            
            <th>English</th>
            <th>Biology</th>
            <th>Chemistry</th>
			<th>Physics</th>
			<th>ICT</th>
            <th colspan="2">Operation</th>
        </tr>
        
        <?php
	/*$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SELECT * FROM  request_table where sid  like '%$key%'");
	else*/
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
 $u_id=$r['u_id'];
$teacher=mysqli_query($conn,"SELECT * FROM teacher where u_id=$u_id");
while($row1=mysqli_fetch_array($teacher)){
$id=$row1['u_id'];
$fname=$row1['Fname'];
$wcode=$row1['wcode'];
 $school=$row1['sid'];
 $sql_sel=mysqli_query($conn,"SELECT * FROM request_table where sid='$school'");
    $i=0;
 $row=mysqli_fetch_array($sql_sel);
 $wcode=$row['wcode'];
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['Did'];?></td>
			<td><?php echo $fname;?></td>
			<td><?php echo $wcode;?></td>
            <td><?php echo $school;?></td>
			<td><?php echo $row['Level_education'];?></td>
            <td><?php echo $row['Amharic'];?></td>
            <td><?php echo $row['English'];?></td>
            <td><?php echo $row['Biology'];?></td>
			 <td><?php echo $row['Chemistry'];?></td>
			<td><?php echo $row['Physics'];?></td>
			<td><?php echo $row['ICT'];?></td>					
            <td><a href="?tag=send_request&opr=upd&rs_id=<?php echo $row['R_id'];?>" title="Update"><img src="picture/update.png" /></a></td>
            <td><a href="?tag=view_request&opr=del&rs_id=<?php echo $row['R_id'];?>" title="Delete"><img src="picture/delete.png" /></a></td>          
        </tr>
    <?php	
    }
		
	
    ?>
    </table>
</form>
</div>
</body>
</html>