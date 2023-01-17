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
<style>
        a.disabled {
          pointer-events: none;
          cursor: default;
          opacity: .6;		
        }
</style>
<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>Teacher that found your woreda</b></td>
    </tr>
</table>
</form>
</div>
<br/>
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
			<th>Assign</th>
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
$wo=$row1['wcode'];
$woreda=mysqli_query($conn,"select * from woreda where wcode='$wo'");
$row6=mysqli_fetch_array($woreda);
$wname=$row6['wname'];
$sql2=mysqli_query($conn,"select * from wtow_result where T_woreda_id='$wname' and status='noschool'");
while($row=mysqli_fetch_array($sql2)){
$tid=$row['RID'];
$w=$row['wcode'];

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
            <td>
				<?php 
			  $newsch=mysqli_query($conn,"SELECT * FROM result where wcode='$wcode'");
               $count=mysqli_num_rows($newsch);
			   if($count==0){
			?>
			<a href="?tag=assignto_school&opr=upd&rs_id=<?php echo $row['RID'];?>" class="disabled" title="Assign">Assign</a>
			<?php
			   }
			   else{
				   ?>
				<a href="?tag=assignto_school&opr=upd&rs_id=<?php echo $row['RID'];?>" title="Assign">Assign</a>  
                 <?php
			   }
               ?>			   
			</td>
        </tr>
    <?php	
	
	}
    ?>
    </table>
</form>
</div>
</body>
</html>