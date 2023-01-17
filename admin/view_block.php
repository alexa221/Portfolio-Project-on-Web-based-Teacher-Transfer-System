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
	$del_sql=mysqli_query($conn,"DELETE FROM account WHERE u_id=$id");
	if($del_sql)
		echo "account sucessfuly Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();			
}
	
?>

	<?php
	if($opr=="dia")
{
$select=mysqli_query($conn,"select * from account where u_id=$id");
while($row=mysqli_fetch_array($select))
{
$status_var=$row['status'];	
if($status_var=='0')
{
$status_state='1';
}
else{
$status_state='0';	
}
$sql_dia=mysqli_query($conn,"update account set Status='$status_state' where u_id='$id'");
	if($sql_dia){
	echo'<meta content="1;?view_account.php" http-equiv="refresh" />';
	}
	else
  $msg="Could not block :".mysql_error();	
}			
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
<!--<table width="0" border="0">
	<tr>
    	<td style="font-size:18px; color:#006; text-indent:30px;"><b>View account</b></td>
        <td>
        	<input type="text" name="searchtxt" title="Enter name for search " class="search" autocomplete="off"/>
        </td>
        <td >
        	<input type="submit"  name="btnsearch" value="Search" id="button-search" title="Search user" />
        </td>
    </tr>

</table>-->
<table width="700px">
	<tr>
		<?php
        $query = mysqli_query($conn,"select * from account where status='0'")or die(mysql_error());
         $coun = mysqli_num_rows($query);
         if($coun>='1'){
              ?>
	<td style="font-size:18px; color:#006; text-indent:30px;">No of Block User <font size="5px" color="blue" >(<?php echo $coun?>)</font></td>

	</tr>

</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

     <table border="1" width="1000px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>No</th>
			<th>ID</th>
			<th>user Name</th>
			<th>Password</th>
			<th>Role</th>
			<th>status</th>
            <th>pd_status</th>
			<th colspan="0">Operation</th>
        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysqli_query($conn,"SELECT * FROM account where u_id  like '%$key%' or role like '%$key%'");
	else
		 $sql_sel=mysqli_query($conn,"SELECT * FROM account where status='0'");  
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['u_id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
			<td><?php echo $row['role'];?></td>
			<td><?php echo $row['status'];?></td>
<td>
<a href="?tag=view_account&opr=dia&rs_id=<?php echo $row['u_id'];?>" 
 id="btn" onchange="Block" onclick="return confirm('Are you sure <?php echo $row['u_id']?>');">
<?php
$status_var=$row['status'];
IF($status_var=='1'){
?>
<input type="button" value="Block" style="background-color:green;color: #fffbfb;height:25px; width:70px; text-decoration: none;"/>
 <?php
}
else
{
 ?>
<input type="button" value="UNBlock" style="background-color: red;color: ##ffffff;height: 25px; text-decoration: none;" /></a></td> 
<?php
}
?>
<!--</td>-->
    </tr>
    <?php 
      }
		 }
	 else{?>
<div class="alert alert-info" style="margin-left:30px;margin-top:10px"><i class="icon-info-sign"></i> <font size="6px" style="color:#006;">No block user found!</font></div>
<?php } 
	  
	// ----- for search studnens------		
    ?>
    </table>
</form>
</div>
</body>
</html>