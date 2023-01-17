<?php
	include ('sessionA.php');
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
  <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት</title>

<link rel="stylesheet" type="text/css" href="css/main_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>

<link rel="stylesheet" href="css/w3css.css">



</head>

<body>

   <div id="top">
      <div id="user">
      <table border="0" width="100%" height="100%">
      <tr><td width="20%"><img width="100%" height="100%"/></td><td><h1 style="text-align:center ">የወርቅ አውቶቡስ የመስመር ላይ የቲኬት ማስቀመጫ ስርዓት</h1>	</td>
			<td>		
        <div class="w3-dropdown-click">
  <button onclick="myFunction()" class="w3-button w3-black"><b> <img align="center" width="50px" height="50px"  src="picture/admin.png"/>
<?php
								include('conection/connect.php');
								$user_query=mysql_query("select *  from user where u_id='$id_session'")or die(mysql_error());
								$row=mysql_fetch_array($user_query); {
							?>
							
								 <?php echo $row['username']; ?>&nbsp;&nbsp;<img align="center" src="picture/nav_bullet.jpg"/>
								
							
<?php } ?>
							
								

						</b></button>
  <div id="Demo" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
    
    <a href="logoutA.php"  style="background:linear-gradient(red,green,green,red);"  class="w3-bar-item w3-button"><img align="center" width="25px" height="20px" src="picture/logout.png"/><b> ውጣ</b></a>
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
                        <a href="?tag=homeA" title="home">&nbsp;መነሻ</a><br />
                	</div>
					<!--div>
                    	<a href="main.php?tag=printing" class="customer" title="print report">&nbsp;Print Report</a>
                    </div-->
                    <div>
                    	<a href="mainA.php?tag=chpassA" class="customer" title="ይቀይሩ">&nbsp;የይለፊ ቃል ለመቀየር</a>
                    </div>
                       <div>
                    	<a href="mainA.php?tag=view_manA" class="customer" title="ይመልከት">&nbsp;ተጠቃሚዋችን ይመልከቱ</a>
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
		<a href="mainA.php?tag=user_entryA" class="sales" title="Add User"><img src="picture/admin.png" height="60px"  hspace="30px" /> </a>
		</td>
		<td>
		<h3 align="left" style="color:black">ወደ አስተዳድር ጣቢያ እንኳን ደህና መጡ</h3>
		</td>
		</tr>
		</table>
             </div><!--end of pic_manu -->
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
                
                <li id="li_menu"><a href="mainA.php?tag=account_entryA">መመዝገቢያ </a>
                  <li id="li_menu"><a href="mainA.php?tag=view_commentA">አስተያየት</a>  
                    
                
                </li>
				        
      </div><!--end of menu2--> 
        
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="homeA" or $tag=="")
							include("homeA.php");
						
                            elseif($tag=="clerk_entryA")
                            include("clerk_entryA.php");
							
							//elseif($tag=="view_clerk")
                            //include("view_clerk.php");
							
							elseif($tag=="view_manA")
                            include("view_manA.php");
							
							
							elseif($tag=="view_managerA")
                            include("view_managerA.php");
							
                            elseif($tag=="account_entryA")
                            include("account_entryA.php");
							elseif($tag=="update")
                            include("update_accountA.php");
							
							elseif($tag=="managerccA")
                            include("managerccA.php");
							
							elseif($tag=="regA")
                            include("regA.php");
                
				            elseif($tag=="regA")
                            include("regA.php");
                
							 elseif($tag=="view_routeA")
                            include("view_routeA.php");
							
                            elseif($tag=="route_entryA")
                            include("route_entryA.php");
                            
                            elseif($tag=="bus_entryA")
                            include("bus_entryA.php");
                            
                            
                            elseif($tag=="view_busA")
                            include("view_busA.php");
                            
                             elseif($tag=="view_commentA")
                            include("view_commentA.php");
                            
                             elseif($tag=="view_reservationA")
                            include("view_reservationA.php");
                            
                             elseif($tag=="check_accountA")
                            include("check_accountA.php");
                            
                            elseif($tag=="chpassA")
                            include("admin_passchangeA.php");

                            elseif($tag=="printingA")
                            include("PrintA.php");
							
							
                            
                            elseif($tag=="seatsA")
                            include("seatsA.php");
                            
                            elseif($tag=="passengerA")
                            include("passengerA.php");
                            
                            elseif($tag=="clerkA")
                            include("clerkA.php");
                            
                            elseif($tag=="busA")
                            include("busA.php");
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
     	<h3 align="center" ><b> &copy; Copyright-<?php echo date("Y");?> ወርቃማ አውቶቡስ | መብቱ በህግ የተጠበቀ ነው</b></h3><br />
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