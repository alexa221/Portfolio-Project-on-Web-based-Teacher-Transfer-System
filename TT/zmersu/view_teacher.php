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
	$del_sql=mysqli_query($conn,"DELETE FROM teacher WHERE u_id=$id");
	if($del_sql)
		echo "<h3 style='color:#e01f3c'>teacher  has been Deleted... !</h3>";
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
<table width="755" border="0">
	<tr>
	<td width="300px">
	</td>
        <td style="">
       <input type="text" name="searchtxt" title="Enter teacher id for search " class="search" />
        </td>
        <td style="width:0px">
        <input type="submit" name="btnsearch" value="Search" id="button-search" title="Search teacher" />
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
            <th>First Name</th>
            <th>Last Name</th>  
            <th>Age</th>  			
            <th>sex</th>
			<th>Role</th>
            <th>date of occup</th>
            <th>level of edu</th>
			<th>major</th>
			<th>woreda</th>
			<th>school</th>
			<th>service</th>
        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	if($key !="") 
	$sql2=mysqli_query($conn,"SElECT * FROM teacher WHERE t_id	
  like '%$key%' or Fname like '%$key%'");	
  else
$sql2=mysqli_query($conn,"select * from teacher");
$i=0;
while($row=mysqli_fetch_array($sql2)){
$teachid=$row['t_id'];
 $i++;
 $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['t_id'];?></td>
            <td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
			<td><?php echo $row['age'];?></td>
            <td><?php echo $row['sex'];?></td>
			<td><?php echo $row['role'];?></td>
            <td><?php echo $row['dateofocp'];?></td>
            <td><?php echo $row['levelofedu'];?></td>
			<td><?php echo $row['major'];?></td>
		    <td><?php echo $row['wcode'];?></td>
			<td><?php echo $row['sid'];?></td>
            <!--<td><?php echo ($row['service']); ?></span></td>-->
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