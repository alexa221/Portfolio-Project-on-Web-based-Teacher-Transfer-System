<?php
	include ('sessionA.php');
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"lang="am">
<head>
    <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት</title>

<link rel="stylesheet" type="text/css" href="css/main_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>
<link rel="stylesheet" href="css/w3css.css">
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
      <tr><td width="20%"><img width="100%" height="100%" /></td><td><h1 style="text-align:center ">የወርቅ አውቶቡስ የመስመር ላይ የቲኬት ማስቀመጫ ስርዓት</h1>	</td>
			<td>		
        <div class="w3-dropdown-click">
        
  <button onclick="myFunction()" class="w3-button w3-black"><b> <img align="center" width="50px" height="50px"  src="picture/employee.png"/>
<?php
								include('conection/connect.php');
								$user_query=mysql_query("select *  from user where u_id='$id_session'")or die(mysql_error());
								$row=mysql_fetch_array($user_query); {
							?>
							
								 <?php echo $row['username']; ?>&nbsp;&nbsp;<img align="center" src="picture/nav_bullet.jpg"/>
								
							
<?php } ?>
							
								

						</b></button>
  <div id="Demo" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
    
    <a href="logoutA.php"  style="background:linear-gradient(red,green,green,red);"  class="w3-bar-item w3-button"><img align="center" width="25px" height="20px" src="picture/logout.png"/><b> 'ዉጣ</b></a>
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
                    <div>
                    	<a href="mainA.php?tag=printtA" class="customer" title="ፕርንት ቲኬት">&nbsp;ቲኬት ፕርንት</a>
                    </div>
                    <div>
                    	<a href="mainA.php?tag=printingA" class="customer" title="ፕርንት ርፖርት">&nbsp;ፕርንት ርፖርት</a>
                    </div>
					<div>
                    	<a href="mainA.php?tag=chpassA" class="customer" title="የይለፍ ቃል መቀየር">&nbsp;የሚስጥር ቁልፍ ይቀይሩ</a>
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
		<img src="picture/employee.png" height="60px"  hspace="30px" /> 
		</td>
		<td>
		<h3 align="left" style="color:black">ለቲኬት ቼክ ጣቢያ እንኳን በደህና መጡ</h3>
		</td>
		</tr>
		</table>
             </div><!--end of pic_manu -->
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
                <li id="li_menu"><a href="#">የጊዜ ሰሌዳ</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=schedule_entryA" class="sales">የጊዜ ሰሌዳ መመዚገቢያ</a></li>
                        <li id="li_submenu"><a href="mainA.php?tag=view_scheduleA" class="stocks">የጊዜ ሰሌዳን ይመልከቱ</a></li>
                    </ul>
                </li>
				
                <li id="li_menu"><a href="#">መንገዶች</a>
                    
                    <ul>
                        
                        
                        <li id="li_submenu"><a href="mainA.php?tag=view_routeA" class="stocks">መንገዶች ይመልከቱ</a></li>
                    </ul>
                
                </li>
                <li id="li_menu"><a href="#">መኪና</a>
                    <ul>
                        <li id="li_submenu"><a href="mainA.php?tag=view_busA" class="stocks">መኪኖችን ይመልከቱ</a></li>
                    </ul>
                </li>
                
               
                <li id="li_menu"><a href="#">ርፖርት</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=printingA" class="sales">ቦታ ማስያዝ</a></li>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=seatsA" class="sales">የተያዙ ወንበሮች</a></li>
                       
                    </ul>
                </li>
                
               <li id="li_menu"><a href="#">ቦታ ማስያዝ</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=view_reservationA" class="sales"> የተያዙ ቦታዋችን ይመልከቱ</a></li>
                        
                    </ul>
                </li> 
                
      </div><!--end of menu2--> 
            
			
			
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="homeA" or $tag=="")
							include("homeA.php");
						
                            elseif($tag=="schedule_entryA")
                            include("schedule_entryA.php");
							
							elseif($tag=="view_clerkA")
                            include("view_clerkA.php");
                
							 elseif($tag=="view_routeA")
                            include("view_routeA.php");
							
                            elseif($tag=="route_entryA")
                            include("route_entryA.php");
                            
                            elseif($tag=="bus_entryA")
                            include("bus_entryA.php");
                            
                            
                            elseif($tag=="view_busA")
                            include("view_busA.php");
                            
                            elseif($tag=="view_scheduleA")
                            include("view_scheduleA.php");
                            
                             elseif($tag=="view_commentA")
                            include("view_commentA.php");
                            
                             elseif($tag=="view_reservationA")
                            include("view_reservationA.php");
                            
                             elseif($tag=="check_accountA")
                            include("check_accountA.php");

                            elseif($tag=="printtA")
                            include("printtA.php");
							 elseif($tag=="printticketA")
                            include("PrintticketA.php");
                            
                            elseif($tag=="printt1A")
                            include("Printt1A.php");
                            
                            elseif($tag=="printingA")
                            include("printA.php");
							
							 elseif($tag=="chpassA")
                            include("changepassA.php");
							
							elseif($tag=="user_entryA")
                            include("user_entryA.php");
                            
                            elseif($tag=="editstatusA")
                            include("editstatusA.php");
                            
                            elseif($tag=="execeditstatusA")
                            include("execeditstatusA.php");
                            
                            elseif($tag=="seatsA")
                            include("seatsA.php");
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
     	<h3 align="center" ><b> &copy; Copyright-<?php echo date("Y");?> Golden Bus | All Rights Reserved</b></h3><br />
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