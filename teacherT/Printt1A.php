<?php

session_start();
$connection = mysql_connect("localhost","root","");
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('goldenbus');

// check for form submission - if it doesn't exist then send back to signin form
if (!isset($_POST['submit']) || $_POST['submit'] != 'signin') {
    header('Location:mainA.php?tag=printtA'); exit;
}

	
// get the posted data
$confirmation= strip_tags( utf8_decode( $_POST['transaction_no'] ) );
$doj = strip_tags( utf8_decode( $_POST['date'] ) );
	

// check that user id was entered
if (empty($confirmation))
    $error = 'የግብይት ቁጥር ማስገባት አለብዎት።';

	
// check that a message was entered
if (empty($doj))
    $error = 'ቀን ማስገባት አለብዎት። ';



//Check whether the passenger is already registered.
$select = mysql_query("select * from seat1 where transaction_no = '" . $confirmation. "' and date = '" . $doj . "'", $connection);

//$query = mysql_real_escape_string($select);

$num_rows = mysql_num_rows($select);

if ( $num_rows == 0)
	$error = 'ትኬት የለም .!!!';
	
	
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location:errorA.php?e='.urlencode($error)); exit;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
<title>ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት </title>

<script type="text/javascript">

       function PrintDoc() {

        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank', 'width=595,height=842,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')

        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }

</script>
<style>
body{
	background:linear-gradient(green,yellow,white,silver,royalblue,black);
}	
	
	
</style>
</head>
<body>
<div id="style_div" >

<form method="post">
<table  style="background:linear-gradient(green,yellow,red); margin-top: -10px;" border="0" align="center" width="500">
	<tr><td style="color: white; font-size:20px " colspan="2" align="center"><b>እባክዎን ለተሳፋሪዎች ቲኬት ፕርንት ያድርጉ</b></td></tr>
	<tr><td></td></tr>
	<tr>
	<td align="right">  <a href="#" style="text-decoration: none;color: blue; text-align: center;" onclick="PrintDoc()"><b>ፕርንት&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>	 </td>
		<td align="left">  <a style="text-decoration: none;color: blue; text-align: center;" href="mainA.php?tag=printtA"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ዋና</b></a>          </td>
    </tr>
</table>
</form>
</div><!--end of style_div -->
<div  id="printarea">
<div style="width: 100%">
<div id="ticket" ><!--start of ticket -->

<?php
								include('conection/connect.php');
								$user_query=mysql_query("select *  from reservation where transaction_no = '" . $confirmation . "'");
								$row=mysql_fetch_array($user_query); {
							?>
							
								 
								
							

								 
<table border="0" align="center" width="500px"   style="border: 1px solid #06C;border-radius:0px; background:white "   >
<tr>
<td align="right"><img src="picture/g2.png" /></td>
<td>
<h3 align="center">ጎልደን ባስ ትራንስፖርት ሲስተም አ.ማ<br>
GOLDEN BUS TRANSPORT SYSTEM SC.</h3>
</td>
</tr>
<tr >
<td  align="center"><b>1ኛ ደረጃ</b></td>	
<td align="right"><b>ሴሪ ብ.ከ.አ.01/6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
№ 358387&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</b>
</td>	
</tr>
<tr>
<td colspan="2" align="center" style="font-size: 20px"><u><b> የመንገደኛ ትኬት</b></u></h3></td>		
</tr>
<tr>
<td colspan="2">
<table border="0" cellpadding="5" width="100%">
<tr>
<td>
<b>ቀን:</b><?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['date'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
</td>
<td>
	
	<b>መነሻ ስዐት:</b><b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00 AM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>
</td>	
</tr>
<tr>
<td colspan="2">

<b>የተሳፋሪ ስም:</b><?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['fname'].'&nbsp;'.$row['lname'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
</td>	
</tr>
<tr>
<td>

<b>የተሳፋሪ ስልክ:</b><?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['telephone'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
</td>	
</tr>
<tr>
<td>

<b>መነሻ ከተማ:</b><?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['depcity'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
</td>
<td>

<b>መድረሻ ከተማ:</b><?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['descity'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
</td>	
</tr>
<tr>
<td>

<b>የአውቶቡስ ስልክ:</b><b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;251923456778&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>
</td>
<td>

<b>ታርጋ ቁጥር.:</b><?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['busid'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
</td>	
</tr>
<tr>
<td colspan="2">
<b>ወንበር ቁጥር:</b>

<?php
								include('conection/connect.php');
								$user_query=mysql_query("select *  from seat1 where transaction_no = '" . $confirmation . "'");
								while($row = mysql_fetch_array($user_query)) {
							?>

	
	<?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$row['number'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
	<?php } ?> 	 
</td>	
</tr>

<tr>
<td colspan="2">
	
	<b>ዋጋ:</b> <?php
								include('conection/connect.php');
								$user_query=mysql_query("select *  from reservation where transaction_no = '" . $confirmation . "'");
								while($row = mysql_fetch_array($user_query)) {
							?>

	
	<?php echo '<b style="color:black"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$row['price'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b>'; ?>
	<?php } ?> 
</td>	
</tr>
<tr>
<td colspan="2" align="right">
<b style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  width="100" height="50" src="picture/sign.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
</td>	
</tr>
<tr>
<td colspan="2" align="right">
	<b>የፀሐፊ ፈርማ</b>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>	
</tr>
<tr>
<td colspan="2">
	<p align="center"><b>ማሳሰቢያዉን ከጀርባ ይመልከቱ !!</b></p>
</td>	
</tr>	 
<tr>
<td align="right">
<img width="70px" height="50px" src="picture/pic/phone.jpg"/>		 
</td>
<td align="left">
<b> 251111568080</b><br />
<b>251111568585 </b>	 
</td>	
</tr>	 
</table>
</td>
</tr>	 
    </table>
    
  <?php } ?>  
    
    
    </div>

</div><!-- end of content-input -->
</div>
</body>
</html>