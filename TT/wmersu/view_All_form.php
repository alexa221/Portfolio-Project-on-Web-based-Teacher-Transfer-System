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
	#assign{
	margin-left:400px;
     }
    </style>
<div id="style_div" >
<form method="post">
	<table border="0" cellspacing="14px" id="assign">
	<tr>
<td style="font-size:18px; color:#006; text-indent:160px">
<?php 
 $preventsch=mysqli_query($conn,"SELECT * FROM result where wcode='$wcode'");
$count2=mysqli_num_rows($preventsch);
 $prevent=mysqli_query($conn,"SELECT * FROM wtow_result");
$count1=mysqli_num_rows($prevent);
if($count1==0){
	?>
<a href="?tag=Assign " class="disabled" style="color:#006;font-size:20px;border:3px dashed #FFFF00;background-color:#3a98c5; text-decoration:none;" >Start Transfer</a>
<?php
}
else if($count2>='1'){
?>
<a href="?tag=Assign" class="disabled" style="color:#006;font-size:20px;border:3px dashed #FFFF00;background-color:#3a98c5; text-decoration:none;" >Start Transfer</a>
<?php
}
else {
?>
<a href="?tag=Assign" style="color:#006;font-size:20px;border:3px dashed #FFFF00;background-color:#3a98c5; text-decoration:none;" >Start Transfer</a>
<?php
}
?>
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
$user=mysqli_query($conn,"SELECT * FROM user where u_id='$u_id'");
 $i=0;
$row1=mysqli_fetch_array($user);
$id=$row1['u_id'];
$wcode=$row1['wcode'];
$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	if($key !="")
$sql2=mysqli_query($conn,"select * from transfer_form where sid like '%$key%'");
else
$sql2=mysqli_query($conn,"select * from transfer_form where wcode='$wcode' and status='pandding' order BY sum_E DESC ");
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
             <!--<td><?php echo $row['multiplayer'];?></td>
             <td><?php echo floor(($row['sum_E'])/(365*60*60*24)).".".floor((($row['sum_E'])-floor(($row['sum_E'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24)).".".floor(( ($row['sum_E'])-floor((($row['sum_E'])/(365*60*60*24)))*365*60*60*24-floor((($row['sum_E'])-floor(($row['sum_E'])/(365*60*60*24))*365*60*60*24)/(30*60*60*24))*30*60*60*24)/(60*60*24));?></td>-->
             <td><?php echo $row['first_choice'];?></td>
            <td><?php echo $row['second_choice'];?></td>
            <td><?php echo $row['third_choice'];?></td>
           <!-- <td><?php //echo date("M d, Y H:i:s",strtotime($row['date'])); ?></span></td>
            <td><a href="?tag=fill_transfer form&opr=upd&rs_id=<?php echo $row['trid'];?>" title="Update"><img src="picture/update.png" /></a></td>
            <td><a href="#?tag=fill_transfer form&opr=del&rs_id=<?php echo $row['trid'];?>" title="Assign">Assign</a></td>-->
        </tr>
    <?php	
	
	}
    ?>
    </table>
</form>
</div>
</body>
</html>