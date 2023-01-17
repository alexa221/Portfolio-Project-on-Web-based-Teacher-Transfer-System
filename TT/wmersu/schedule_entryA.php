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
	$deptime=$_POST['deptime'];
	$arrivaltime=$_POST['arrivaltime'];
	$wprogram=$_POST['wprogram'];
		

$sql_ins=mysql_query("INSERT INTO schedule 
						VALUES(
							NULL,
							'$depcity',
							'$descity' ,
							'$deptime',
							'$arrivaltime',
							'$wprogram',
							NOW()
							)
					");
if($sql_ins==true){
	echo "<fz>መርሃግብር በተሳካ ሁኔታ ተመዚግቧል</fz>";
	echo'<meta content="5;mainA.php?schedule_entryA.php" http-equiv="refresh" />';	
}
else
	$msg="<ft>አልተካተተም እንደገና ይሞክሩ </ft>";
	
}

//------------------update data----------
if(isset($_POST['btn_upd'])){
	$depcity=$_POST['depcity'];
	$descity=$_POST['descity'];
	$deptime=$_POST['deptime'];
	$arrivaltime=$_POST['arrivaltime'];
	$wprogram=$_POST['wprogram'];
	
	$sql_update=mysql_query("UPDATE schedule SET 
								depcity='$depcity',
								descity='$descity' ,
								deptime='$deptime',
								arrivaltime='$arrivaltime',
								wprogram='$wprogram'
								
							WHERE
								schedule_id=$id
							");
	if($sql_update==true){
		echo "<fz>መርሃግብር በተሳካ ሁኔታ ተስተካክሏል</fz>";
		echo'<meta content="5;mainA.php?schedule_entryA.php" http-equiv="refresh" />';	
	}
	else
		echo "<ft>ማዘመን አልተሳካም </ft>";
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
    <meta charset="utf-8">
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
	$sql_upd=mysql_query("SELECT * FROM schedule WHERE schedule_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b>  የጊዜ ሰሌዳ ማሻሻያ ቅጽ </b></div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_scheduleA"><input type="button" name="btn_view" title="የጊዜ ሰሌዳን ይመልከቱ" value="መመለስ" id="button_view" style="width:70px;"  /></a>
             
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
            	<td style="color: black"><b>መነሻ ሰዓት:</b></td>
                <td>
                	<input style="color: blue" type="text" name="deptime" id="textbox" value="<?php echo $rs_upd['deptime'];?>"/>
                </td>
            </tr>
        
            <tr>
            	<td style="color: black"><b>የመድረሻ ሰዓት:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="arrivaltime" id="textbox" value="<?php echo $rs_upd['arrivaltime'];?>"/>
    			</td>
        	</tr>
        	
        	<tr>
            	<td style="color: black"><b>ሳምንታዊ ፕሮግራም:</b></td>
            	<td>
                	<input style="color: blue" type="text" name="wprogram" id="textbox" value="<?php echo $rs_upd['wprogram'];?>"/>
    			</td>
        	</tr>
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="ሰርዚ" id="button-in"/>
                	<input type="submit" name="btn_upd" value="አስተካክል" id="button-in"  />
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
       <b> የጊዜ ሰሌዳ ማስገቢያ  ቅጽ  </b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_scheduleA"><input type="button" name="btn_view" title="የጊዜ ሰሌዳን ይመልከቱ " value="የጊዜ ሰሌዳን ይመልከቱ " id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td style="color: black;"><b>መነሻ ከተማ:</b></td>
            	<td>
                	<select  name="depcity" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" required>
			
            <option value="">ይምረጡ መነሻ ከተማ</option>
           <option value="ደብረታቦር">ደብረታቦር</option>			
            <option value="አዲስ አበባ">አዲስ አበባ</option>
	    <option value="ባህር ዳር">ባህር ዳር</option>
	    <option value="ደሴ">ደሴ</option>			
            <option value="ድሪዳዋ">ድሪዳዋ</option>         
            <option value="ሃረር">ሃረር</option>			
            <option value="ሃዋሳ">ሃዋሳ</option>			
            <option value="ጅማ ">ጅማ</option>
            <option value="መቀሌ">መቀሌ</option>

            </select>
                </td>
            </tr>
            
            <tr>
            	<td style="color: black;"><b>መድረሻ ከተማ:</b></td>
            	<td>
                	<select  name="descity" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" required>
			
            <option value="">ይምረጡ መድረሻ ከተማ</option>
          <option value="ደብረታቦር">ደብረታቦር</option>			
            <option value="አዲስ አበባ">አዲስ አበባ</option>
	    <option value="ባህር ዳር">ባህር ዳር</option>
	    <option value="ደሴ">ደሴ</option>			
            <option value="ድሪ ዳዋ">ዲሪ ዳዋ</option>            
            <option value="ሃረር">ሃረር</option>			
            <option value="ሃዋሳ">ሃዋሳ</option>			
            <option value="ጅማ">ጅማ</option>
            <option value="መቀሌ">መቀሌ</option>

            </select>
                </td>
            </tr>
            
          
            
            
            
         
            <tr>
            	<td style="color: black;"><b>መነሻ  ሰዓት:</b></td>
            	<td>
                	<input type="text" name="deptime" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;"  title="እባክዎ የመነሻ ሰዓትን ያስገቡ." maxlength="10" id="textbox" required="required"/>
    			</td>
        	</tr>
        	
        	<tr>
            	<td style="color: black;"><b>የመድረሻ ሰዓት:</b></td>
            	<td>
                	<input type="text" name="arrivaltime" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;" title="እባክዎ የመድረሻ ሰዓትን ያስገቡ." maxlength="10" id="textbox" required="required"/>
                </td>
            </tr>
            
            
            
            <tr>
            	<td style="color: black;"><b>ሳምንታዊ ፕሮግራም :</b></td>
            	<td>
                	<input type="text" name="wprogram" style="color:blue;width: 200px;height:35px; border: 3px double #09bbf7; padding:0px 0px;"  title="እባክዎን ሳምንታዊ ፕሮግራምን ያስገ." maxlength="100" id="textbox" required="required"/>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="ስርዝ" id="button-in"/>
                	<input type="submit" name="btn_sub" value="መመዝገብ" id="button-in"  />
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