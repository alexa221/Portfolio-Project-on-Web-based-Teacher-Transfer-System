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
	$wcode=$_POST['wcode'];
	$wname=$_POST['wname'];
	$mul=$_POST['multiplayer'];
$sql_ins=mysqli_query($conn,"INSERT INTO woreda 
						VALUES(
						     '$wcode', 
							 '$wname',						
							 '$mul',
							 NOW()
							)
					");
if($sql_ins==true){
	echo "<fz>woreda Added successfully</fz>";
echo'<meta content="2;main.php?woreda_entry.php" http-equiv="refresh" />';	
}
else
	$msg="<ft>Not inserted try again</ft>";
	
}
//echo'<meta content="3;main.php" http-equiv="refresh" />';
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$wcode=$_POST['wcode'];
	$wname=$_POST['wname'];
	$mul=$_POST['multiplayer'];
	$sql_update=mysqli_query($conn,"UPDATE woreda SET 
                                wcode='$wcode', 	
								wname='$wname',
								multiplayer='$mul'
							    WHERE
								wcode=$id
							");
	if($sql_update==true){
		
		echo "<fz>woreda  Updated Successfully</fz>";
		echo'<meta content="2;main.php?woreda_entry.php" http-equiv="refresh" />';	
	}
	else
		echo "<ft>Update Failed</ft>";
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<link rel="stylesheet" type="text/css" href="font_teach/css/solid.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font_teach/css/brands.css">
<title>teacher transfer system</title>
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
#woreda_R{
	box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
#updt_woreda{
box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;	
}
.fa-plus-circle{
	color:green;
}
.fa-star{
	color:red;
}
</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysqli_query($conn,"SELECT * FROM woreda WHERE wcode=$id");
	$rs_upd=mysqli_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
     <p style="margin-top:2px;padding-left:40px"> <b> woreda Update Form</b></p></div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_woreda"><input type="button" name="btn_view" title="View woreda" value="Back" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" id="updt_woreda" cellpadding="4" cellspacing="0">
              <tr>
            	<td style="color: black"><b>Woreda Code:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="wcode" id="textbox" readonly value="<?php echo $rs_upd['wcode'];?>"/>
                </td>
            </tr>
            <tr>
            	<td style="color: black"><b>Woreda Name:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="wname" id="textbox" value="<?php echo $rs_upd['wname'];?>"/>
                </td>
            </tr>
            <tr>
            	<td style="color: black"><b>Multiplayer:</b></td>
                <td>
                	<input style="color: blue" type="text" name="multiplayer" id="textbox" value="<?php echo $rs_upd['multiplayer'];?>"/>
                </td>
            </tr>


        

			<!--tr>

			<td heigth="40"align="center" style="color: blue;"><b>Bus ID<span class="red"></b></span</td>
            	<td ><select id="sex" required="required" name="busid" value="<?php //echo $rs_upd['bus_id'];?>"/>
				<option value ="" selected>select bus_id</option>
				<?php
  // mysql_connect('localhost', 'root', '');
    //mysql_select_db('goldenbus');
// $msql = mysql_query("SELECT * FROM bus");
 //while($m_row = mysql_fetch_array($msql))        
       // echo("<option value = '" . $m_row['bus_id'] . "'>" . $m_row['bus_id'] . "</option>");
    ?>
            	</select><br></td>
                
            </tr-->
            <!--<tr>
            	<td style="color: black"><b>multiplayer:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="price" id="textbox" value="<?php echo $rs_upd['price'];?>"/>
    			</td>
        	</tr> -->
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_upd" value="Update" id="button-in"  />
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
       <p style="margin-top:2px;padding-left:50px"><b><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Woreda Registration Form </b></p>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_woreda"><input type="button" name="btn_view" title="View woreda" value="View_woreda" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table id="woreda_R" border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black;"><b><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Woreda code:</b></td>
            	<td>
                	<input type="number" name="wcode" style="color:blue "  title="Please enter woreda code ." id="textbox"  required="required"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black;"><b><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Woreda name:</b></td>
            	<td>
                	<input type="text" name="wname" style="color:blue" title="Please enter woreda name."   id="textbox" required="required"/>
                </td>
            </tr>
   

			
        	<!--tr>
            	<td style="color: black;"><b>Bus ID:</b></td>
            	<td>
                	<input type="text" name="busid" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" pattern="[0-9]{2,}" title="Please enter busid." maxlength="5" id="textbox" required="required"/>
    			</td>
        	</tr-->
        	
        	<tr>
            	<td style="color: black;"><b><i class="fa fa-star" aria-hidden="true"></i>&nbsp;multiplayer:</b></td>
            	<td>
                	<input type="text" name="multiplayer" style="color:blue" title="Please enter multiplayer."  id="textbox" required="required"/>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_sub" value="Register" id="button-in"  />
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