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
      <tr><td width="20%"><img width="100%" height="100%" /></td><td><h1 style="text-align:center ">የወርቅ አውቶቡስ ኦላይን የቲኬት ማስቀመጫ ስርዓት</h1>	</td>
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
    
    <a href="logoutA.php"  style="background:linear-gradient(red,green,green,red);"  class="w3-bar-item w3-button"><img align="center" width="25px" height="20px" src="picture/logout.png"/><b> ውጣ </b></a>
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
                    	<a href="mainA.php?tag=printingA" class="customer" title="ፕርንት ያርጉ">&nbsp;ፕሪንት ሪፖርት</a>
                    </div>
                    
                    <div>
                    	<a href="mainA.php?tag=chpassA" class="customer" title="ይቀይሩ">&nbsp;የሚስጥር ቁልፍ ይቀይሩ</a>
                    </div>   
					<div>
                    	<a href="mainA.php?tag=noticeA" class="customer" title="ማስታወቂያ ለመጻፍ">&nbsp;ማስታወቂያ</a>
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
		<h3 align="left" style="color:black">ወደ ሥራ አስኪያ ጣቢያ እንኳን ደህና መጡ</h3>
		</td>
		</tr>
		</table>
             </div><!--end of pic_manu -->
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
				<li id="li_menu"><a href="#">መንገዶች </a>
                    
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=route_entryA" class="order">የመስመር መመዚገቢያ </a></li>
                        <li id="li_submenu"><a href="mainA.php?tag=view_routeA" class="stocks">መስመሮችን ይመልከቱ</a></li>
                    </ul>
                   </li>
				   <li id="li_menu"><a href="#">መኪና </a>
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=bus_entryA" class="sales">መኪና መመዚገቢያ</a></li>
                        <li id="li_submenu"><a href="mainA.php?tag=view_busA" class="stocks">መኪናዋችን ይመልከቱ</a></li>
                    </ul>
                </li>
               				
                <li id="li_menu"><a href="#">አስተያየት</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=view_commentA" class="sales">አስተያየት ይመልከቱ</a></li>
                       
                    </ul>
                </li>
              
                <li id="li_menu"><a href="#">ሪፖርት</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=printingA" class="sales">የተያዙ ቦታዋች </a></li>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=seatsA" class="sales">የተያዙ መቀመጫዎች</a></li>
                        <li id="li_submenu">
                        <!--a href="main.php?tag=passenger" class="sales">Passengers</a></li-->
                        <li id="li_submenu">
                        <a href="mainA.php?tag=view_manA" class="sales">ተጠቃሚዋች</a></li>
						<li id="li_submenu">
                        <!--a href="main.php?tag=clerk" class="sales">Clerk</a></li-->
                        <li id="li_submenu">
                        <a href="mainA.php?tag=busA" class="sales">መኪናዋች</a></li>
                        
                    </ul>
                </li>
                <li id="li_menu"><a href="#">ቦታ ማስያዝ</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="mainA.php?tag=view_reservationA" class="sales">የተያዙ ቦታዋችን ይመልከቱ</a></li>
                        
                    </ul>
                </li>
				        
						
			
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
							
							elseif($tag=="clerk_entry")
                            include("clerk_reg.php");
							
							elseif($tag=="view_clerk")
                            include("view_clerk.php");
							
                            elseif($tag=="account_entryA")
                            include("account_entryA.php");
							
							elseif($tag=="managercc")
                            include("managercc.php");
							
							elseif($tag=="reg")
                            include("reg.php");
                
							 elseif($tag=="view_routeA")
                            include("view_routeA.php");
                        elseif($tag=="view_noticeA")
                            include("view_noticeA.php");
							
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
                               elseif($tag=="noticeA")
                            include("send_noticeA.php");
                            
							elseif($tag=="view_manA")
                            include("view_manA.php");

                            elseif($tag=="printingA")
                            include("PrintA.php");
							
						   elseif($tag=="view_accountA")
                            include("view_accountA.php");
                            
                            
                            elseif($tag=="seatsA")
                            include("seatsA.php");
                            
                            elseif($tag=="passenger")
                            include("passenger.php");
                            
                            elseif($tag=="clerk")
                            include("clerk.php");
                            
                            elseif($tag=="busA")
                            include("busA.php");
							
							elseif($tag=="chpassA")
                            include("changepassA.php");
							
							elseif($tag=="download")
                            include("../download.php");
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