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
	$Did=$_POST['Did'];
	$wcode=$_POST['wcode'];
	$sid=$_POST['sid'];
	$name=$_POST['name'];
	//$levelofedu=$_POST['levelofedu'];
	$amharic=$_POST['amharic'];
	$english=$_POST['english'];
	$biology=$_POST['biology'];
	$chemistry=$_POST['chemistry'];
	$physics=$_POST['physics'];
	$ict=$_POST['ict'];
	$Total=$amharic+$english+$biology+$chemistry+$physics+$ict;
	$deletpriv1=mysqli_query($conn,"DELETE from request_table WHERE Did='$Did'");
     $sql_ins=mysqli_query($conn,"INSERT INTO request_table 
						VALUES(
							NULL,
							'$Did',
							'$wcode',
							'$sid',
							'$name',
							'$amharic',
							'$english',
							'$biology',
							'$chemistry',
							'$physics',
							'$ict',
							'$Total'
							)
					        ");
    if($sql_ins==true){
	echo "<fz>your request send  successfully</fz>";
	echo'<meta content="3;main.php?send_request.php" http-equiv="refresh" />';	
      }
     else 
	echo "<ft >Not inserted try again!</ft>";
 	echo'<meta content="3;main.php?send_request.php" http-equiv="refresh" />';
  //else
//$msg="<ft>Not inserted try again</ft>";	
}

//------------------update data----------
if(isset($_POST['btn_upd'])){
	$amharic=$_POST['amharic'];
	$english=$_POST['english'];
	$biology=$_POST['biology'];
	$chemistry=$_POST['chemistry'];
	$physics=$_POST['physics'];
	$ict=$_POST['ict'];
	$sql_update=mysqli_query($conn,"UPDATE request_table SET 
								Amharic='$amharic',
								English='$english',
								Biology='$biology',
								Chemistry='$chemistry',
								Physics='$physics',
								ICT='$ict'
							    WHERE
								R_id=$id
							");
	if($sql_update==true){
		echo "<fz> request Updated Successfully</fz>";
		echo'<meta content="3;main.php?send_request.php" http-equiv="refresh" />';	
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
<title>teacher transfer system</title>
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
#send_request
{
	margin-left:30px;
    padding-left:20px;
    -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
    box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);	
}

</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysqli_query($conn,"SELECT * FROM request_table WHERE R_id=$id");
	$rs_upd=mysqli_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> Schedule Update Form</b></div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_schedule"><input type="button" name="btn_view" title="View schedule" value="Back" id="button_view" style="width:70px;"  /></a>
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black"><b>Amharic:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="amharic" id="textbox" value="<?php echo $rs_upd['Amharic'];?>"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black"><b>English:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="english" id="textbox" value="<?php echo $rs_upd['English'];?>"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black"><b>Biology:</b></td>
                <td>
                	<input style="color: blue" type="text" name="biology" id="textbox" value="<?php echo $rs_upd['Biology'];?>"/>
                </td>
            </tr>
        
            <tr>
            	<td style="color: black"><b>Chemistry:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="chemistry" id="textbox" value="<?php echo $rs_upd['Chemistry'];?>"/>
    			</td>
        	</tr>
        	<tr>
            	<td style="color: black"><b>Physics:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="physics" id="textbox" value="<?php echo $rs_upd['Physics'];?>"/>
    			</td>
        	</tr>
			   <tr>
            	<td style="color: black"><b>ICT:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="ict" id="textbox" value="<?php echo $rs_upd['ICT'];?>"/>
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
       <b> <i class="fa fa-registered" ></i>school director send request </b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 

       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
<?php 
$sql=mysqli_query($conn,"select * from account where u_id='$id_session'");
$row6=mysqli_fetch_array($sql);
if($row6)
$u_id=$row6['u_id'];
 $teacher=mysqli_query($conn,"SELECT * FROM teacher where t_id=$u_id");
while($row=mysqli_fetch_array($teacher)){
$id=$row['t_id'];
$fname=$row['Fname'];
$sch=$row['sid'];
$woreda=$row['wcode'];
}
?>
	<form method="post" >
    <div >
   	  <table id="send_request"  border="0" cellpadding="0" cellspacing="0"  width="0px">
	  <tr>
	  <td  style="color: green;text-align:right"><b>Director ID:</b></td>
	   	<td>
		 <input style="color: blue;width:100px" type="text" readonly name="Did" id="textbox" value="<?php echo $id;?>"/>  
		</td>
	  </tr>
	    <tr>
	    <td  style="color: green;text-align:right"><b>Woreda Code:</b></td>
	   	<td> <input style="color: blue;width:100px" type="text" readonly name="wcode" id="textbox" value="<?php echo $woreda;?>"/>  </td>
	  </tr>
	  
     	<tr>
	    <td  style="color: green;text-align:right"><b>School ID:</b></td>
	   	<td> <input style="color: blue;width:100px" type="text" readonly name="sid" id="textbox" value="<?php echo $sch;?>"/>  </td>
	  </tr>
	     <tr>
	    <td  style="color: green;text-align:right"><b>Name:</b></td>
	   	<td> <input style="color: blue;width:100px" type="text" readonly name="name" id="textbox" value="<?php echo $fname;?>"/>  </td>
	  </tr>
	   <!--<tr>
	    <td  style="color: green;text-align:right"><b>Level of Educa:</b></td>
	   	<td> 
         <select  name="levelofedu" style="color:blue"  id="textbox" required>
		<option value="">select you education level</option>
		<option value="Diploma">Diploma</option>
		<option value="Degree">Degree</option>
		<option value="M.Sc">M.Sc.</option>
	</select>
		</td>
	  </tr>-->
	  	<tr>
	  <td  style="color: green;text-align:right"><b>Amharic:</b></td>
	   	<td><input type="text" name="amharic"  id="textbox"  /></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>English:</b></td>
	   	<td><input type="text" name="english"  id="textbox"  /></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>Biology:</b></td>
	   	<td><input type="text" name="biology"  id="textbox"  /></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>Chemistry:</b></td>
	   	<td><input type="text" name="chemistry"  id="textbox"  /></td>
	  </tr>
	  	<tr>
	  <td  style="color: green;text-align:right"><b>Physics:</b></td>
	   	<td><input type="text" name="physics"  id="textbox"  /></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>ICT:</b></td>
	   	<td><input type="text" name="ict"  id="textbox"  /></td>
	   </tr>
           <tr>
                <td colspan="2" style="padding-top:10px">
     	          <input type="reset" value="Cancel" id="button-in"/>
                 <input type="submit" name="btn_sub" value="Send" id="button-in"/>	
                </td>
            </tr>
			<tr>
	  <td  style="color: green;text-align:right"><b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	   	<td></td>
	  </tr>
	  </table>
    </div>
 
    </form>
   <!--</fieldset>-->
</div><!-- end of style_informatios -->
<?php
}
?>
</body>
</html>