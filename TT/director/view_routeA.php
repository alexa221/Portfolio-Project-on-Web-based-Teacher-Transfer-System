<!--for delete Record -->
<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM route WHERE route_id=$id");
	if($del_sql)
		echo "Route has been Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();	
			
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
    <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>መንገዶችን ይመልከቱ </b></td>
        <td>
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
        	<input type="text" name="searchtxt" title="የሚፈለጉትን መድረሻ ከተማን ያስገቡ " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="ፈለግ" id="button-search" title="መንገዶችን መፈለግ " />
        </td>
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="1" width="950px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>ተቁ</th>
			<th>የመንገድ መታወቂያ </th>
            <th>መነሻ ከተማ</th>
            <th>መድረሻ ከተማ</th>            
            <th>የአውቶቡስ መታወቂያ ቁጥር </th>
            <th>ዋጋ</th>
            <th>ቀን ታክሏል </th>
            
        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM route WHERE descity  like '%$key%' or descity like '%$key%'");

	else
		 $sql_sel=mysql_query("SELECT * FROM route where depcity='ደብረ_ታቦር'");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['route_id'];?></td>
            <td><?php echo $row['depcity'];?></td>
            <td><?php echo $row['descity'];?></td>
            <td><?php echo $row['busid'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo date("M d, Y ",strtotime($row['date'])); ?></span></td>
            
             
        </tr>
    <?php	
    }
	// ----- for search studnens------	
		
	
    ?>
    </table>
</form>
</div>
</body>
</html>