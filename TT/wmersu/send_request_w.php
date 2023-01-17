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
	$mersu=$_POST['Did'];
	$wcode=$_POST['wcode'];
	$name=$_POST['name'];
	$amharic=$_POST['amharic'];
	$english=$_POST['english'];
	$biology=$_POST['biology'];
	$chemistry=$_POST['chemistry'];
	$physics=$_POST['physics'];
	$ict=$_POST['ict'];
	$Total=$amharic+$english+$biology+$chemistry+$physics+$ict;
	$sql=mysqli_query($conn,"DELETE from w_request_table WHERE Wrid='$mersu'");
//if(mysqli_num_rows($sql)==0){
$sql_ins=mysqli_query($conn,"INSERT INTO w_request_table 
						VALUES(
							'$mersu',
							'$wcode',
							'$name',
							'$amharic',
							'$english',
							'$biology',
							'$chemistry',
							'$physics',
							'$ict',
							'$Total'
							)
					        ");
    if($sql_ins==true){
	echo "<fz>your request send  successfully</fz>";
	echo'<meta content="1;main.php?send_request_w.php" http-equiv="refresh" />';	
      }
     else
     echo "<ft> Not inserted try again!</ft>";
     echo'<meta content="3;main.php?send_request_w.php" http-equiv="refresh" />';
     //}
     //else 
	 //echo "<ft >You Can Not send more than once!</ft>";
 	//echo'<meta content="3;main.php?send_request_w.php" http-equiv="refresh" />';
  //else
//$msg="<ft>Not inserted try again</ft>";	
}

