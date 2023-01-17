<?php
session_start();
include("conection/connect.php");
?>

<html>

<head>
<link rel="stylesheet" a href="new_css/css/font-awesome.min.css">
<link rel="stylesheet" a href="css/solid.css">
<script src="js/ism-2.1.js"></script>
<style>
#container1 {
 position: relative;
 width: 200px;
 height: 420px;
 background: lighter;
 margin-top: -15px;
 box-shadow: 5 4px 7px rgba(0, 0, 0, .1);
 background-color: #aeaeae;
 border-right: 5px solid #3a98c5;
 border-left: 5px solid #3a98c5;
 -webkit-box-shadow: 3px 7px 2px #000;
     -moz-box-shadow: 3px 7px 1px #000;
     -ms-box-shadow: 3px 7px 1px #000;
} 
.form {
 margin: 0 auto;
 margin-top: 20px;
 
} 
.label1 {
 color: #020200;
 display: inline-block;
 margin-left: 18px;
 padding-top: 10px;
 font-size: 17px;
}
.input {
 font-family: "Helvetica Neue", Helvetica, sans-serif;
 font-size: 12px;
 outline: none;
}
 
.input[type=text],
.input[type=password] {
 color: #000;
 padding-left: 30px;
 margin: 10px;
 margin-top: 12px;
 margin-left: 18px;
 width: 169px;
 height: 38px;
 border: 1px solid #41b47a;
 border-radius: 10px;
 -webkit-transition: all .4s ease;
 -moz-transition: all .4s ease;
 transition: all .4s ease;
 font-family: "Times New Roman", Times, serif;
font-size:18px;
}
 
.input[type=text]:hover,
.input[type=password]:hover{
 border: 1px solid #41b47a;
 box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #D6AE58;
}
 
.input[type=text]:focus{
 border: 1px solid #a8c9e4;
 box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
}
.input[type=password]:focus {
 border: 1px solid #a8c9e4;
 box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
}


.btn{
  background:#3594D2;
  padding-top:2px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  padding-left: 10px;
  margin-top:13px;
  margin-bottom:20px;
  float:left;
  margin-left:26px;
  font-weight:800;
  font-size:15px;

}
.btn:hover{
  background:#0b2231; 
}
.btn[type=submit]
{
padding-left:10px;	
}
.user{
	width: 120px;
	height: 120px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	margin-left:24px;

}
.username i{
	position:absolute;
	left:24px;
	top:146px;
	padding:9px,8px;
	color:dodgerBlue;
	font-size:25px;
}
.password i{
	position:absolute;
	left:24px;
	top:208px;
	padding:9px,8px;
	color:dodgerBlue;
	font-size:20px;
}
.login i{
	position:absolute;
	left:20px;
	top:268px;
	padding:9px,8px;
	color:white;
	font-size:20px;
}
</style>
</head>
<body>
<h2 style="text-align:center;background-color:green;border:2px solid blue; border-radius:20%"> LOGING HERE</h2>
<div id="container1">
<form  method="POST" action="">
		<table class="log_table" >
		<tr bgcolor="#000000"><br><th colspan="2"><font color="#ffffff" style="text-decoration:bold;">Did You forget Your Password?</font></th></tr>
		<tr>
		 <td>Enter Email</td><td><input type="text" name="email" id="user-email" class="input-field" style="height: 30px;width:100px" required/>&nbsp;</td>
		</tr>
		<tr><td></td><td><input type="submit" name="login" id="forgot-password" class="form-submit-button" value="Search" style="height: 30px;width: 150px; background-color: #20B2AA;color: black;"/> &nbsp;&nbsp;&nbsp;&nbsp;</td></tr><br/>
		<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		 
		</td>
		</tr>
		</table>
		</form>
		<?php

		 require 'phpmailer/phpmailer/src/Exception.php';
         require 'phpmailer/phpmailer/src/PHPMailer.php';
         require 'phpmailer/phpmailer/src/SMTP.php';
		?>
		<?php
	
		if ( isset($_POST['login']))
			{
			$em=$_POST['email'];
		   $result=mysqli_query($conn,"select * from user where email='$em'");	
		   $u=mysqli_num_rows($result);
		   if($u>0){
			  $newpassword=  rand(100000, 999999);
       if($resetData=  mysqli_fetch_assoc($result)){
           $to=$resetData['email'];
		   $uid=$resetData['u_id'];
       }
       $subject="Password Reset Request";
       $message="Your new password is ".$newpassword;
       //$headers="From: ".$from;
      // mail($to,$subject,$message,$headers);
       mysqli_query($conn,"UPDATE account SET password='$newpassword' WHERE u_id='$uid'");
//       ------------------------------------
	   // header('Location:'.$url.''); 
		 require 'PHPMailer/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 2;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = "ssl";
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "meharics2011@gmail.com";
   $mail ->Password = "meh247cs";
   $mail ->SetFrom("meharics2011@gmail.com");
   $mail ->Subject = $subject;
   $mail ->Body = $message;
   $mail ->AddAddress($to);

   if(!$mail->Send())
   {
	   echo "<script>alert('Your new password was not sent !')</script>";
	   echo"".$mail->ErrorInfo;
   }
   else
   {
       echo "<script>alert('Your new password was sent by this email address! open your gmail account and recover it !')</script>";
       echo "<script>window.location='index.php';</script>"; 
   }
		
   }  else {
       echo "<script>alert('There is no an account with the Email you provided!')</script>";
       echo "<script>window.location='index.php';</script>"; 
   }
  
			}	  
		?>
		
		</div>
<div style=" margin-left:3px;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" >
<marquee scrollamount="05" direction="up" height="150px" onmouseover="this.stop()" onmouseout="this.start()">
<p style="font-size:24px;color:blue;text-align:center"> <i>TTMS <br>please login into the syste by insert username and password</i></p>
</marquee>
</div>
</body>
  </html>
