
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
<title>online teacher transfer management system</title>

<link rel="stylesheet" type="text/css" href="css/main_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/> 
<link rel="stylesheet" href="css/w3css.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/solid.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/brands.css">
<style>
.fa-bell{
	color:#d0eb3d;
	font-size:14px;
	margin-left:0px;
	left:0;
}
.fa-home{
color:#d0eb3d;
}
.fa-key {
color:#d0eb3d;	
}
.fa-eye{
color:#d0eb3d;	
}
</style>
</head>

<body>


   <div id="top">
      <div id="user">
      <table border="0" bordercolor="red"  width="100%" height="100%">
      <tr><td width="20%"><img src="picture/t10.png"  width="100%" height="67%"/></td>
	  <td><h1 style="text-align:center ">ONLINE TEACHER TRANSFER MANAGEMENT SYSTEM</h1>	</td>
			<td>		
        <div class="w3-dropdown-click">
  <button onclick="myFunction()" class="w3-button w3-black"><b> <img align="center" width="50px" height="50px"  src="picture/admin.png"/>
<?php
								include('conection/connect.php');
								$user_query=mysqli_query($conn,"select *  from account where u_id='$id_session'")or die(mysql_error());
								$row=mysqli_fetch_array($user_query); {
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
               	<div >
				 <a href ="?=Time"  class="customer"><?php include("include/Time.php") ?></a>
				</div>
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="home"><i class="fa fa-home"></i>&nbsp;Home</a><br />
                	</div>
					<!--div>
                    	<a href="main.php?tag=printing" class="customer" title="print report">&nbsp;Print Report</a>
                    </div-->
                       <div>
                    	<a href="main.php?tag=view_man" class="customer" title="view"><i class="fa fa-eye"></i>&nbsp;View All User</a>
                    </div>
										
					<?php
        $query = mysqli_query($conn,"select * from user where status='Noaccount'")or die(mysql_error());
         $coun = mysqli_num_rows($query);
         if($coun>='1')
              ?>
					 <!--<div style="text-indent:20px">

       <a href="main.php?tag=view_noaccount"  title="view">Request Account<i class="fa fa-bell"></i><span ><font size="4px" ><?php echo $coun?></font></span></a>
			 
                    </div>-->
                      <div>	  
                    	<a href="main.php?tag=view_account" class="customer" title="view"><i class="fa fa-eye"></i>&nbsp;View account</a>
                    </div>
					   <div>
			<?php
        $query = mysqli_query($conn,"select * from account where status='0'")or die(mysql_error());
         $coun1 = mysqli_num_rows($query);
         if($coun>='1')
              ?>  
                    	<a href="main.php?tag=view_block" class="customer" title="view"><i class="fa fa-eye"></i>&nbsp;View Block<font size="4px" color="#d0eb3d">(<?php echo $coun1?>)</font></a>
                        </div>
                         <div>
                    	<a href="main.php?tag=chpass" class="customer" title="change pass"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;ChangePassword</a>
                    </div>

                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    	<table border="0" width="100%" height="47px" >
    	<tr>
    	<td width="100px">
		<a href="main.php?tag=user_entry" class="sales" title="Add User"><img src="picture/admin.png" height="60px"  hspace="30px" /> </a>
		</td>
		<td>
		<h3 align="left" style="color:black">WELCOME TO ADMIN SITE</h3>
		</td>
		
		</tr>
		</table>
             </div><!--end of pic_manu -->
        
         <div id="menu2">
                
                <div style="width:4px;  height:37px; padding:0px; margin:0px; float:left;"></div>
				
                <li id="li_menu"><a href="main.php?tag=Register_user"><i class="fa fa-registered" aria-hidden="true"></i>&nbsp;Register User</a>
				 <!--<li id="li_menu"><a href="main.php?tag=C_account_entry">Create account</a>-->
				 <li id="li_menu"><a href="main.php?tag=view_noaccount" title="view">Request Account&nbsp;<i class="fa fa-bell"></i><span style="" ><font size="4px" ><?php echo $coun?></font></span> </a>
                  <li id="li_menu"><a href="main.php?tag=backup_fiel"><i class="fa fa-floppy" ></i>Data backup</a> 
                </li>
				      
      </div><!--end of menu2--> 
        
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
						
                            elseif($tag=="generate")
                            include("generate.php");
							
							elseif($tag=="backup_fiel")
                            include("backup_fiel.php");
							
							elseif($tag=="Time")
                            include("Time.php");
							
							elseif($tag=="view_man")  
                            include("view_man.php");
							
							elseif($tag=="view_block") 
                            include("view_block.php");
							
							elseif($tag=="view_noaccount") 
                            include("view_noaccount.php");
							elseif($tag=="view_manager")
                            include("view_manager.php");
							
                            elseif($tag=="Register_user")
                            include("Register_user.php");
							  elseif($tag=="C_account_entry")
                            include("C_account_entry.php");
							 elseif($tag=="view_account")
                            include("view_account.php");
							elseif($tag=="update")
                            include("update_account.php");
							
							elseif($tag=="managercc")
                            include("managercc.php");
							
							elseif($tag=="reg")
                            include("reg.php");
                
				            elseif($tag=="reg")
                            include("reg.php");
                
							 elseif($tag=="view_route")
                            include("view_route.php");
							
                            elseif($tag=="route_entry")
                            include("route_entry.php");
                            
                            elseif($tag=="bus_entry")
                            include("bus_entry.php");
                            
                            
                            elseif($tag=="view_bus")
                            include("view_bus.php");
                            
                             elseif($tag=="view_comment")
                            include("view_comment.php");
                            
                             elseif($tag=="view_reservation")
                            include("view_reservation.php");
                            
                             elseif($tag=="check_account")
                            include("check_account.php");
                            
                            elseif($tag=="chpass")
                            include("admin_passchange.php");

                            elseif($tag=="printing")
                            include("Print.php");
							
							
                            
                            elseif($tag=="seats")
                            include("seats.php");
                            
                            elseif($tag=="passenger")
                            include("passenger.php");
                            
                            elseif($tag=="clerk")
                            include("clerk.php");
                            
                            elseif($tag=="bus")
                            include("bus.php");
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
     	<h3 align="center" ><b> &copy; Copyright-<?php echo date("Y");?> West Gojjam education Office | All Rights Reserved</b></h3><br />
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