//------------------update data----------
if(isset($_POST['btn_upd'])){
	$amharic=$_POST['amharic'];
	$english=$_POST['english'];
	$biology=$_POST['biology'];
	$chemistry=$_POST['chemistry'];
	$physics=$_POST['physics'];
	$ict=$_POST['ict'];
	$sql_update=mysqli_query($conn,"UPDATE w_request_table SET 
								Amharic='$amharic',
								English='$english',
								Biology='$biology',
								Chemistry='$chemistry',
								Physics='$physics',
								ICT='$ict'
							    WHERE
								Wrid =$id
							");
	if($sql_update==true){
		echo "<fz> request Updated Successfully</fz>";
		echo'<meta content="3;main.php?send_request.php" http-equiv="refresh" />';	
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
<link rel="stylesheet" type="text/css" href="font/css/solid.css">
<link rel="stylesheet" type="text/css" href="font/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="css/brands.css">
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
#send_request
{
	margin-left:30px;
    padding-left:20px;
    -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
    box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);	
}

</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysqli_query($conn,"SELECT * FROM w_request_table WHERE Wrid=$id");
	$rs_upd=mysqli_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> Schedule Update Form</b></div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_schedule"><input type="button" name="btn_view" title="View schedule" value="Back" id="button_view" style="width:70px;"  /></a>
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black"><b>Amharic:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="amharic" id="textbox" value="<?php echo $rs_upd['Amharic'];?>"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black"><b>English:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="english" id="textbox" value="<?php echo $rs_upd['English'];?>"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black"><b>Biology:</b></td>
                <td>
                	<input style="color: blue" type="text" name="biology" id="textbox" value="<?php echo $rs_upd['Biology'];?>"/>
                </td>
            </tr>
        
            <tr>
            	<td style="color: black"><b>Chemistry:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="chemistry" id="textbox" value="<?php echo $rs_upd['Chemistry'];?>"/>
    			</td>
        	</tr>
        	<tr>
            	<td style="color: black"><b>Physics:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="physics" id="textbox" value="<?php echo $rs_upd['Physics'];?>"/>
    			</td>
        	</tr>
			   <tr>
            	<td style="color: black"><b>ICT:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="ict" id="textbox" value="<?php echo $rs_upd['ICT'];?>"/>
    			</td>
        	</tr>
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
       <b> <i class="fa fa-registered" ></i>mesrsu  send request </b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 

       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
<?php 
$sql=mysqli_query($conn,"select * from account where u_id='$id_session'");
$row6=mysqli_fetch_array($sql);
if($row6)
$u_id=$row6['u_id'];
 $teacher=mysqli_query($conn,"SELECT * FROM user where u_id=$u_id");
while($row=mysqli_fetch_array($teacher)){
$id=$row['u_id'];
$fname=$row['fname'];
$woreda=$row['wcode'];
$total_requist=mysqli_query($conn,"select sum(Amharic) as sum_amharic from request_table where wcode='$woreda'");
$row5=mysqli_fetch_array($total_requist);
$Amharic=$row5['sum_amharic'];
$total_requist2=mysqli_query($conn,"select sum(English) as sum_english from request_table where wcode='$woreda'");
$row6=mysqli_fetch_array($total_requist2);
$English=$row6['sum_english'];
$total_requist3=mysqli_query($conn,"select sum(Biology) as sum_Biology from request_table where wcode='$woreda'");
$row4=mysqli_fetch_array($total_requist3);
$sum_Biology=$row4['sum_Biology'];
$total_requist4=mysqli_query($conn,"select sum(Chemistry) as sum_Chemistry from request_table where wcode='$woreda'");
$row5=mysqli_fetch_array($total_requist4);
$sum_Chemistry=$row5['sum_Chemistry'];
$total_requist5=mysqli_query($conn,"select sum(Physics) as sum_Physics from request_table where wcode='$woreda'");
$row8=mysqli_fetch_array($total_requist5);
$sum_Physics=$row8['sum_Physics'];
$total_requist7=mysqli_query($conn,"select sum(ICT) as sum_ICT from request_table where wcode='$woreda'");
$row7=mysqli_fetch_array($total_requist7);
$sum_ICT=$row7['sum_ICT'];
$sql2=mysqli_query($conn,"select * from woreda where wcode='$woreda'");
$row2=mysqli_fetch_array($sql2);
//$mul=$row2['multiplayer'];
$wn=$row2['wname'];
}
?>
	<form method="post" >
    <div >
   	  <table id="send_request"  border="0" cellpadding="0" cellspacing="0"  width="0px">
	  <tr>
	  <td  style="color: green;text-align:right"><b>wmersu ID:</b></td>
	   	<td>
		 <input style="color: blue;width:100px" type="text" readonly name="Did" id="textbox" value="<?php echo $id;?>"/>  
		</td>
	  </tr>
	    <tr>
	    <td  style="color: green;text-align:right"><b>Woreda Code:</b></td>
	   	<td> <input style="color: blue;width:100px" type="text" readonly name="wcode" id="textbox" value="<?php echo $wn;?>"/>  </td>
	  </tr>
	     <tr>
	    <td  style="color: green;text-align:right"><b>Name:</b></td>
	   	<td> <input style="color: blue;width:100px" type="text" readonly name="name" id="textbox" value="<?php echo $fname;?>"/>  </td>
	  </tr>
	   <tr>
	  	<tr>
	  <td  style="color: green;text-align:right"><b>Amharic:</b></td>
	   	<td><input style="color: blue;width:100px;text-align:center" type="text" name="amharic"  id="textbox" readonly value="<?php echo $Amharic;?> "/></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>English:</b></td>
	   	<td><input style="color: blue;width:100px;text-align:center" type="text" name="english"  id="textbox" readonly value="<?php echo $English;?>"/></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>Biology:</b></td>
	   	<td><input style="color: blue;width:100px;text-align:center" type="text" name="biology"  id="textbox" readonly value="<?php echo $sum_Biology;?>"  /></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>Chemistry:</b></td>
	   	<td><input style="color: blue;width:100px;text-align:center" type="text" name="chemistry"  id="textbox" readonly value="<?php echo $sum_Chemistry;?>"  /></td>
	  </tr>
	  	<tr>
	  <td  style="color: green;text-align:right"><b>Physics:</b></td>
	   	<td><input style="color: blue;width:100px;text-align:center" type="text" name="physics"  id="textbox" readonly value="<?php echo $sum_Physics;?>"  /></td>
	  </tr>
	  	  	<tr>
	  <td  style="color: green;text-align:right"><b>ICT:</b></td>
	   	<td><input style="color: blue;width:100px;text-align:center" type="text" name="ict"  id="textbox" readonly value="<?php echo $sum_ICT;?>"  /></td>
	   </tr>
           <tr>
                <td colspan="2" style="padding-top:10px">
     	          <input type="reset" value="Cancel" id="button-in"/>
                 <input type="submit" name="btn_sub" value="Send" id="button-in"/>	
                </td>
            </tr>
			<tr>
	  <td  style="color: green;text-align:right"><b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	   	<td></td>
	  </tr>
	  </table>
    </div>
 
    </form>
   <!--</fieldset>-->
</div><!-- end of style_informatios -->
<?php
}
?>
</body>
</html>