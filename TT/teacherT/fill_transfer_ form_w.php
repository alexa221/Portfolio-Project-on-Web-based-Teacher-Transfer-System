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
    $y=floor($normalservice/(365*60*60*24));
	if($y<'2'){	
	echo "<ft>soory your service year is less than two year </ft>";
	echo'<meta content="4;main.php?fill_transfer_ form_w" http-equiv="refresh" />';
	}
	else{
$deletpriv=mysqli_query($conn,"DELETE from w_transfer_form WHERE wtrid='$tid'");
$sql_ins=mysqli_query($conn,"INSERT INTO w_transfer_form 
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
							'$normalservice',
							'$multipl',
							'$netservice',
							'$fchoice',
							'$schoice'
							)
					");
	
   if($sql_ins==true){
	  echo "<fz>fill transfer form Added successfully</fz>";
	  echo'<meta content="2;main.php?fill_transferform" http-equiv="refresh" />';
   }
   // echo "<ft>You Can Not Apply more than once!</ft>";
      else
	  echo "<ft>Not inserted try again!</ft>";	
}
}
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$fchoice=$_POST['fchoice'];
	$schoice=$_POST['schoice'];
	//$tchoice=$_POST['tchoice'];
	
$check=mysqli_query($conn,"SELECT * FROM apply_date");
$row=mysqli_fetch_array($check);
$start=$row['StartDate'];
$end_date=$row['EndDate'];
$today=date('Y-m-d-h-i-s');
if($end_date<$today){
	$sql_update=mysqli_query($conn,"UPDATE w_transfer_form SET 
								first_choice='$fchoice',
								second_choice='$schoice' 
							     WHERE
								wtrid=$id
							");
	if($sql_update==true){
		echo "<fz>fill form Updated Successfully</fz>";
		echo'<meta content="3;main.php?fill_transfer_ form_w.php" http-equiv="refresh" />';	
	}
	else
	echo "<ft>You are not successfully inserted!</ft>";	
    }
	else
    echo "<ft>You can not update your choice time is up!</ft>";
    echo'<meta content="3;main.php?fill_transfer_ form_w.php" http-equiv="refresh" />';	
		//echo "<ft>Update Failed</ft>";
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
<title>Techer transfer system</title>
</head>
<body>

<style>
ft{
	color: red;
	font-size: 20px;
	padding-left:20px;
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
	$sql_upd=mysqli_query($conn,"SELECT * FROM w_transfer_form WHERE wtrid=$id");
	$rs_upd=mysqli_fetch_array($sql_upd);
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
<?php
$sql1=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$row2=mysqli_fetch_array($sql1);
if($row2)
$uid=$row2['u_id'];
$teacher1=mysqli_query($conn,"SELECT * FROM teacher where t_id=$uid");
$row4=mysqli_fetch_array($teacher1);
$woreda=$row4['wcode'];
 ?>
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black;width:150px"><b>First Choice:</b></td>
            	<td>
           <select name="fchoice" style="color:blue;" id="textbox"> 
		   <option value="<?php echo $rs_upd['first_choice'];?>"><?php echo $rs_upd['first_choice'];?></option>
		       <?php
				$school="SELECT *FROM woreda where wcode!='$wcode'";
				$recored=mysqli_query($conn,$school);
		         if($recored)
				 {
				?>
				<?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option  value="<?php echo $row['wcode'];?>">
		    <?php echo $row["wname"];?>
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
           <select name="schoice" style="color:blue;" id="textbox"> 
		   <option value="<?php echo $rs_upd['second_choice'];?>"><?php echo $rs_upd['second_choice'];?></option>
		       <?php
				$school="SELECT *FROM woreda where wcode!='$wcode'";
				$recored=mysqli_query($conn,$school);
		         if($recored)
				 {
				?>
				<?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option  value="<?php echo $row['wcode'];?>">
		    <?php echo $row["wname"];?>
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
           <select name="tchoice" style="color:blue;" id="textbox"> 
		   <option value="<?php echo $rs_upd['third_choice'];?>"><?php echo $rs_upd['third_choice'];?></option>
		       <?php
			$school="SELECT *FROM woreda where wcode!='$wcode'";
				$recored=mysqli_query($conn,$school);
		         if($recored)
				 {
				?>
				<?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option  value="<?php echo $row['wcode'];?>">
		    <?php echo $row["wname"];?>
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
       <b><i class="fa fa-align-justify" aria-hidden="true"></i>&nbsp;Teacher fill transfer  Form </b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
	   <div style="margin-left:24px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
	   <?php	
$result = mysqli_query($conn,"SELECT * FROM apply_date");
$numrow = mysqli_num_rows($result);
if ($numrow == 0)
{
	die('teacher Apply Date Is No Started!!!.');
}
$row = mysqli_fetch_row($result);
$closedate = date_format(date_create($row[2]), 'm/d/Y H:i:s');
print("you can send fill form Until time is up!!");
echo "<p>Closing Date: " . $closedate;
?>
<br>
 Time Left:
 <script>
CloseDate = "<?php echo $closedate ?>";
BackColor = "whte";
ForeColor = "red";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Days %%H%% Hour %%M%% Minute %%S%% Second";
FinishMessage = "applay form is now bieng closed!";
	function calcage(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}
function CountBack(secs) {
  if (secs < 0) {
    document.getElementById("cntdwn").innerHTML = "Request Date is Now Closed";
	window.location = "main.php?tag=fill_transfer form_closed"
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

<div id="style_informations">
	<form method="post" >
    <div >
   	  <table id="Teacher_R"  border="0" cellpadding="0" cellspacing="2" width="0">   
           <tr>
        <td style="color: black;width:150px;text-align:right"><b>Teacher ID:</b></td>
		<?php
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$row6=mysqli_fetch_array($sql);
if($row6)
$u_id=$row6['u_id'];
?>
		<td>
	    <input style="color: blue;width:100px" type="text" readonly name="tid" id="textbox" value="<?php echo $u_id;?>"/>  
		 </td>
           </tr>
       <tr>	
	   <?php
 $teacher=mysqli_query($conn,"SELECT * FROM teacher where t_id=$u_id");
while($row=mysqli_fetch_array($teacher)){
$id=$row['u_id'];
$fname=$row['Fname'];
$lname=$row['Lname'];
$Age=$row['age'];
$sex=$row['sex'];
$doc=$row['dateofocp'];
$leveledu=$row['levelofedu'];
$major=$row['major'];
$wcode=$row['wcode'];
$sch=$row['sid'];
$service=$row['service'];
$sql2=mysqli_query($conn,"select * from woreda where wcode='$wcode'");
$row2=mysqli_fetch_array($sql2);
$mul=$row2['multiplayer'];
$wn=$row2['wname'];
$multi=30*60*60*24;
$multi_two=$multi*2;
$y=floor($service/(365*60*60*24));
if($mul=='1.1')
{
$total=$y*$multi;
$finaleservice=$total+$service;	
}
else if($mul=='1.2')
{
$total=$y*$multi_two;
$finaleservice=$total+$service;	
}
else if($mul=='1')
{
$finaleservice=$service;
}
} 
         ?>
     <td style="color: black;width:150px;text-align:right"><b>First Name:</b></td>
	 	<td> 
		<input style="color: blue;width:120px" type="text" readonly name="fname" id="textbox" value="<?php echo $fname;?>"/>  
		 </td>
		  <td style="color: black;width:150px;padding-left:13px;border-left:2px dashed green;border-top:2px dashed green"><b>First Choice:</b></td>
           <td>
		<select  name="fchoice" style="color:blue;border-top:2px dashed green;border-right:2px dashed green;width:200px;height:25px"  id="first" onchange="getSelectValue(this.value)" >
		<option selected="selected" value="">Select woreda</option>
				<?php
				$school="SELECT *FROM woreda where wcode!='$wcode'";
				$recored=mysqli_query($conn,$school);
		         if($recored)
				 {
				?>
				<!--<option value=""></option>-->
		        <?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option id="woreda" value="<?php echo $row['wname'];?>">
		    <?php echo $row["wname"];?>
		     </option>
			 <?php
				 }
				 }
		       ?>
				</select>
                </td>
		   </tr>
		   <tr>
		   <td style="color: black;width:150px;text-align:right"><b>Last Name:</b></td>
		  <td> 
		<input style="color: blue;width:120px" type="text" readonly name="lname" id="textbox" value="<?php echo $lname;?>"/>  
		  </td> 
		  <td style="color: black;border-left:2px  dashed green;padding-left:13px"><b>Second Choice:</b></td>
            	<td>
				<select  name="schoice" style="color:blue;border-right:2px  dashed green;width:200px;height:25px" id="second" onchange="getScondValue()" class="wcode" required>
				 <option selected="selected" value="">Select woreda</option>
				<?php
				$school="SELECT *FROM woreda where wcode!='$wcode'";
				$recored=mysqli_query($conn,$school);
		         if($recored)
				 {
				?>
				<!--<option value=""></option>-->
		        <?php
		      while($row=mysqli_fetch_assoc($recored))
		      {
				  ?>
			 <option id="woreda" value="<?php echo $row['wname'];?>">
		    <?php echo $row["wname"];?>
		     </option>
			 <?php
				 }
				 }
		       ?>
				</select>
                </td>
		   </tr>
		   	 <tr>
		  <td style="color: black;width:150px;text-align:right"><b>Age:</b></td>
		  <td> 
		<input style="color: blue;width:100px" type="text" readonly name="age" id="textbox" value="<?php echo $Age;?>"/>  	  
	      </td> 

		 </tr>
		  	<tr>
		   <td style="color: black;width:150px;text-align:right"><b>Sex:</b></td>
		  <td> 
		  <input style="color: blue;width:100px" type="text" readonly name="sex" id="textbox" value="<?php echo $sex;?>"/>  	  
		  </td> 
		   </tr>
		   	<tr>
		   <td style="color: black;width:150px;;text-align:right"><b>Date of occupa:</b></td>
		  <td> 
	      <input style="color: blue;width:120px" type="text" readonly name="date" id="textbox" value="<?php echo $doc;?>"/>  	  
	       </td> 
            <td style="padding-left:60px"><input type="submit" name="btn_sub"  value="send" id="button-in"  /></td>
			<td style="padding-right:70px"><input type="reset" value="Cancel" id="button-in"/></td>
		   </tr>
		 <tr>
		   <td style="color: black;width:150px;text-align:right"><b>Level of Edu:</b></td>
		  <td>
	    <input style="color: blue;width:120px" type="text" readonly name="levceledu" id="textbox" value="<?php echo $leveledu;?>"/>  	  	  
		 </td> 
		   </tr>
		   <tr>
		   <td style="color: black;width:150px;text-align:right"><b>Major:</b></td>
		  <td> 
	   <input style="color: blue;width:120px" type="text" readonly name="major" id="textbox" value="<?php echo $major;?>"/>	  
		  </td> 
		   </tr>
		   	<tr>			
		   <td style="color: black;width:150px;text-align:right"><b>Woreda:</b></td>
		  <td> 
      <input style="color: blue;width:120px" type="text" readonly name="woreda" id="textbox" value="<?php echo $wn;?>"/>		  
		    </td> 
		   </tr>
		  <tr>
		<!--<td style="color: black;width:150px;text-align:right"><b>Service:</b></td>-->
		 <td>
		<input style="color: blue;width:100px" type="hidden" readonly name="service" id="textbox" value="<?php echo $service;?>"/>  
         </td> 
		</tr>
      <tr>
	 <!-- <td style="color: black;width:150px;text-align:right"><b>Multiplayer:</b></td>-->
	  <td>
	<input style="color: blue;width:100px" type="hidden" readonly name="multipl" id="textbox" value="<?php echo $mul;?>"/></td>
     <td>	
	<input style="color: blue;width:100px" type="hidden" readonly name="netservice" id="textbox" value="<?php echo $finaleservice;?>"/>
	  </td>
      </tr>		   
            <!--<tr>
                <td colspan="3" style="padding-right:26px">
				<!--<input type="submit" name="btn_sub" value="Register" id="button-in"/>
     	          <input type="reset" value="Cancel" id="button-in"/>
                 <input type="submit" name="btn_sub" value="submit" id="button-in"  />	
                </td>
            </tr>-->
	  </table>
    </div>
 
    </form> 

</div><!-- end of style_informatios -->
<?php
}
?>
</body>
</html>