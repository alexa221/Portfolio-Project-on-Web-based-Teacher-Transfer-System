<!--<script type='text/javascript'>
function check()
{

         var clerk_id = document.getElementById('clerk_id');
        var fname = document.getElementById('fname');
      var lname = document.getElementById('lname');
	  var age = document.getElementById('age');
	  var sex = document.getElementById('sex');
	  var adress = document.getElementById('adress');
	  var phone=document.getElementById('phone')
	   var username = document.getElementById('username');
	   var password = document.getElementById('password');
	    //var email = document.getElementById('email');
		var email=document.getElementById('email');
		
		if(isAlphabet(fname,"please fill First name")){
		 if(lengthRestriction(fname, 2, 10,"for your first name")){
if(isAlphabet(lname,"please fill middle name")){
		 if(lengthRestriction(lname, 2, 10,"for your middle name")){	
if(isAlphabet(age,"please fill last name")){
	if(lengthRestriction(lname, 2, 10,"for your last name")){
		if(Email(email, "Please enter email with @ and .  or not empty")){
 if( isAlphanumeric( sex, "Please fill user name")){
		 if(lengthRestriction(sex, 2, 30,"for user name")){
if( isAlphanumeric( age, "Please fill age")){
		 if(lengthRestriction(age, 4, 32,"for password")){
if( isAlphanumeric( addr, "Please fill confirmPassword")){
		 if(lengthRestriction(adress, 4, 32,"for confirmPassword")){
if( isAlphanumeric( addr, "Please fill confirmPassword")){
		 if(lengthRestriction(adress, 4, 32,"for confirmPassword")){
if( isAlphanumeric( phone, "Please fill confirmPassword")){
		 if(lengthRestriction(phone, 4, 32,"for confirmPassword")){
if( isAlphanumeric( ausername, "Please fill confirmPassword")){
		 if(lengthRestriction(username, 4, 32,"for confirmPassword")){
if( isAlphanumeric( email, "Please fill confirmPassword")){
		 if(lengthRestriction(password, 4, 32,"for confirmPassword")){
if( isAlphanumeric( email, "Please fill confirmPassword")){
		 
		 return true;
		}}}}  }}}} }}}}}}}}}}}}}}
	return false;
	
}
	
  
 </script> -->
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
	$uid=$_POST['uid'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$role=$_POST['type'];
	$status="1";
	$change="NO";
$sql_ins=mysql_query("INSERT INTO  account
						VALUES(
						     '$uid',
							'$username',
							'$password',
							'$role',
							'$status',
							'$change'
							)
					");

if($sql_ins==true){
	$sql_up=mysql_query("update user set Status='Hasaccount' where u_id='$uid'");
	
	echo "<fz>account created successfully</fz>";
	echo'<meta content="2;main.php?C_account_entry.php" http-equiv="refresh" />';
}
else
	$msg="<ft>Not inserted try again</ft>";
	
}
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$uid=$_POST['uid'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$role=$_POST['type'];
	$status=$_POST['status'];  
	$sql_update=mysql_query("UPDATE account SET
	                        
						    u_id='$uid',
							username='$username' ,
							password='$password',
							role='$role',
							status='$status'
						       WHERE
							u_id='$id'								
							");
	if($sql_update==true){
		echo "<fz>Account Updated Successfully</fz>";
	echo'<meta content="1;main.php?C_account_entry.php" http-equiv="refresh" />';
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
</style>

<?php

//if($opr=="upd")
//{
	//$sql_upd=mysql_query("SELECT * FROM  account WHERE u_id=$id");
	//$rs_upd=mysql_fetch_array($sql_upd);
	//list($y,$m,$d)=explode('-',$rs_upd['dob']);
//?>


<!-- for form Upadte-->

<!--<div id="top_style">
        <div id="top_style_text">
       <b> Account Update Form </b> </div>
        <!-- end of top_style_text-->
      <!-- <div id="top_style_button"> 
       		<form method="post">
            	<!--a href="?tag=view_clerk"><input type="button" name="btn_view" title="View employee" value="Back" id="button_view" style="width:70px;"  /></a-->
             <!-- <a href="?tag=view_account"><input type="button" name="btn_view" title="View account" value="Back" id="button_view" style="width:70px;"  /></a>
             </form>
       </div><!-- end of top_style_button-->
<!--</div><!-- end of top_style-->

 
<!--<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            <td style="color: blue;"><b>User id:</b></td>
            	<td>
                	<input type="text" name="uid" id="textbox" readonly value="<?php// echo $rs_upd['u_id'];?>"/>
                </td>
            </tr>
			<tr>
            <td style="color: blue"><b>User Name:</b></td>
                <td>
                	<input type="text" name="username"  id="textbox" readonly value="<?php// echo $rs_upd['username'];?> "/>
                </td>
            </tr>
			            
            <tr>
            <td style="color: blue"><b>Password:</b></td>
                <td>
                	<input type="password" name="password" id="textbox" value="<?php //echo $rs_upd['password'];?> "/>
                </td>
            </tr>
            <tr>
            	<td style="color: blue;"><b>Role:</b></td>
            	<td>
                	<input type="text" name="type" id="textbox" value="<?php //echo $rs_upd['role'];?>"/>
                </td>
            </tr>
			<tr>
            	<td style="color: blue;">User Status::</td>
            	<td>
                	<input type="text" name="status" id="textbox" readonly value="<?php //echo $rs_upd['status'];?>"/>
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

</div>-->  <!-- end of style_informatios -->

<?php	
//}

//else
//{
//?>
<!-- for form Register-->
	
<?php
if($opr=="CRA")
{
	$sql_upd=mysql_query("SELECT * FROM  user WHERE u_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>
<div id="top_style">
        <div id="top_style_text">
       <b> Account Creation Form</b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<!--a href="?tag=view_clerk"><input type="button" name="btn_view" title="View user" value="View_clerk" id="button_view" style="width:120px;"  /></a-->
             <a href="?tag=view_account"><input type="button" name="btn_view" title="View user" value="View" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table border="0" cellpadding="4" cellspacing="0">
	          <tr>
            	<td style="color: blue;"><b>User id:</b></td>
            	            	<td>
                	<input type="text" name="uid" id="textbox" readonly value="<?php echo $rs_upd['u_id'];?>"/>
                </td>
				
				<!--<td>
				
				
       <select name="uid" id="textbox">
		/*<?php
		//$sql="select * from user where Status='Noaccount'";
		//$recored=mysql_query($sql);
		//if($recored)
		//{
		//?>
		<option value=""></option>
		<?php
		//while($row=mysql_fetch_assoc($recored))
		//{
		?>
		<option value="<?php echo $row['u_id'];?>">
		//<?php echo $row["u_id"];?>
		</option>
		<?php
		//}
		//}
		//?>
		</select>
                </td>-->
            </tr>
        	<tr>
            	<td style="color: blue"><b>User Name:</b></td>
                <td>
				<input type="text" name="username" id="textbox" readonly value="<?php echo $rs_upd['fname'];?>"/>
                </td>
            </tr>
            <tr>
            	<td style="color: blue" ><b>Password:</b></td>
                <td>
             <input type="text" name="password" id="textbox" readonly value="<?php echo $rs_upd['lname'].'123#';?> "/>
                </td>
            </tr>
			<tr>
			   <td style="color: blue;"><b>Role:</b></td>
            	<td>
                	<input type="text" name="type" id="textbox" readonly value="<?php echo $rs_upd['role'];?>"/>
                </td>
                </tr>
                 <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_sub" value="Create" id="button-in"  />
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