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
<title>teacher transfer  system</title>
<link rel="stylesheet" type="text/css" href="css/main_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>
<link rel="stylesheet" href="css/w3css.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/solid.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/brands.css">
</head>
<style>
.fa-book{
	color:blue;
}
</style>
<body>
   <div id="top">
      <div id="user">
      <table border="0" width="100%" height="100%">
      <tr><td width="20%"><img src="picture/t10.png" width="100%" height="68%" /></td><td><h1 style="text-align:center ">ONLINE TEACHER TRANSFER MANAGEMENT SYSTEM</h1>	</td>
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
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="home">&nbsp;HOME</a><br />
                	</div>
					<div >
                        <a href="main.php?tag=P_woreda" title="report">&nbsp;generate report</a><br />
                	</div>
					 <div >
                        <a href="main.php?tag=view_teacher" title="view">&nbsp;View Teacher</a><br />
                	</div>
                    <div>
                    	<a href="main.php?tag=view_All_request" class="customer" title="print report">&nbsp;View Request</a>
                    </div>
                    <div>
                    	<a href="main.php?tag=chpass" class="customer" title="change pass">&nbsp;change password</a>
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
		<h3 align="left" style="color:black">WELCOME TO WEAST GOJJAM ZMERSU OFFICER PAGE</h3>
		</td>
		</tr>
		</table>
             </div><!--end of pic_manu -->
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
				<li id="li_menu"><a href="#">Woreda&nbsp;<i class="fa fa-angle-double-down" aria-hidden="true"></i></a> 
                    <ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=woreda_entry" class="order">Register woreda</a>
						</li>
						<li id="li_submenu">
						<a href="main.php?tag=view_woreda" class="stocks">View Woreda</a></li>
                    </ul>
                   </li>			
              
                <li id="li_menu"><a href="#">transfer form</a>
                    <ul>					
						<li id="li_submenu">
                        <a href="main.php?tag=view_All_form_w" class="sales">View transfer form</a></li>
                    </ul>
                </li>
                <li id="li_menu"><a href="#">Deadline </a>
                    <ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=setapplydate" class="sales">set Deadline</a></li>
						<li id="li_submenu">
                        <a href="main.php?tag=updateapplydate" class="sales">Update Deadline</a></li>
                    </ul>
                </li>
			  <li id="li_menu"><a href="#">View result&#9660;</a>
			        <ul>					
						<li id="li_submenu">
                        <a href="main.php?tag=view_result_S" class="sales">school to school</a></li>
						<li id="li_submenu">
                        <a href="main.php?tag=view_result_W" class="sales">woreda to woreda</a></li>
                    </ul>
                </li>	
                </li>
				
                <li id="li_menu"><a href="#?tag=clearceform"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;archivehistory</a>
							        <ul>					
						<li id="li_submenu">
                        <a href="main.php?tag=clearceform" class="sales">Archive result</a></li>
						<li id="li_submenu">
                        <a href="main.php?tag=archive_form" class="sales">Archive form</a></li>
                    </ul>
                </li>	
            <li id="li_menu"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>Veiw History</a>
                  <ul>
                  <li id="li_submenu">
                    <a href="main.php?tag=view_archive_resu" class="sales">Archive result</a></li>
                    <li id="li_submenu">
                    <a href="main.php?tag=view_archive_form" class="sales">Archive form</a></li>
						</ul>
                </li>				
				
      </div><!--end of menu2--> 
            
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="") 
							include("home.php"); 
						    elseif($tag=="Assign_w")
                            include("Assign_w.php");
                            elseif($tag=="view_teacher")
                            include("view_teacher.php");
							
							elseif($tag=="view_All_request")
                            include("view_All_request.php");
							elseif($tag=="view_notice")
                            include("view_notice.php");
							elseif($tag=="view_result_S")
                            include("view_result_S.php");
							
                            elseif($tag=="account_entry")
                            include("account_entry.php");
							
							elseif($tag=="view_All_form_w")
                            include("view_All_form_w.php");
							
							elseif($tag=="archive_form")
                            include("archive_form.php");
                
							 elseif($tag=="view_woreda")
                            include("view_woreda.php");
							
                            elseif($tag=="woreda_entry")
                            include("woreda_entry.php");
                            
                            elseif($tag=="view_result_W")
                            include("view_result_W.php");
                            
                            
                            elseif($tag=="setapplydate")
                            include("setapplydate.php");
                            
                             //elseif($tag=="view_comment")
                            //include("view_comment.php");
                            
                             elseif($tag=="updateapplydate")
                            include("updateapplydate.php");
                            
                             elseif($tag=="check_account")
                            include("check_account.php");
                               elseif($tag=="clearceform")
                            include("clearceform.php");
                            
							elseif($tag=="view_man")
                            include("view_man.php");

                            elseif($tag=="printing")
                            include("Print.php");
							
						   elseif($tag=="view_account")
                            include("view_account.php");
                            
                            
                            elseif($tag=="P_woreda")
                            include("P_woreda.php");
                            
                            elseif($tag=="view_archive_resu")
                            include("view_archive_resu.php");
                            
                            elseif($tag=="view_archive_form")
                            include("view_archive_form.php");
                            
                            elseif($tag=="bus")
                            include("bus.php");
							
							elseif($tag=="chpass")
                            include("changepass.php");
							
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
     	<h3 align="center" ><b> &copy; Copyright-<?php echo date("Y");?>  West Gojjam education Office| All Rights Reserved</b></h3><br />
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