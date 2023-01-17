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
	$del_sql=mysql_query("DELETE FROM package_tbl WHERE package_id=$id");
	if($del_sql)
		echo "Record Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();	
			
}
	echo $msg;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
<title>::.teacher transfer print report.::</title>

<script type="text/javascript">

       function PrintDoc() {

        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank', 'width=595,height=842,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write('<html><title>::Generate Report::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')

        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }

</script>

</head>
<body>
<div id="style_div" >
<form method="post">
<table width="755">
<tr>
<td> <input type="button" value="Print" id="button-search" class="btn" onclick="PrintDoc()"/></td>
<td> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
</table>
</form>
</div><!--end of style_div -->
<br />
<div id="printarea">
<div id="content-input">
<h3 align="center">West Gojjam Education Office.</h3>
<?php 
$today=date('Y');
$next=$today+1;
?>
<p align="center"><b>Teacher transfered from school to school <?php echo $today.'/'.$next;?></b><br>
	 <table border="1" width="1100px" align="center" cellpadding="5" class="mytable" cellspacing="0" >
        <tr height="35px">
            <th>No</th>
			<th>Transfer ID</th>
			<th>F_Name</th>
            <th>L_Name</th>
            <th>Major</th>
			<th>Old school</th>
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
$id=$row1['u_id'];
$wcode=$row1['wcode'];
$sql2=mysqli_query($conn,"select * from result where wcode='$wcode'");
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
            <td><?php echo $row['Fname'];?></td>
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['major'];?></td>
			<td><?php echo $row['sid'];?></td>
            <td><?php echo $sname;?></td>
        </tr>
    <?php	
    }
    ?>
    </table>

</div><!-- end of content-input -->
</div>
</body>
</html>