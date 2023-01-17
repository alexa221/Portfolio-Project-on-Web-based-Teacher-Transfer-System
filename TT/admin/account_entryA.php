<script type='text/javascript'>
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
	
  
 </script> 
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
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$age=$_POST['age'];
	$Sex=$_POST['sex'];
	$officename=$_POST['officename'];
	$address=$_POST['addr'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];	
	$email=$_POST['email'];
	$type=$_POST['type'];  
$sql_ins=mysql_query("INSERT INTO  user 
						VALUES(
							NULL,
							'$f_name',
							'$l_name' ,
							'$age',
							'$Sex',
							'$officename',
							'$address',
							'$username',
							'$password',
							'$phone',
							'$email',
							'$type',
			                 NOW()
							)
					");
					if($sql_ins==true)
if($sql_ins==true){
	echo "<fz>ተጠቃሚ በተሳካ ሁኔታ ታክሏል</fz>";
	echo'<meta content="5;mainA.php?account_entryA.php" http-equiv="refresh" />';
}
else
	$msg="<ft>አልተካተተም እንደገና ይሞክሩ</ft>";
	
}
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$age=$_POST['age'];
	$Sex=$_POST['sex'];
	$officename=$_POST['officename'];
	$address=$_POST['addr'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];	
	$email=$_POST['email'];
	$type=$_POST['type'];  
	$sql_update=mysql_query("UPDATE user SET
	                        
						   fname='$f_name',
							lname='$l_name' ,
							age='$age',
							sex='$Sex',
							officename='$officename',
							adress='$address',
							username='$username',
							password='$password',
							phone='$phone',
							email='$email',
						      date =NOW()
						        WHERE
							u_id='$id'								
							");
	if($sql_update==true){
		echo "<fz>ተጠቃሚ በተሳካ ሁኔታ ተዘምኗል</fz>";
	echo'<meta content="5;mainA.php?account_entryA.php" http-equiv="refresh" />';
	}
	else
		echo "<ft>Update Failed</ft>";
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
    <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />

<title>ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት</title>
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

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM  user WHERE u_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> የተጠቃሚ ዝመና ቅጽ </b> </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<!--a href="?tag=view_clerk"><input type="button" name="btn_view" title="View employee" value="Back" id="button_view" style="width:70px;"  /></a-->
              <a href="?tag=view_manA"><input type="button" name="btn_view" title="ሰራተኞችን ለማየት" value="ለመመለስ" id="button_view" style="width:70px;"  /></a>
             </form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: blue;"><b>ስም:</b></td>
            	<td>
                	<input type="text" name="fname" id="textbox" value="<?php echo $rs_upd['fname'];?>"/>
                </td>
            </tr>
            
            <tr>
            <td style="color: blue;"><b>የአባት ስም:</b></td>
            	<td>
                	<input type="text" name="lname" id="textbox" value="<?php echo $rs_upd['lname'];?>"/>
                </td>
            </tr>
            <tr>
            	<td style="color: blue;"><b>እድሜ:</b></td>
            	<td>
                	<input type="text" name="age" id="textbox" value="<?php echo $rs_upd['age'];?>"/>
                </td>
            </tr>
			<tr>
            <td heigth="40"align="center" style="color: blue;"><b>ጾታ<span class="red"></b></span></td>
                <td ><select id="textbox" required="required" name="sex">
                <option value ="" selected>ይምረጡ</option>
                <option value ="ወንድ">ወንድ</option>
                <option value ="ሴት" >ሴት</option>
                </select><br></td>
                </tr>
			            <tr>
            <td style="color: blue;"><b>የመስርያ ቤት ስም:</b></td>
                <td>
                	<input type="text" name="officename" id="textbox" value="<?php echo $rs_upd['officename'];?>"/>
                </td>
            </tr>
        
			
			<tr>
            		<td style="color: blue;"><b>አድራሻ:</b></td>
            	<td>
                	<textarea name="addr" cols="22" rows="3"> <?php echo $rs_upd['adress'];?></textarea>
    			</td>
        	</tr>
          
			<!--tr>
            	<td>Position:</td>
            	<td>
                	<input type="text" name="position" id="textbox" value="<!--?php echo $rs_upd['position'];?>"/-->
                </td-->
            </tr-->

            
            <tr>
                <td colspan="2">
                	<input type="reset" value="አጽዳ" id="button-in"/>
                	<input type="submit" name="btn_upd" value="ቀይር" id="button-in"  />
                </td>
            </tr>
			
		</table>
   </div>
 
	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	            <tr>
            <td style="color: blue"><b>የተጠቃሚ ስም:</b></td>
                <td>
                	<input type="text" name="username"  id="textbox" value="<?php echo $rs_upd['username'];?> "/>
                </td>
            </tr>
            
            <tr>
            <td style="color: blue"><b>የይለፍ ቃል:</b></td>
                <td>
                	<input type="password" name="password" id="textbox" value="<?php echo $rs_upd['password'];?> "/>
                </td>
            </tr>  
            <tr>
            	<td style="color: blue"><b>ስልክ ቁጥር:</b></td>
            	<td>
                	<input type="text" name="phone" id="textbox" value="<?php echo $rs_upd['phone'];?>" />
                </td>
            </tr>
            <tr>
            
            <td heigth="40"align="center" style="color: blue;"><b>አቀማመጥ <span class="red"></b></span></td>
                <td ><select id="type" required="required" name="type">
                <option value ="" selected >ቦታን ይምረጡ </option>
                <option value ="አስተዳዳሪ">አስተዳዳሪ</option>
                <option value ="ሥራ አስኪያጅ">ሥራ አስኪያጅ</option>
                <option value ="ጸሐፊ">ጸሐፊ</option>

                </select><br></td>
             </tr>
            <tr>
            	<td style="color: blue"><b>ኢሜል:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="email"  id="textbox" value="<?php echo $rs_upd['email'];?> "/>
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
       <b> የአዲስ ተጠቃሚውች ቅጽ</b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<!--a href="?tag=view_clerk"><input type="button" name="btn_view" title="View user" value="View_clerk" id="button_view" style="width:120px;"  /></a-->
             <a href="?tag=view_manA"><input type="button" name="btn_view" title="ተጠቃሚዋችን ይመልከቱ" value="ይመልከቱ" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: blue;"><b>ስም:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="fname" pattern="[ሀ-ፐ ]{2,10}" title="እባክዎ ትክክለኛ ስም ያስገቡ "    size='20%' id="textbox"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: blue;"><b>የአባት ስም:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="lname" pattern="[ሀ-ፐ ]{2,10}" title="እባክዎ ትክክለኛ ስም ያስገቡ." id="textbox" required="required"/>
                </td>
            </tr>
            <tr>
            	<td style="color: blue;"><b>ዕድሜ:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="age" pattern="[0-9 ]{2,}" title="Please enter 2 digit no." maxlength="3" id="textbox" required="required"/>
                </td>
            </tr>
			<tr>
			<td heigth="40"align="center" style="color: blue;"><b>ጾታ<span class="red"></b></span></td>
            	<td ><select id="textbox" required="required" name="sex">
				<option value ="" selected>ይምረጡ</option>
				<option value ="ወንድ">ወንድ</option>
				<option value ="ሴት" >ሴት</option>
            	</select><br></td>
                </tr>
				<tr>
            	<td style="color: blue;"><b>የመስሪያ ቤት ስም:</b></td>
                <td>
                	<input type="text" name="officename" id="textbox" pattern="[ሀ-ፐ ]{2,10}" value="<?php echo $rs_upd['officename'];?>"/>
                </td>
            </tr>
			<tr>
            	<td style="color: blue;"><b>አድራሻ:</b></td>
            	<td>
                	<textarea style="color: blue" name="addr" cols="22" rows="2" pattern="[ሀ-ፐ ]{2,10}" title="እባኪዋ ትክክለኛውን ኢሜል ያስገቡ." required="required"></textarea>
    			</td>
        	</tr>
				
				
			<tr>
                <td colspan="2">
                	<input type="reset" value="ሰርዝ" id="button-in"/>
                	<input type="submit" name="btn_sub" value="ይመዝገቡ" id="button-in"  />
                </td>
            </tr>
			</table>
			</div>
			<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: blue"><b>የተጠቃሚ ስም:</b></td>
                <td>
                	<input type="text"  style="color: blue" name="username" pattern="[ሀ-ፐ ]{2,10}"  id="textbox" value=""/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: blue" ><b>የይለፍ ቃል:</b></td>
                <td>
                	<input type="password" style="color: blue"  name="password" id="textbox" value=""/>
                </td>
            </tr>
             
             <tr>
	      <td style="color: blue;"><b>ስልክ ቁጥር:</b></td>
	      <td><input type="text" style="color: blue" name="phone" pattern="[0-9]{10,}" title="እባክዎን 10 አኃዝ ቁጥር ያስገቡ." maxlength="10" id="textbox" required="required"/></td>
        </tr>
			<tr>
			
			<td heigth="40"align="center" style="color: blue;"><b>አቀማመጥ <span class="red"></b></span></td>
            	<td ><select id="type" required="required" name="type">
				<option value ="" selected >ቦታን ይምረጡ </option>
				<option value ="አስተዳዳሪ">አስተዳዳሪ</option>
				<option value ="ሥራ አስኪያጅ">ሥራ አስኪያጅ</option>
				<option value ="ጸሐፊ">ጸሐፊ</option>

            	</select><br></td>
             </tr>
	
			<tr>
            	<td style="color: blue;"><b>ኢሜል:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="email"  id="textbox"  pattern="^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,32}$" required="required"/>
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