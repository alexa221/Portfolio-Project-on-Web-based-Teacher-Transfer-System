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
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$age=$_POST['age'];
	$Sex=$_POST['sex'];
	$wcode=$_POST['wcode'];
	$type=$_POST['type'];
	$status="Hasaccount";
	$usernam=$f_name.'/'.$uid;
	$password=md5($l_name);
	$status2="1";
$sql_ins=mysqli_query($conn,"INSERT INTO  user
						VALUES(
							'$uid',
							'$f_name',
							'$l_name',
							'$age',
							'$Sex',
							'$wcode',
							'$type',
							'$status',
							 NOW()
							)");
$sql2=mysqli_query($conn,"INSERT INTO account VALUES('$uid','$usernam','$password','$type','$status2')");
if($sql_ins==true && $sql2==true){
	echo "<fz>User Register successfully</fz>";
	echo'<meta content="2;main.php?Register_user.php" http-equiv="refresh" />';
}
else
$msg="<ft>Not inserted try again</ft>";

//die("Connect Error: " . mysqli_connect_error());
}
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$age=$_POST['age'];
	$Sex=$_POST['sex'];
	$woreda=$_POST['wcode'];  
	$type1=$_POST['role'];
	//$user=mysqli_query($conn,"select *from user");
	//$row2=mysqli_fetch_array(user);
	//$type=$row2['role'];
	if($type1=='teacher'||$type1=='director')
	{
	echo"<i><b>You can not update</b></i>";
	echo'<meta content="3;main.php?account_entry.php" http-equiv="refresh" />';
	}
	else{
	$sql_update=mysqli_query($conn,"UPDATE user SET
						    fname='$f_name',
							lname='$l_name' ,
							age='$age',
							sex='$Sex',
							wcode='$woreda',
							role='$type1'
						        WHERE
							u_id='$id'								
							");
	if($sql_update==true){
		echo "<fz>user has been Updated Successfully</fz>";
	echo'<meta content="3;main.php?account_entry.php" http-equiv="refresh" />';
	}
}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<link rel="stylesheet" type="text/css" href="font_teach/css/solid.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/brands.css">
<title>Teacher transfer  system</title>
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
#Reg_user{
	border-top:6px solid royalblue;
	border-bottom:6px solid royalblue;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
		border-bottom-left-radius:10px;
	  border-bottom-right-radius:10px;
	margin-left:30px;
    padding-left:20px;
    -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
    box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
}
.fa-plus-circle{
	color:green;
}
.fa-check-circle{
	color:royalblue;
}
</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysqli_query($conn,"SELECT * FROM  user WHERE u_id=$id");
	$rs_upd=mysqli_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> User Update Form </b> </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<!--a href="?tag=view_clerk"><input type="button" name="btn_view" title="View employee" value="Back" id="button_view" style="width:70px;"  /></a-->
              <a href="?tag=view_man"><input type="button" name="btn_view" title="View employee" value="Back" id="button_view" style="width:70px;"  /></a>
             </form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
		  <!--<tr>
          <td style="color: blue;"><b>User ID:</b></td>
           <td>
            <input type="text" name="uid" id="textbox" readonly value="<?php echo $rs_upd['u_id'];?>"/>
            </td>
            </tr>-->
        	<tr>
            	<td style="color: blue;"><b>First Name:</b></td>
            	<td>
                <input type="text" name="fname" id="textbox" value="<?php echo $rs_upd['fname'];?>"/>
                </td>
            </tr>
            <tr>
            <td style="color: blue;"><b>Last Name:</b></td>
            <td>
           <input type="text" name="lname" id="textbox" value="<?php echo $rs_upd['lname'];?>"/>
           </td>
            </tr>
            <tr>
            	<td style="color: blue;"><b>Age:</b></td>
            	<td>
                <input type="text" name="age" id="textbox" value="<?php echo $rs_upd['age'];?>"/>
                </td>
            </tr>
			<tr>
            	<td style="color: blue;">sex:</td>
            	<td>
				<select id="textbox" required="required" name="sex">
				 <option value="<?php echo $rs_upd['sex'];?>"><?php echo $rs_upd['sex'];?></option>
				  <option value="male">male</option>
				    <option value="femal">female</option>
			
            	</select>
               <!-- <input type="text" name="sex" id="textbox" value="<?php echo $rs_upd['sex'];?>"/>-->
                </td>
            </tr>
        	<tr>
			<td style="color: black;text-align:right"><b>Woreda Code:</b></td>
			<td>
           <input type="text" name="wcode" id="textbox" value="<?php echo $rs_upd['wcode'];?>"/>
			</td>
        	</tr>
			<tr>
			<!--<td style="color: black;text-align:right"><b>Role:</b></td>-->
			<td>
           <input type="hidden" name="role" id="textbox" value="<?php echo $rs_upd['role'];?>"/>
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
      <p style="margin-top:4px;padding-left:100px"><b> <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Register user  Form</b></p>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<!--a href="?tag=view_clerk"><input type="button" name="btn_view" title="View user" value="View_clerk" id="button_view" style="width:120px;"  /></a-->
             <a href="?tag=view_man"><input type="button" name="btn_view" title="View user" value="View" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table border="0" width="385px"  id="Reg_user"cellpadding="4" cellspacing="0">
	     <tr>
            	<td style="color: black;text-align:right"><b>User ID:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="uid"  id="textbox" value="<?php echo $uid;?>"/>
                </td>
            </tr>
        	<tr>
            	<td style="color: black;text-align:right"><b>First Name:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="fname" pattern="[a-zA-Z]{4,14}" required x-moz-errormessage="Please Enter Letter Only Above 4 characters" title="Please Enter Letter Only Above 4 characters "   size='20%' id="textbox"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black;text-align:right"><b>Last Name:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="lname" pattern="[A-z ]{4,14}" title="Please enter a valid name."  id="textbox" required="required"/>
                </td>
            </tr>
            <tr>
            	<td style="color: black;text-align:right"><b>Age:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="age" pattern="[0-9 ]{2,}" title="Please enter 2 digit no." maxlength="3" id="textbox" required="required"/>
                </td>
            </tr>
			<tr>
			<td style="color: black;text-align:right"><b>sex:</b></td>
            	<td ><select id="textbox" required="required" name="sex">
				<option value ="" selected>please select...</option>
				<option value ="male">Male</option>
				<option value ="female" >female</option>
            	</select><br></td>
                </tr>
				<tr>
            	<td style="color: black;text-align:right"><b>Woreda Code:</b></td>
                <td>
				<select  name="wcode" style="color:blue;" id="textbox" class="wcode" >
				 <option selected="selected" value="">Select Woreda</option>
				<?php
				$wcode="SELECT *FROM woreda";
				$recored=mysqli_query($conn,$wcode);
		         if($recored)
				 {
				?>
				<!--<option value=""></option>-->
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
			<td  style="color: black;text-align:right"><b>Role:<span class="red"></b></span</td>
			<td ><select id="textbox" required="required" name="type">
			<?php $role=array("Selectrole","admin","zmersu","wmersu");
			foreach($role as $i) echo"<option value=$i>$i</option>";
			?></select><br></td>
             </tr>
			<tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_sub" value="Register" id="button-in"  />
                </td>
            </tr>
			</table>
			</div>
			<div>
    	<!--<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: blue"><b>User Name:</b></td>
                <td>
                	<input type="text"  style="color: blue" name="username"  id="textbox" value=""/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: blue" ><b>Password:</b></td>
                <td>
                	<input type="password" style="color: blue"  name="password" id="textbox" value=""/>
                </td>
            </tr>
             
             <tr>
	      <td style="color: blue;"><b>Phone:</b></td>
	      <td><input type="text" style="color: blue" name="phone" pattern="[0-9]{10,}" title="Please enter 10 digit no." maxlength="10" id="textbox" required="required"/></td>
        </tr>
			<tr>
			
			<td heigth="40"align="center" style="color: blue;"><b>position<span class="red"></b></span</td>
            	<td ><select id="type" required="required" name="type">
				<option value ="" selected >select position</option>
				<option value ="admin">admin</option>
				<option value ="Manager">manager</option>
				<option value ="Clerk">clerk</option>
            	</select><br></td>
             </tr>-->
	
			
       
            
			
	  </table>
    </div>
 	
    </form>

</div><!-- end of style_informatios -->

<?php
}
?>
<script>

</script>
</body>
</html>