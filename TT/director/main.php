<?php
	include ('session.php');
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>teacher transfer system</title>

<link rel="stylesheet" type="text/css" href="css/main_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>
<link rel="stylesheet" href="css/w3css.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/brands.min.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/solid.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/brands.css">
<style>
.dropbtn {
    background-color: transparent;
    color: white;
    margin-top: 8px;
    margin-right: 50px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
   
    min-width: 105px;
    text-align: left;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color:white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    background: linear-gradient(green,black,red);
}
.dropdown-content p {
    color:white;
   
    text-decoration: none;
    display: block;
    text-align: center;
    
}

.dropdown-content a:hover {
	background:linear-gradient(red,green, #030507);
	color: white
	}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: transparent;
}
</style>
</head>

<body>

   <div id="top">
      <div id="user">
      <table border="0" width="100%" height="100%">
      <tr><td width="20%"><img src="picture/t10.png" width="100%" height="68%" style="border:0px solid red; border-bottom-right-radius:20px; border-bottom-left-radius:20px"/></td>
	  <td><h1 style="text-align:center "> ONLINE TEACHER TRANSFER MANAGEMENT SYSTEM</h1>	</td>
			<td>		
        <div class="w3-dropdown-click">
        
  <button onclick="myFunction()" class="w3-button w3-black"><b> <img align="center" width="50px" height="50px"  src="picture/employee.png"/>
<?php
								include('conection/connect.php');
								$user_query=mysqli_query($conn,"select *  from account where u_id='$id_session'")or die(mysql_error());
								$row=mysqli_fetch_array($user_query); {
								$uid=$row['u_id'];
							?>
							
								 <?php echo $row['username']; ?>&nbsp;&nbsp;<img align="center" src="picture/nav_bullet.jpg"/>
								
							
<?php } ?>
							
								

						</b></button>
  <div id="Demo" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
    
    <a href="logout.php"  style="background:linear-gradient(red,green,green,red);"  class="w3-bar-item w3-button"><img align="center" width="25px" height="20px" src="picture/logout.png"/><b> Log Out</b></a>
  </div>
</div>
</td></tr>
</table>    
      </div>
      
</div>

<div id="admin">
	
        <div id="lmain">
               
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="home"><i class="fa fa-home"></i>&nbsp;HOME</a><br />
                	</div>
                    <div>
                    	<a href="main.php?tag=view_profile" class="customer" title="print report"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;View Profile</a>
                    </div>
                    <!--<div>
                    	<a href="main.php?tag=printing" class="customer" title="print report">&nbsp;Print Report</a>
                    </div>-->
					<div>
                    	<a href="main.php?tag=chpass" class="customer" title="change pass"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Change Password</a>
                    </div>

        	  <?php    			  
  $sql=mysqli_query($conn,"select *  from teacher where t_id='$uid'");
while($r=mysqli_fetch_array($sql)){
$u_id=$r['t_id']; 
 $wcode=$r['wcode']; 
 $school=$r['sid'];
 $sql2=mysqli_query($conn,"select * from school where sid='$school'");
 $row2=mysqli_fetch_array($sql2);
$sname=$row2['sname'];
 }
        ?>             
                    
                    
                    
                    
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain" >
    	<div id="pic_manu">
    	<table border="0" width="100%" height="47px" >
    	<tr>
    	<td width="100px">
		<img src="picture/employee.png" height="60px"  hspace="30px" /> 
		</td>
		<td>
		<h3 align="left" style="color:black">WELCOME TO&nbsp;<font color="blue"><?php echo  $sname;?></font> SCHOOL DIRECTOR SITE</h3>
		</td>
		</tr>
		</table>
             </div><!--end of pic_manu -->
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
                <li id="li_menu"><a href="main.php?tag=send_request" class="sales"><i class="fa fa-paper-plane"></i>&nbsp;Send Request</a>
                    <!--<ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=send_request" class="sales">Send Request</a></li>
                        <li id="li_submenu"><a href="main.php?tag=view_request" class="stocks">View Request</a></li>
                    </ul>-->
                </li>
                <li id="li_menu"><a href="main.php?tag=view_dire_form" class="sales">view form</a>
                </li>
				     
               <li id="li_menu"><a href="#?tag=view_result">View Result&#9660;</a>
			   <ul>
			   <li id="li_submenu">
              <a href="main.php?tag=view_result" class="sales">To school</a></li>
			  <li id="li_submenu">
              <a href="main.php?tag=view_out" class="sales">Out school</a></li>
			   </ul>
                </li> 
                
      </div><!--end of menu2--> 
            
			
			
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
				
							include("home.php");
						   elseif($tag=="view_result")
                            include("view_result.php");
                            elseif($tag=="send_request")
                            include("send_request.php");
							
							elseif($tag=="view_out")
                            include("view_out.php");
							
							elseif($tag=="view_request")
                            include("view_request.php");
							
							elseif($tag=="view_profile")
                            include("view_profile.php");
                
							 elseif($tag=="view_dire_form")
                            include("view_dire_form.php");
							
                            elseif($tag=="route_entry")
                            include("route_entry.php");
                            
                            elseif($tag=="bus_entry")
                            include("bus_entry.php");
							
                            elseif($tag=="bus_entry(dir)")
                            include("bus_entry(dir).php");
                            
                            elseif($tag=="view_bus")
                            include("view_bus.php");
                            
                            elseif($tag=="view_schedule")
                            include("view_schedule.php");
                            
                             elseif($tag=="view_comment")
                            include("view_comment.php");
                            
                             elseif($tag=="view_reservation")
                            include("view_reservation.php");
                            
                             elseif($tag=="check_account")
                            include("check_account.php");

                            elseif($tag=="printt")
                            include("Printt.php");
							 elseif($tag=="printticket")
                            include("Printticket.php");
                            
                            elseif($tag=="printt1")
                            include("Printt1.php");
                            
                            elseif($tag=="printing")
                            include("Print.php");
							
							 elseif($tag=="chpass")
                            include("changepass.php");
							
							elseif($tag=="user_entry")
                            include("User_Entry.php");
                            
                            elseif($tag=="editstatus")
                            include("editstatus.php");
                            
                            elseif($tag=="execeditstatus")
                            include("execeditstatus.php");
                            
                            elseif($tag=="seats")
                            include("seats.php");
                        	/*$tag= $_REQUEST['tag'];
							
							if(empty($tag)){
								include ("Customer_Entryphp");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens --> 
    		
     </div><!--end of rmain -->
    </div><!--end of admin -->
    <div id="footer">
     	<h3 align="center" ><b> &copy; Copyright-<?php echo date("Y");?> West Gojjam Education Office | All Rights Reserved</b></h3><br />
     </div> 
<script>
function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>