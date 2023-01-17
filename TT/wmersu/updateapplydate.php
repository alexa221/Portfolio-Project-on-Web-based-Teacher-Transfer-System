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

//------------------update data----------

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<link rel="stylesheet" type="text/css" href="css/solid.css">
<link rel="stylesheet" type="text/css" href="font/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="font/css/solid.css">
<link rel="stylesheet" type="text/css" href="css/brands.css">
<title>teacher transfer managment system</title>
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
#school_R{
	margin-left:30px;
	height:100px;
	background-color: #d9e8e6;
    padding-left:20px;
    -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
    box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);

}
.wcode{
	border:1px solid green;
	border-radius:15px;
	background-color:pink;
}
</style>

<?php	

?>
<!-- for form Register-->
	
<!--<div id="top_style">
        <div id="top_style_text">
       <b> <i class="fa fa-plus" aria-hidden="true"></i>Update Teacher Apply Date</b>
        </div><!-- end of top_style_text-->
<!-- end of top_style_button-->
<!--</div>--><!-- end of top_style-->

<div id="style_informations">
<div style="margin:24px;padding-left:34px">
<p style="margin-left:26px;background-color:white;margin-right:420px"><b><font style="color:green;font-size:20px;background-color:white">&#x2730;</font>&nbsp;Update Teacher Apply Date </b></p>
	<?php
			
			                 $sql=mysqli_query($conn,"select * from apply_date");
								//$recorfound=($sql);
							if(mysqli_num_rows($sql))
							 {
							$row=mysqli_fetch_assoc($sql);
											
echo"<form action='' method='post' enctype='multipart/form-data'>";
echo"<table border='0' id='school_R'>";
echo"<tr><td>Start Date</td><td><input type='datetime' name='sdate' value='".$row["StartDate"]."'required class='textbox'/></td></tr>";
echo"<tr><td>End Date</td><td><input type='datetime' name='edate' value='".$row["EndDate"]."'  required='true'class='textbox'/></td></tr>";
echo"<tr><td colspan='2' style='padding-left:29px'><input type='submit' value='Update' name='Update' id='btn'/>&nbsp;<input type='reset'
			 value='Reset'id='btn'/></td></tr></table></form>";
										
										}
										else
										echo "No Record Found!!";	
					 if(isset($_POST["Update"]))
									{
						$sdate=$_POST['sdate'];
						$edate=$_POST['edate'];
						$updated=mysqli_query($conn,"update apply_date set StartDate='$sdate',EndDate='$edate'");
										if(mysqli_affected_rows($updated))
										echo " Teacher Request Date Is updated successfully!";
										 else
										echo "Unable to update!";
													
									}
					?>
					</div>
</div><!-- end of style_informatios -->
<?php

?>
</body>
</html>