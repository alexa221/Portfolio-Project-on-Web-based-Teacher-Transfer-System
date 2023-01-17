
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golden bus transport system</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
    <tr>
        
        <td>
            <a href="?tag=notice"><input type="button" title="Add new notice" name="butAdd" value="Add New" id="button-search" /></a>
        </td>
        <td>
            <input type="text" name="searchtxt" title="Enter date for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
            <input type="submit" name="btnsearch" value="Search" id="button-search" title="Search notice" />
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
            <th>Day</th>
            <th>Title</th>
            <th>Notice</th>
            
        </tr>
        
        <?php
    $key="";
    if(isset($_POST['searchtxt']))
        $key=$_POST['searchtxt'];
    
    if($key !="")
        $sql_sel=mysql_query("SELECT * FROM notice where Day  like '%$key%'");
    else
         $sql_sel=mysql_query("SELECT * FROM notice");
    
        
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"lightblue";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $row['Day'];?></td>
            <td><?php echo $row['Title'];?></td>
            <td><?php echo $row['text'];?></td>
            
        </tr>
    <?php   
    }
    // ----- for search route------ 
        
    
    ?>
    </table>
    </form>
    <?php ?>
</div>
</body>
</html>