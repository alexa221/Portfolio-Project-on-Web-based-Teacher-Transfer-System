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
if(isset($_POST['time'])){
	if($con){
$opendate=$_POST["opendate"];
$Closedate=$_POST["closedate"];
$c=1;
$sql=mysqli_query($conn,"select * from apply_date");
if(mysqli_num_rows($sql)==0)
{
$sql_ins=mysqli_query($conn,"INSERT INTO apply_date VALUES('$c','$opendate','$Closedate')");
$c++;
if($sql_ins==true)
	echo "<fz>Teacher  Apply Date and time is setted sucessfully</fz>";
  	else
	echo "Teachers  Apply Date and time is not setted sucessfully".mysql_error($con);	
}
else
echo("Teachers Apply Date is already setted!!!");
}
else
$msg="<ft>Not inserted try again</ft>";
	
}

//------------------update data----------
if(isset($_POST['btn_upd'])){
	//$s_id=$_POST['sid'];
	$s_name=$_POST['sname'];
	$s_level=$_POST['slevel'];
    $wcode=$_POST['wcode'];	
	$rank=$_POST['rank'];
	$sql_update=mysqli_query($conn,"UPDATE school SET 
								sname='$s_name',
								slevel='$s_level',
								wcode='$wcode',
								 rank='$rank'
							     WHERE
								sid=$id
							");
	if($sql_update==true)
		echo "<fz>school has been Updated Successfully</fz>";
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
       <b> applay day Update Form </b> </div>
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
        	<tr>
            	<td>School ID:</td>
            	<td>
                	<input type="text" name="sid" id="textbox" readonly  value="<?php echo $rs_upd['sid'];?>"/>
                </td>
            </tr>   
            <tr>
            	<td>School Name:</td>
            	<td>
                	<input type="text" name="sname" id="textbox" value="<?php echo $rs_upd['sname'];?>"/>
                </td>
            </tr>
              <tr>
            	<td>School Level:</td>
            	<td>
                	<input type="text" name="slevel" id="textbox" value="<?php echo $rs_upd['slevel'];?>"/>
                </td>
            </tr>
            
			  <tr>
            	<td>woreda code:</td>
            	<td>
                	<input type="text" name="wname" id="textbox" value="<?php echo $rs_upd['wname'];?>"/>
                </td>
            </tr>
			<tr>
            	<td>Rank:</td>
            	<td>
                	<input type="text" name="rank" id="textbox" value="<?php echo $rs_upd['rank'];?>"/>
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
        <!--<div id="top_style_text">-->
       <p style="margin-left:80px"><b><span style="font-size:30px;color:black">&#x27AE;</span>&nbsp; Set teacher Apply Date</b></p><br>
        </div><!-- end of top_style_text-->
<!--</div> end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table id="school_R" border="0" cellpadding="4" cellspacing="1" width="480px" >
        	<tr>
            	<td style="color: green;"><b>Teacher Apply Start Date:</b></td>
            	<td>
               <input type="datetime-local" name="opendate" id="textbox2" style="color: blue;width:200px;height:25px" required="required"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: green;"><b>Teacher Apply close Date:</b></td>
            	<td>
                	<input type="datetime-local" name="closedate" id="textbox1" style="color: blue;width:200px;height:25px" required="required"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="time" value="Set" id="button-in"  />
                </td>
            </tr>
	  </table>
    </div>
 
	
    </form>

</div><!-- end of style_informatios -->
<?php
}
?>

<script src="js/jquery-latest.min.js"></script>
		<script>
		var today = new Date().toISOString().slice(0, 16);

            document.getElementsByName("opendate")[0].min = today;
			var today2 = new Date().toISOString().slice(0, 16);
            document.getElementsByName("closedate")[0].min = today2;		
		</script>
</body>
</html>