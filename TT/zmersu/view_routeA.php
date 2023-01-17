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
		echo "<h3 style='color:#e01f3c'>መንገድ ተሰርዟል
... !</h3>";
	else
		$msg="መሰረዝ አልተቻለም
 :".mysql_error();	
			
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td  width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>መንገዶችን ይመልከቱ</b></td>
        <td>
        	<a href="?tag=route_entryA"><input type="button" title="Add new route" name="butAdd" value="አዲስ አስገባ" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="ለመፈለግ መድረሻ ከተማ ያስገቡ " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="ፈሊግ" id="button-search" title="መስመሮችን ይፈልጉ" />
        </td>
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>ተ.ቁ</th>
			<th>የመገድ መለያ ቁጥር</th>
            <th>መነሻ ከተማ</th>
            <th>መድረሻ ከተማ</th>            
            <th>የመኪና መለያ ቁጥር</th>
			<!--th>sideno</th-->            
            <!--th>nofseat</th-->
            <th>ዋጋ</th>
            <th>ቀን</th>
            <th colspan="2">ድርጊት</th>
        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SELECT * FROM route where descity  like '%$key%' or descity like '%$key%'");
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
			<!--td><?php echo $row['sideno'];?></td-->
            <!--td><?php echo $row['nofseat'];?></td-->
            <td><?php echo $row['price'];?></td>
            <td><?php echo date("M d, Y ",strtotime($row['date'])); ?></span></td>
            <td><a href="?tag=route_entryA&opr=upd&rs_id=<?php echo $row['route_id'];?>" title="አስተካክል"><img src="picture/update.png" /></a></td>
            <td><a href="?tag=view_routeA&opr=del&rs_id=<?php echo $row['route_id'];?>" title="አጥፋ"><img src="picture/delete.png" /></a></td>
             
        </tr>
    <?php	
    }
	// ----- for search route------	
		
	
    ?>
    </table>
</form>
</div>
</body>
</html>