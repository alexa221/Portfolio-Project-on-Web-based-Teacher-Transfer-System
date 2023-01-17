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
	$del_sql=mysql_query("DELETE FROM comment WHERE comment_id=$id");
	if($del_sql){
		echo "<h3 style='color:#e01f3c' ><b>አስተያየት ተሰርዟል... !</b></h3>";
		
		}
	else{
		$msg="መሰረዝ አልተቻለም :".mysql_error();
		}	
			
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="am">
<head>
    <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ወርቃማ አውቶቡስ ትራንስፖርት ስርዓት</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;"><b>አስተያየቱን ይመሊከቱ</b></td>
        <td>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
        </td>
        <td>
        	<input type="text" name="searchtxt" title="ለመፈለግ ስም ያስገቡ " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="ፈልግ" id="button-search" title="አስተያየት ፈልግ" />
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
            <th>ቁጥር</th>
			<th>የአስተያየት መለያ ቁ</th>
            <th>ስም</th>
            <th>ኢሜል</th>            
            <th>የአስተያየት</th>
            <th>የተጻፈበት ቀን</th>
            <th >ተጨማር ስራ</th>
        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM comment WHERE name  like '%$key%'");
	else
		 $sql_sel=mysql_query("SELECT * FROM comment");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			<td><?php echo $row['comment_id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['content'];?></td>
            <td><?php echo date("M d, Y H:i:s",strtotime($row['date'])); ?></span></td>
            <td><a href="?tag=view_commentA&opr=del&rs_id=<?php echo $row['comment_id'];?>" title="ሰርዝ"><img src="picture/delete.png" /></a></td>
            
        </tr>
    <?php	
    }
	
		
	
    ?>
    </table>
</form>
</div> 
</body>
</html>