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
	$did=$_POST['did'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$Age=$_POST['Age'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	$School=$_POST['School'];
    $status="Noaccount";
$sql_ins=mysql_query("INSERT INTO director 
						VALUES(
							'$did',
							'$fname',
							'$lname',
	                        '$Age',
							'$sex',
							'$email',
							  NOW(),
							 '$School'
	                              )
					");
if($sql_ins==true)
{
	 $sql2=mysql_query("INSERT INTO user VALUES('$did','$fname','$lname','$Age','$sex','$email', NOW(),'$status')");
		if($sql2==true)
	   {
	echo "<fz>director register successfully</fz>";
	echo'<meta content="5;main.php?school_director.php" http-equiv="refresh" />';
     }}
	
else
	$msg="<ft>Not inserted try again</ft>";
	
}

//------------------update data----------
if(isset($_POST['btn_upd'])){
	$did=$_POST['did'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$Age=$_POST['Age'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	$School=$_POST['School'];
	$sql_update=mysql_query("UPDATE director SET 
								u_id='$did',
								Fname='$fname',
								Lname='$lname',
								age='$Age',
								sex='$sex',
								email='$email',
								school='$School'
							    WHERE
								U_id=$id
							");
	if($sql_update==true)
	{
		echo "<fz>director information  has been Updated Successfully</fz>";
	echo'<meta content="1;main.php?school_director.php" http-equiv="refresh"/>';
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
<link rel="stylesheet" type="text/css" href="new_css/css/fontawesome.min.css">
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
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM director WHERE u_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> director Update Form </b> </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_director"><input type="button" name="btn_view" title="View director" value="Back" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            <td style="color: green;"><b>Director ID:</b></td>
            	<td>
                	<input type="text" name="did" id="textbox" readonly value="<?php echo $rs_upd['u_id'];?>"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: green;"><b>First Name:</b></td>
            	<td>
                	<input type="text" name="fname" id="textbox" value="<?php echo $rs_upd['Fname'];?>"/>
                </td>
            </tr>
                                 <tr>
            	<td style="color: green;"><b>Last Name:</b></td>
            	<td>
                	<input type="text" name="lname" id="textbox" value="<?php echo $rs_upd['Lname'];?>" />
                </td>
            </tr> 
            			   <tr>
            	<td style="color: green;"><b>Age:</b></td>
            	<td>
                	<input type="text" name="Age" id="textbox" value="<?php echo $rs_upd['age'];?>"
                </td>
            </tr>

           <tr>
            	<td style="color: green;"><b>Sex:</b></td>
				<td ><select style="color: blue" id="textbox" name="sex" value="<?php echo $rs_upd['sex'];?>">
				<option value ="" selected>please select...</option>
				<option value ="male">Male</option>
				<option value ="female" >female</option>
            	</select><br></td>
            </tr>
				<tr>
            	<td style="color: green;"><b>Email:</b></td>
            	<td>
                	<input type="text" name="email" id="textbox" value="<?php echo $rs_upd['email'];?>"/>
                </td>
            </tr>
			
			 <tr>
            	<td style="color: green;"><b>School ID:</b></td>
            	<td>
                	<input type="text" name="School" id="textbox" value="<?php echo $rs_upd['school'];?>"/>
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
       <b> School Director Registration Form</b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_director"><input type="button" name="btn_view" title="View Busea" value="View_School" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table id="school_R" border="0" cellpadding="4" cellspacing="1" width="420px" >
        	<tr>
            	<td style="color: green;"><b>Director ID:</b></td>
            	<td>
                <input type="text" name="did" id="textbox" style="color: blue" required="required"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: green;"><b>First Name:</b></td>
            	<td>
                	<input type="text" name="fname" id="textbox" style="color: blue" required="required"/>
                </td>
            </tr>
            
                      <tr>
            	<td style="color: green;"><b>Last Name:</b></td>
            	<td>
                	<input type="text" name="lname" id="textbox" style="color: blue" required="required"/>
                </td>
            </tr>
			
			   <tr>
            	<td style="color: green;"><b>Age:</b></td>
            	<td>
                	<input type="text" name="Age" id="textbox" style="color: blue" required="required"/>
                </td>
            </tr>
			
			  <tr>
            	<td style="color: green;"><b>Sex:</b></td>
				<td ><select style="color: blue" id="textbox" required="required" name="sex">
				<option value ="" selected>please select...</option>
				<option value ="male">Male</option>
				<option value ="female" >female</option>
            	</select><br></td>
            </tr>
				<tr>
            	<td style="color: green;"><b>Email:</b></td>
            	<td>
                	<input type="text" name="email" id="textbox" style="color: blue" required="required"/>
                </td>
            </tr>
			
			 <tr>
            	<td style="color: green;"><b>School ID:</b></td>
            	<td>
                	<input type="text" name="School" id="textbox" style="color: blue" required="required"/>
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