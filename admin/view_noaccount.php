<!--for delete Record -->
<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	/*if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM user WHERE u_id=$id");
	if($del_sql)
		echo "user has been Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();	
			
}*/
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
<!--<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>View User</b></td>
        <!--<td>
        	<a href="?tag=Register_user"><input type="button" title="Add new employe" name="butAdd" value="Add New" id="button-search" /></a>
        </td>-->
      <!--  <td>
        	<input type="text" name="searchtxt" title="Enter name for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:left">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search employee" />
        </td>
    </tr>
</table>-->
<table border="0" cellpadding="6px">
<tr>
<?php 
$query6=mysqli_query($conn,"select * from user where status='Noaccount'");
$count = mysqli_num_rows($query6);
if($coun!=0)
{
?>
<td style="font-size:18px; color:#006; text-indent:140px">
<a href="?tag=generate"style="color:#006;font-size:20px;border:3px dashed green;background-color:#3a98c5; text-decoration:none;" >Generate user name and password</a>

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
			<th>ID</th>
			<th>f_name</th>
			<th>l_name</th>
			<th>age</th>
			<th>sex</th>
			<th>Role</th>
			<th>status</th>
			<th>R_Date</th>

        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysqli_query($conn,"SELECT * FROM user where fname  like '%$key%' or lname like '%$key%'");
	else
		 $sql_sel=mysqli_query($conn,"SELECT * FROM user where status='Noaccount'");  
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['u_id'];?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['lname'];?></td>
			<td><?php echo $row['age'];?></td>
			<td><?php echo $row['sex'];?></td>
			<td><?php echo $row['role'];?></td>
			<td><?php echo $row['status'];?></td>
            <td><?php echo date("M d, Y ",strtotime($row['date'])); ?></span></td>
           <!-- <td><a href="?tag=Register_user&opr=upd&rs_id=<?php echo $row['u_id'];?>" title="Update"><img src="picture/update.png" /></a></td>
            <td><a href="?tag=view_man&opr=del&rs_id=<?php echo $row['u_id'];?>" title="Delete"><img src="picture/delete.png" /></a></td>
			<td><a href="?tag=C_account_entry&opr=CRA&rs_id=<?php echo $row['u_id'];?>" title="Account" style="text-decoration: none;">Generate Account</a></td>-->
        </tr>
    <?php	
    }
	// ----- for search studnens------	
	 }
    
   else{?>
<div class="alert alert-info" style="margin-left:30px;margin-top:10px"><i class="icon-info-sign"></i> <font size="6px" style="color:#006;">No New Request found!</font></div>
								<?php } ?>
    </table>
</form>
</div>
</body>
</html>