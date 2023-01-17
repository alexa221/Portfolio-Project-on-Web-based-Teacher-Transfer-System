<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysqli_select_db($connection,'ttms');
?>
<div class="modal-header">
	<font  class="" id="inde_admin_signup">Change Password</font>
    </div>
<div class="navbar-inner">
						<?php
  	
if (isset($_POST['change_password'])) 
  	{	
		$username = $_POST['username'];	
		$priv_password = md5($_POST['priv_password']);	
		$new_password = md5($_POST['new_password']);
		$compsswd = md5($_POST['compsswd']);
	$resulsasst = mysqli_query($connection,"SELECT * FROM account WHERE username = '$username'  and   password='$priv_password' ");
	$counssst=mysqli_num_rows($resulsasst);
		if($counssst == 0){
		echo '<div class="alert alert-dismissable alert-error"><strong>';
			echo "Opration Faild Please Insert Your Information Correctly ! ";
			echo'<meta content="5;main.php?tag=chpass.php" http-equiv="refresh" />';
			echo '</strong></div>';
		} else{
		
			$passw=$new_password;
		$chack = mysqli_query($connection,"UPDATE  account SET password='$new_password' WHERE username = '$username'");
		echo '<div class="alert alert-dismissable alert-success"><strong>';
		echo '<font color="green" size="3">'."Successfully Changed!&nbsp;&nbsp;".'<font style="background-color:#fff;" color="#000" size="3">'."&nbsp;".$new_password."&nbsp;".'</font>'."&nbsp;&nbsp;Is your new password".'<br>'.'</font>';
		echo'<meta content="2;main.php?tag=home" http-equiv="refresh" />';
		echo '</strong></div>';
		}
		
			
	}
		?>
		
<!--table border="0" cellpadding="10" cellspacing="0"-->
<head>
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
</head>

	    
            
<div id="style_informations">			 
	<form method="POST" action="">
	   <div>
	   <?php
$sql=mysqli_query($connection,"select *  from account where u_id='$id_session'");
$row=mysqli_fetch_array($sql);
$u_id=$row['u_id'];
?>
<script>
function passFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
	  <table border="0" cellpadding="4" cellspacing="0">
	   <!--<tr><td colspan="2">  <img height="150" width="400px" src="picture/admin.png"/>  </td>   </tr> --> 
	<tr>
			<td style="color: black;"><b>User Name</b></td>
			<td>
                	<input type="text" style="color: blue;width:200px;height:25px" name="username" readonly value="<?php echo $row['username'];?>"   required="required"/>
                </td>
            </tr>
			<tr>
			<td style="color: black;"><b>Current Password</b></td>
			<td>
               <input type="password" style="color: blue;width:200px;height:25px" name="priv_password"  id="myInput" required="required"/>
                </td>
				<td>
				<input type="checkbox" onclick="passFunction()" >Show Password 
				</td>
            </tr>
			<tr>
			<td style="color: black;"><b>New Password</b></td>
			<td>
                	<input type="password" style="color: blue" name="new_password"  title="Please enter a valid name." id="textbox" required="required"/>
                </td>
            </tr>
			<tr>
			<td style="color: black;"><b>Confirm Password</b></td>
			<td>
               <input type="password" style="color: blue" name="compsswd"  title="Please enter a valid name." id="textbox" required="required"/>
               </td>
            </tr>
<tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="change_password" value="Change " id="button-in"  />
                </td>
            </tr>
			</table>
			</div>
</form>
</div>
</div>