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

	
if(isset($_POST['btn_sub'])){
	$s_id=$_POST['sid'];
	$s_name=$_POST['sname'];
	$s_level=$_POST['slevel'];
    $wcode=$_POST['wcode'];	
	$rank=$_POST['rank'];
$sql_ins=mysqli_query($conn,"INSERT INTO school 
						VALUES(
							NULL,
							'$s_name',
							'$s_level',
	                        '$wcode',
	                        '$rank',
							 NOW()
							)
					");
if($sql_ins==true){
	echo "<fz>school Added successfully</fz>";
  echo'<meta content="1;main.php?school_entry.php" http-equiv="refresh" />';	
}
else
	$msg="<ft>Not inserted try again</ft>";
	
}

//------------------update data---------- 
if(isset($_POST['btn_upd'])){
	$sid=$_POST['sid'];
	$sname=$_POST['sname'];
	$slevel=$_POST['slevel'];
    $woreda=$_POST['wcode'];	
	$rank=$_POST['rank'];
	$sql_update=mysqli_query($conn,"UPDATE school SET                         
							  sname='$sname',
							  slevel='$slevel',
							  wcode='$woreda',
							  rank='$rank'
							  where 
							  sid=$id 
							");
	if($sql_update==true){
		echo "<fz>School  Updated Successfully</fz>";
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
<link rel="stylesheet" type="text/css" href="css/solid.css">
<link rel="stylesheet" type="text/css" href="font/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font/css/solid.css">
<link rel="stylesheet" type="text/css" href="css/brands.css">
<title>teacher transfer managment system</title>
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
#school_R{
	margin-left:30px;
    padding-left:20px;
    -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
    box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);

}
#school_R

.wcode{
	border:1px solid green;
	border-radius:15px;
	background-color:pink;
}
.fa-plus-square{
color:royalblue;
}
.fa-star{
	color:red;
}
</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysqli_query($conn,"SELECT * FROM school WHERE sid=$id");
	$rs_upd=mysqli_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> School Update Form </b> </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_school"><input type="button" name="btn_view" title="View school" value="Back" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<!--<tr>
          <td style="color: green;">School ID:</td>
            	<td>
                	<input type="text" name="sid" id="textbox" style="color: blue"  value="<?php echo $rs_upd['sid'];?>"/>
                </td>
            </tr> -->  
            <tr>
            	<td style="color: green;">School Name:</td>
            	<td>
                	<input type="text" name="sname" id="textbox" value="<?php echo $rs_upd['sname'];?>"/>
                </td>
            </tr>
              <tr>
            	<td style="color: green;">School Level:</td>
            	<td>
                	<input type="text" name="slevel" id="textbox" value="<?php echo $rs_upd['slevel'];?>"/>
                </td>
            </tr>
            
			  <tr>
            	<td style="color: green;">woreda code:</td>
            	<td>
                	<input type="text" name="wcode" id="textbox" value="<?php echo $rs_upd['wcode'];?>"/>
                </td>
            </tr>
			<tr>
            	<td style="color: green;">Rank:</td>
            	<td>
                	<input type="text" name="rank" id="textbox" value="<?php echo $rs_upd['rank'];?>"/>
                </td>
            </tr>
			
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_upd" value="Update" id="button-in"/>
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
       <p style="padding-left:70px"><b> <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;School Registration Form</b></p>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_school"><input type="button" name="btn_view" title="View school" value="View_School" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
	<?php
	$woreda_code=mysqli_query($conn,"select *  from account where u_id='$id_session'")or die(mysql_error());
		$row=mysqli_fetch_array($woreda_code); {
		$uid=$row['u_id'];
		}
 $sql=mysqli_query($conn,"select *  from user where u_id='$uid'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id']; 
$wcode=$r['wcode']; 
$sql2=mysqli_query($conn,"select * from woreda where wcode='$wcode'");
 while($row=mysqli_fetch_array($sql2)){ 
 $wname=$row['wname'];
 $wcode1=$row['wcode']; 
 }
		?>
    <div>
   	  <table id="school_R" border="0" cellpadding="4" cellspacing="1" width="420px" >
            
            <tr>
            	<td style="color: green;"><b><font color="red" size="4px">&#x2730;</font>&nbsp;School Name:</b></td>
            	<td>
                	<input type="text" name="sname" id="textbox" style="color: blue" required="required"/>
                </td>
            </tr>
            
             <tr>
            	<td style="color: green;"><b><font color="red" size="4px">&#x2730;</font>&nbsp;School Level:</b></td>
            	<td>
				<select name ="slevel" id="textbox" style="color:blue;" >
				<option selected="selected" value="">School Level</option>
				<option value="Primary School">Primary School</option>
				<option value="Secondary School">Secondary School</option>
				</select>
                </td>
            </tr>
			  <tr>
            	<td style="color: green;"><b><font color="red" size="4px">&#x2730;</font>&nbsp;Woreda Code:</b></td>
            	<td>
				<input type="text" name="wcode" style="color:blue" value="<?php echo $wcode1;?>" readonly id="textbox" required="required"/>
                </td>
            </tr>
			 <tr>
            	<td style="color: green;"><b><font color="red" size="4px">&#x2730;</font>&nbsp;Rank:</b></td>
            	<td>
                	<input type="text" name="rank" id="textbox" style="color: blue" required="required"/>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_sub" value="Register" id="button-in"  />
                </td>
            </tr>
	  </table>
    </div>
 
	
    </form>

</div><!-- end of style_informatios -->
<?php
}
?>
</body>
</html>