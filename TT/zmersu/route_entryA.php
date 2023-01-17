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
	$depcity=$_POST['depcity'];
	$descity=$_POST['descity'];
	$busid=$_POST['busid'];
	$price=$_POST['price'];
	//$side =$_POST['sideno'];
	
		

$sql_ins=mysql_query("INSERT INTO route 
						VALUES(
							NULL,
							'$depcity',
							'$descity' ,
							'$busid',
							'$price',
							NOW()
							)
					");
if($sql_ins==true){
	echo "<fz>መስመር በተሳካ ሁኔታ ታክሏል </fz>";
echo'<meta content="5;mainA.php?bus_entryA.php" http-equiv="refresh" />';	
}
else
	$msg="<ft>አልተካተተም እንደገና ይሞክሩ </ft>";
	
}
//echo'<meta content="3;main.php" http-equiv="refresh" />';
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$depcity=$_POST['depcity'];
	$descity=$_POST['descity'];
	$busid=$_POST['busid'];
	//$side =$_POST['sideno'];
	
	$price=$_POST['price'];
	
	$sql_update=mysql_query("UPDATE route SET 
								depcity='$depcity',
								descity='$descity' ,
								busid='$busid',
								price='$price'
								
							WHERE
								route_id=$id
							");
	if($sql_update==true)
		echo "<fz>መንገድ በተሳካ ሁኔታ ተዘምኗል y</fz>";
	else
		echo "<ft>ማዘመን አልተሳካም </ft>";
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />

<title>ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት</title>
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
</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM route WHERE route_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> የመንገድ ማዘመኛ ቅጽ</b></div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_routeA"><input type="button" name="btn_view" title="መንገዶችን ይመልከቱ" value="ለመመለስ" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black"><b>መነሻ ከተማ:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="depcity" id="textbox" value="<?php echo $rs_upd['depcity'];?>"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black"><b>መድረሻ ከተማ:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="descity" id="textbox" value="<?php echo $rs_upd['descity'];?>"/>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black"><b>የመኪና መለያ ቁጥር:</b></td>
                <td>
                	<input style="color: blue" type="text" name="busid" id="textbox" value="<?php echo $rs_upd['busid'];?>"/>
                </td>
            </tr>
			<!--tr>
			<td heigth="40"align="center" style="color: green;"><b>Bus ID<span class="red"></b></span</td>
            	<td ><select id="sex" required="required" name="bus_id" value="<?php //echo $rs_upd['bus_id'];?>"/>
				<option value ="" selected>select bus_id</option>
				<?php
   // mysql_connect('localhost', 'root', '');
   // mysql_select_db('skybus');
 //$msql = mysql_query("SELECT * FROM bus");
 //while($m_row = mysql_fetch_array($msql))        
       // echo("<option value = '" . $m_row['bus_id'] . "'>" . $m_row['bus_id'] . "</option>");
    ?>
            	</select><br></td>
                
            </tr-->
        
            
            <tr>
            	<td style="color: black"><b>ዋጋ:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="price" id="textbox" value="<?php echo $rs_upd['price'];?>"/>
    			</td>
        	</tr>
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="ለመሰረዚ" id="button-in"/>
                	<input type="submit" name="btn_upd" value="ያስተካክሉ" id="button-in"  />
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
       <b> የመንገድ መግቢያ ቅጽ  </b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_routeA"><input type="button" name="btn_view" title="መስመሮችን ይመልከቱ" value="መስመሮችን ይመልከቱ" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black;"><b>መነሻ ከትማ:</b></td>
            	<td>
                	<select  name="depcity" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" required>
			
            <option value="">መነሻ ከትማ ይምረጡ</option>
            <option value="ደብረ_ታቦር">ደብረ_ታቦር</option>	
            <option value="ጎንደር">ጎንደር</option>			
            <option value="አዲስ_አበባ">አዲስ_አበባ</option>
	    <option value="ባሕር_ዳር">ባሕር_ዳር</option>
	    <option value="ደሴ">ደሴ</option>			
            <option value="ድርደዋ">ድርደዋ</option>
            <option value="ሐረር">ሐረር</option>			
            <option value="ሀዋሳ">ሀዋሳ</option>			
            <option value="ጂማ"><ጂማ</option>
            <option value="መቀሌ">መቀሌ</option>

            </select>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black;"><b>መድረሻ ከተማ:</b></td>
            	<td>
                	<select  name="descity" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" required>
			
            <option value="">መድረሻ ከተማ ይምረጡ</option>			
            <option value="አዲስ_አበባ">አዲስ_አበባ</option>
			 <option value="ጎንደር">ጎንደር</option>    
            <option value="ባሕር_ዳር">ባሕር_ዳር</option>
	        <option value="ደሴ">ደሴ</option>			
            <option value="ድርደዋ">ድርደዋ</option>
             <option value="ሐረር">ሐረር</option>			
            <option value="ሀዋሳ">ሀዋሳ</option>			
            <option value="ጂማ">ጂማ</option>
            <option value="መቀሌ">መቀሌ</option>

            </select>
                </td>
            </tr>
   
			<!--tr>
			<td heigth="40"align="center" style="color: green;"><b>Bus ID<span class="red"></b></span</td>
            	<td ><select id="sex" required="required" name="bus_id" value="<!--?php echo $rs_upd['bus_id'];?>"/>
				<option value ="" selected>select bus_id</option>
				<?php
   // mysql_connect('localhost', 'root', '');
    //mysql_select_db('skybus');
 //$msql = mysql_query("SELECT * FROM bus");
// while($m_row = mysql_fetch_array($msql))        
        //echo("<option value = '" . $m_row['bus_id'] . "'>" . $m_row['bus_id'] . "</option>");
    ?></option>
            	</select><br></td>
                
            </tr-->
			
        	<tr>
            	<td style="color: black;"><b>የመኪና መለያ ቁጥር :</b></td>
            	<td>
                	<input type="text" name="busid" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" pattern="[0-9]{2,}" title="እባክዎ ወደ ቢቢድ ይግቡ ." maxlength="5" id="textbox" required="required"/>
    			</td>
        	</tr>
        	
        	<tr>
            	<td style="color: black;"><b>ዋጋ:</b></td>
            	<td>
                	<input type="text" name="price" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" pattern="[0-9]{2,}" title="እባክዎ ዋጋ ያስገቡ." maxlength="5" id="textbox" required="required"/>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="ለመሰረዚ" id="button-in"/>
                	<input type="submit" name="btn_sub" value="ይመዚግቡ" id="button-in"  />
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