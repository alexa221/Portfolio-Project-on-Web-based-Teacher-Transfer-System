
<html>
<?php
session_start();
include("conection/connect.php");
?>
<head>
<link rel="stylesheet" a href="new_css/css/font-awesome.min.css">
<link rel="stylesheet" a href="css/solid.css">
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
.pass{
margin-left:165px;	
margin-top:-32px;
}
</style>
</head>
<body>
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
<h2 style="text-align:center;background-color:green;border:2px solid blue; border-radius:20%"> LOGING HERE</h2>
<div id="container1">
     <img class="user"  src="image/login.jpg"/><br><br><br><br><br><br>
        <form action="" method="post" class="form">
		<!--<label class="label1" for="username">Username:</label>-->
		<div class="username">
          <input type="text"  id="username" name="un"  placeholder="Enter username" required class="input">
		   <i class="fa fa-user" aria-hidden="true"></i>
		   </div>
           <!-- <label for="password" class="label1">Password:</label>-->
		   <div class="password">
        <input type="password" id="myInput" name="pass" placeholder="Password" required class="input" autocomplet="on">
		  <i class="fa fa-key" aria-hidden="true"></i>
		  <input type="checkbox" onclick="passFunction()" title="show password" class="pass">
		  </div>
		  <div class="login">
<input type="submit" id="submit" class="btn" name="login" value="Login" style="height: 34px; margin-left: 15px; width: 82px; padding-left:21px; border: 3px double rgb(204, 204, 204);"/>
   <i class="fa fa-sign-in-alt" aria-hidden="true"></i>
</div>
<input type="reset" id="reset" class="btn" name="reset" value="Reset" style="height: 34px; margin-left: 15px; width: 80px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
<br><br><br><br>
<!--<a href="chang_password_index.php"><b>Forget Your Password?</b></a>-->
</form>
<?php
if(isset($_POST["login"]))	
{
	$un=$_POST["un"];
	$pass=$_POST["pass"];
	$un=stripcslashes($un);
	$pass=stripcslashes($pass);
	$un=mysqli_real_escape_string($conn,$un);
	$pass=mysqli_real_escape_string($conn,$pass);
	$pass=md5($pass);
    $sql="select * from account where username='$un' and password='$pass' and status='1'";
	$matchfound=mysqli_query($conn,$sql);
	$userexist=mysqli_num_rows($matchfound);
	if($userexist>0){
	while($row=mysqli_fetch_assoc($matchfound))	
	{
   $u_id=$row["u_id"];
   $pw=$row['password'];
   $un=$row['username'];
   $role=$row['role'];
   $status=$row["status"];	
	}
	$sqll="select * from user where u_id='$u_id'";
   $matchfound1=mysqli_query($conn,$sqll);	
	while($row1=mysqli_fetch_assoc($matchfound1))
	{
   $u_id=$row1["u_id"];
	}		
	    $_SESSION['id']=$u_id;
		$_SESSION['sun']=$un;
		$_SESSION['spw']=$pw;
		$_SESSION['srole']=$role;
        $_SESSION['status']=$status;		
		if($role=="admin" &&  $status=="1")
		echo "<script>window.location='admin/main.php'</script>";
		else if($role=="zmersu" && $status=="1")
		echo "<script> window.location='zmersu/main.php'</script>";
	  else if($role=="wmersu" && $status=="1")
	   echo "<script> window.location='wmersu/main.php'</script>";
 	  else if($role=="director" && $status=="1")
	  echo "<script> window.location='director/main.php'</script>";
 	  else if($role=="teacher" && $status=="1")
	 echo "<script> window.location='teacherT/main.php'</script>";
		}
      else{
	  echo "<script>alert('Invalid Username and Password! Try again.');window.location='index.php'</script>";
}
}
?>
</div> 
<div style=" margin-left:3px;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" >
<marquee scrollamount="05" direction="up" height="150px" onmouseover="this.stop()" onmouseout="this.start()">
<p style="font-size:24px;color:blue;text-align:center"> <i>TTMS <br>please login into the system by insert username and password</i></p>
</marquee>
</div>
</body>
  </html>
