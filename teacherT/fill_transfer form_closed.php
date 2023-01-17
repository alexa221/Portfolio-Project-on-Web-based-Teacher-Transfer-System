<?php
error_reporting(0);
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];


//--------------Add data-----------------

function formatDate($val)
   {
        $arr = explode('-', $val);
        return date('d M Y', mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
    }
	/*

else
*/

 if(isset($_POST['btn_sub'])){
	$tid=$_POST['tid'];
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$date=$_POST['date'];
	$level=$_POST['levceledu'];
	$major=$_POST['major'];
	$woreda=$_POST['woreda'];
	$school=$_POST['school'];
	$normalservice=$_POST['service'];
	$multipl=$_POST['multipl'];
	$netservice=$_POST['netservice'];
	$fchoice=$_POST['fchoice'];
	$schoice=$_POST['schoice'];
	$tchoice=$_POST['tchoice'];
$sql_ins=mysqli_query($conn,"INSERT INTO transfer_form 
						VALUES(
						    '$tid',
							'$f_name',
							'$l_name',
							'$age',
							'$sex',
							'$date',
							'$level',
							'$major',
							'$woreda',
							'$school',
							'$normalservice',
							'$multipl',
							'$netservice',
							'$fchoice',
							'$schoice',
							'$tchoice'
							)
					");
	
   if(!$sql_ins){
    echo "<ft>You Can Not Apply more than once!</ft>";
   }
    else
	echo "<fz>fill transfer form Added successfully</fz>";
	echo'<meta content="2;main.php?fill_transferform" http-equiv="refresh" />';	
//else
//$msg="<ft>Not inserted try again</ft>";
}
//}
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$fchoice=$_POST['fchoice'];
	$schoice=$_POST['schoice'];
	$tchoice=$_POST['tchoice'];
	$sql_update=mysqli_query($conn,"UPDATE transfer_form SET 
								first choice='$fchoice',
								second chice='$schoice' ,
								third choice='$tchoice'
							WHERE
								trid=$id
							");
	if($sql_update==true){
		echo "<fz>fill form Updated Successfully</fz>";
		echo'<meta content="3;main.php?fill_transferform.php" http-equiv="refresh" />';	
	}
	else
		echo "<ft>Update Failed</ft>";
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<link rel="stylesheet" type="text/css" href="font/css/solid.css">
<link rel="stylesheet" type="text/css" href="font/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="css/brands.css">
<script type="text/javascript" src="js/imagepreview.js"></script>
<script type="text/javascript" src="js/fontawosome.js"></script>
<script src="js/validation.js" type="text/javascript"></script>
<title>Techer transfer system</title>
</head>
<body>
<style>
ft{
	color: red;
	font-size: 20px;
}
fz{
	color: green;
	font-size: 20px;
}
#Teacher_R
{

}
</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysqli_query($conn,"SELECT * FROM transfer_form WHERE trid=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> transfer form update</b></div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_form"><input type="button" name="btn_view" title="View schedule" value="Back" id="button_view" style="width:70px;"  /></a>
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black;width:150px"><b>First Choice:</b></td>
            	<td>
           <select name="fchoice" style="color:blue;" id="textbox"> 
		   <option value="<?php echo $rs_upd['first choice'];?>"><?php echo $rs_upd['first choice'];?></option>
		       <?php
				$school="SELECT *FROM school";
				$recored=mysql_query($conn,$school);
		         if($recored)
				 {
				?>
				<?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option  value="<?php echo $row['sid'];?>">
		    <?php echo $row["sid"];?>
		     </option>
			 <?php
				 }
				 }
		       ?>
		   </select>
                </td>
            </tr>
        	<tr>
            	<td style="color: black;width:150px"><b>second Choice:</b></td>
            	<td>
           <select name="fchoice" style="color:blue;" id="textbox"> 
		   <option value="<?php echo $rs_upd['second chice'];?>"><?php echo $rs_upd['second chice'];?></option>
		       <?php
				$school="SELECT *FROM school";
				$recored=mysqli_query($conn,$school);
		         if($recored)
				 {
				?>
				<?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option  value="<?php echo $row['sid'];?>">
		    <?php echo $row["sid"];?>
		     </option>
			 <?php
				 }
				 }
		       ?>
		   </select>
                </td>
            </tr>
        	<tr>
            	<td style="color: black;width:150px"><b>Third Choice:</b></td>
            	<td>
           <select name="fchoice" style="color:blue;" id="textbox"> 
		   <option value="<?php echo $rs_upd['third choice'];?>"><?php echo $rs_upd['third choice'];?></option>
		       <?php
				$school="SELECT *FROM school";
				$recored=mysqli_query($conn,$school);
		         if($recored)
				 {
				?>
				<?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option  value="<?php echo $row['sid'];?>">
		    <?php echo $row["sid"];?>
		     </option>
			 <?php
				 }
				 }
		       ?>
		   </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_upd" value="Update" id="button-in"  />
                </td>
            </tr>
		</table>
  </div>
    </form>

</div><!-- end of style_informatios -->

<?php	
}
else
{
?>
<!-- for form Register-->
	
<div id="top_style">
        <div id="top_style_text">
      
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
<?php	
$result = mysqli_query($conn,"SELECT * FROM apply_date");
$numrow = mysqli_num_rows($result);
if ($numrow == 0)
{
	die('No record found.');
}
$row = mysqli_fetch_row($result);
$closedate = date_format(date_create($row[2]), 'm/d/Y H:i:s');
print("Sorry fill the form  date is now closed!!");
echo "<br>Closing Date was: " . $closedate;
?>
<br>
 <script>
CloseDate = "<?php echo $closedate ?>";
BackColor = "whte";
ForeColor = "red";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Days %%H%% Hours %%M%% Minutes %%S%% Seconds.";
FinishMessage = "fill the form is now bieng closed!";
	function calcage(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}
function CountBack(secs) {
  if (secs < 0) {
document.getElementById("cntdwn").innerHTML = "Already Closed";
    return;
  }
  DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
  DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
  DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
  DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

  document.getElementById("cntdwn").innerHTML = DisplayStr;
  if (CountActive)
    setTimeout("CountBack(" + (secs+CountStepper) + ")", SetTimeOutPeriod);
}

function putspan(backcolor, forecolor) 
{
 document.write("<span id='cntdwn' style='background-color:" + backcolor + 
                "; color:" + forecolor + "'></span>");
}
CountStepper = Math.ceil(CountStepper);
if (CountStepper == 0)
  CountActive = false;
var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
putspan(BackColor, ForeColor);
var EndDate = new Date(CloseDate);
var CurrentDate = new Date();
if(CountStepper>0)
  ddiff = new Date(CurrentDate-EndDate);
else
  ddiff = new Date(EndDate-CurrentDate);
gsecs = Math.floor(ddiff.valueOf()/1000);
CountBack(gsecs);
</script>
</div>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->
</br>
<p align="center"><font color="blue">you Can Not fill the form Because Time is Already up!!!</font></p>   
<div id="style_informations">
	
</div>
<?php
}
?>
</body>
</html>