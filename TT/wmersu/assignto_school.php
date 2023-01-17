
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
if(isset($_POST['btn_upd'])){
	$rid=$_POST['rid'];
	$fname=$_POST['tfname'];
	$lname=$_POST['tlname'];	
	$major=$_POST['major'];	
	$wt=$_POST['wcode'];
	$woreda=$_POST['twcode'];	
	$school=$_POST['school_id'];
	$sql_update=mysqli_query($conn,"insert into result VALUES( 
	                            '$rid',
                                '$wt',
								'$woreda',								 
								'$fname',
								'$lname',
								'$major',
								'$school'
							)
							
							");						
	if($sql_update==true ){
		echo "<fz>teacher Assign Successfully</fz>";
		echo'<meta content="2;main.php?assignto_school.php" http-equiv="refresh" />';	
		$sql2=mysqli_query($conn,"UPDATE wtow_result SET status='hasschool' WHERE RID='$rid'");	
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
<link rel="stylesheet" type="text/css" href="font/brands.css">
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
#Teacher_R
{
	padding-left:4px;
	marign-left:50px;
	  -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
    box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
}
.error{
    	color: red;
       
    }
</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysqli_query($conn,"SELECT * FROM wtow_result WHERE RID=$id");
	$rs_upd=mysqli_fetch_array($sql_upd);
	$rid=$rs_upd['RID'];
	$new_woreda=$rs_upd['T_woreda_id'];
	$wo=mysqli_query($conn,"select * from woreda where wname='$new_woreda'");
 $row8=mysqli_fetch_array($wo);
 $wid=$row8['wcode'];
	//list($y,$m,$d)=explode('-',$rs_upd['dob']);
	
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> Teacher Update Form</b></div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_teacher"><input type="button" name="btn_view" title="View schedule" value="Back" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

	<?php
	$woreda_code=mysqli_query($conn,"select *  from account where u_id='$id_session'")or die(mysql_error());
		$row=mysqli_fetch_array($woreda_code); {
		$uid=$row['u_id'];
		}
 $sql=mysqli_query($conn,"select *  from user where u_id='$uid'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id']; 
$wcode=$r['wcode']; 
$sql2=mysqli_query($conn,"select * from woreda where wcode='$wcode'");
 while($row=mysqli_fetch_array($sql2)){ 
 $wname=$row['wname'];
 $wcode1=$row['wcode']; 
 }
		?>
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
		     <tr>
            <td style="color: black;text-align:center"><b>RID:</b></td>
            	<td>
                <input style="color: blue" type="text" name="rid" id="textbox" value="<?php echo $rid;?>"/>
    			</td>
            </tr>
            <tr>
            	<td style="color: black;text-align:center"><b>First Name:</b></td>
            	<td>
                <input style="color: blue" type="text" name="tfname" id="textbox" value="<?php echo $rs_upd['Fname'];?>"/>
    			</td>
            </tr>
         
            <tr>
            	<td style="color: black;text-align:center"><b>Last Name:</b></td>
            	<td>
              <input style="color: blue" type="text" name="tlname" id="textbox" value="<?php echo $rs_upd['Lname'];?>"/>
    			</td>
        	</tr>
             <tr>
            	<td style="color: black;text-align:center"><b>Major:</b></td>
			<td>
              <input style="color: blue" type="text" name="major" id="textbox" value="<?php echo $rs_upd['major'];?>"/>
    			</td>
            </tr>
			<tr>
			<td style="color: black;text-align:center"><b>Woreda code:</b></td>
            	<td>
                 <input style="color: blue" type="text" name="wcode" id="textbox" value="<?php echo $rs_upd['wcode'];?>"/>  
                </td>
			</tr>
			<tr>
			<td style="color: black;text-align:center"><b>transfer code:</b></td>
            <td>
            <input style="color: blue" type="text" name="twcode" id="textbox" value="<?php echo $row8['wcode'];?>"/>  
             </td>
			</tr>
			<tr>
			<td style="color: black;text-align:right"><b>School ID:</b></td>
            	<td>
				<select  name="school_id" style="color:blue;width:200px;height:25px" id="school_name1">
				 <option selected="selected" value="">Select school</option>
				<?php

				$sql5="SELECT * FROM school where wcode='$wcode1'";
				$recored2=mysqli_query($conn,$sql5);
		        if($recored2)
				{
				?>
				<!--<option value=""></option>-->
		        <?php
		      while($row2=mysqli_fetch_assoc($recored2))
		      {
				 ?>
			 <option  value="<?php echo $row2['sid'];?>">
		    <?php echo $row2["sname"];?>
		   </option>
		     <?php
				}
				}
		       ?>
				</select>
                </td>
			</tr>
			
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_upd" value="assign" id="button-in"  />
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
       <b>&#x2730; Teacher Registration Form </b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_teacher">
				<input type="button" name="btn_view" title="View teacher" value="View_Teacher" id="button_view" style="width:120px;"  /></a>
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" id="">

    <div >
   	  <table id="Teacher_R"  border="0" cellpadding="0" cellspacing="0" width="0px">
        	<!--<tr>
            	<td style="color: black; text-align:right"><b>Teacher ID:</b></td>
            	<td>
                <input type="text" name="tid" style="color:blue;" title="Please enter ID."  id="textbox" required="required"/>
    			</td>		
            </tr>-->
            <tr>
            	<td style="color: black;text-align:right"><b>First Name:</b></td>
            	<td>
                	<input type="text" name="tfname" style="color:blue;width:200px;height:25px" pattern="[a-zA-Z]{3,14}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   size='20%'id="textbox" required="required" />
    			</td>
            </tr>
         
            <tr>
            	<td style="color: black;text-align:right"><b>Last Name:</b></td>
            	<td>
                	<input type="text" name="tlname" style="color:blue"  title="Please enter last name." pattern="[a-zA-Z]{3,14}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   size='20%' id="textbox" required="required" />
    			</td>
			
        	</tr>
			  <tr>
            	<td style="color: black;text-align:right"><b>age:</b></td>
            	<td>
                	<input type="text" name="age" style="color:blue;width:200px;height:25px;"  title="Please enter last name." pattern="[0-9 ]{2,}" title="Please enter 2 digit no." maxlength="3" id="textbox" required="required"/>

    			</td>
			
        	</tr>
        	<tr>
            	<td style="color: black;text-align:right"><b>Sex:</b></td>
            	<td>
				<select  name="tsex" style="color:blue;" id="textbox" required>
				 <option value=""selected>please select sex</option>
				  <option value="male">male</option>
				    <option value="femal">female</option>
					</select>        	
                </td>
      
            </tr>
				
			<tr>
			   <td style="color: black;text-align:right"><b>email:</b></td>
                   <td>
                	<input type="email" name="email"  style="color:blue;border:1px solid #bdd8fb;border-radius:10px" id="textbox" required="required"/>
    			</td>
			</tr>
	      <tr>
			<td style="color: blue;text-align:right"><b>Role<span class="red"></b></span</td>
			<td ><select  name="type" id="textbox" >
			<?php $role=array("Selectrole","director","teacher");
			foreach($role as $i) echo"<option value=$i>$i</option>";
			?></select><br></td>
             </tr>
          <tr>
            	<td style="color: black;text-align:right"><b>Date of occupation:</b></td>
            	<td>
                	<input type="date" name="dofocp" style="color:blue;width:200px;height:25px" title="Please enter date ."  id="textbox_date" required="required"/>
                </td>
            </tr>
              <tr>
            	<td style="color: black;text-align:right"><b> Education level:</b></td>
            	<td>
                <select  name="levelofedu" style="color:blue"  id="textbox" required>
				 <option value="">select you education level</option>
				  <option value="Diploma">Diploma</option>
				    <option value="Degree">Degree</option>
					<option value="M.Sc">M.Sc.</option>
					</select>        	
                </td>
            </tr>
			
			    <tr>
            	<td style="color: black;text-align:right"><b>Major:</b></td>
            	<td>
				<select  name="major" style="color:blue"  id="textbox" required>
				 <option value="">select subject</option>
				  <option value="Amharic">Amharic</option>
				    <option value="English">English</option>
					 <option value="Mathematics">Mathematics</option>
					<option value="Biology">Biology</option>
					<option value="Chemistry">Chemistry</option>
					<option value="ICT">ICT</option>
					<option value="Physics">Physics</option>
					<option value="Geography">Geography</option>
					<option value="History">History</option>
					<option value="HPE">HPE</option>
				   <option value="Civics">Civics</option>
					</select> 
                </td>
            </tr>
			<tr>
           <td style="color: black;text-align:right"><b>Salary:</b></td>
           <td>
           <input type="text" name="Salary" style="color:blue" title="Please enter date ." pattern="[0-9 ]{3,5}" title="Please enter  digit ." maxlength="5" id="textbox" required="required"/>
           </td>
            </tr>
			<tr>
			<td style="color: black;text-align:right"><b>Woreda Code:</b></td>
						<td>
           <input type="text" name="wcode" style="color:blue" value="<?php echo $wcode1;?>"  id="textbox" required="required"/>
              </td>
			     </tr>

			<tr>
			<td style="color: black;text-align:right"><b>School ID:</b></td>
            	<td>
				<select  name="school_id" style="color:blue;width:200px;height:25px" id="school_name1">
				 <option selected="selected" value="">Select school</option>
				<?php

				$sql5="SELECT * FROM school where wcode='$wcode1'";
				$recored2=mysqli_query($conn,$sql5);
		        if($recored2)
				{
				?>
				<!--<option value=""></option>-->
		        <?php
		      while($row2=mysqli_fetch_assoc($recored2))
		      {
				 ?>
			 <option  value="<?php echo $row2['sid'];?>">
		    <?php echo $row2["sname"];?>
		   </option>
		     <?php
				}
				}
		       ?>
				</select>
                </td>
			</tr>
            <tr>
                <td colspan="2" style="padding-right:60px">
     	          <input type="reset" value="Cancel" id="button-in"/>
                 <input type="submit" name="btn_sub" value="Register" id="button-in"/>	
                </td>
            </tr>
	  </table>
    </div>
 
    </form>

</div><!-- end of style_informatios -->
<?php
}
?>
<script src="js/jquery-latest.min.js"></script>
		<script>
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;    
    $('#textbox_date').attr('max', maxDate);
});		
		</script>
</body>
</html>