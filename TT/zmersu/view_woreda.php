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
	$del_sql=mysqli_query($conn,"DELETE FROM woreda WHERE wcode=$id");
	if($del_sql)
		echo "woreda successfully Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();	
			
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>zone mersu office page</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>
<body>
<div id="style_div" >
<form method="post">
<table width="765" border="0">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>View Woreda</b></td>
         <td>
            <a href="?tag=woreda_entry"><input type="button" title="Add new woreda" name="butAdd" value="Add New" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="Enter woreda code for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search woreda" />
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
			<th>woreda code</th>
			<th>woreda Name</th>
            <th>multiplayer</th>        
            <th>Date Added</th>
          <th >Operation</th>
        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="") 
		$sql_sel=mysqli_query($conn,"SElECT * FROM woreda WHERE wcode  like '%$key%' or wname like '%$key%'");
	else
	$sql_sel=mysqli_query($conn,"SELECT * FROM woreda");
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['wcode'];?></td>
            <td><?php echo $row['wname'];?></td>
            <td><?php echo $row['multiplayer'];?></td>
            <td><?php echo date("M d, Y ",strtotime($row['date'])); ?></span></td>
            <td><a href="?tag=woreda_entry&opr=upd&rs_id=<?php echo $row['wcode'];?>" title="Update"><img src="picture/update.png" /></a></td>
            <!--<td><a href="?tag=view_woreda&opr=del&rs_id=<?php echo $row['wcode'];?>" title="Delete"><img src="picture/delete.png" /></a></td>-->      
        </tr>
    <?php	
    }
	// ----- for search studnens------	
		
	
    ?>
    </table>
</form>
</div>
</body>
</html>