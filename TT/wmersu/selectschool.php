<div id="top_style">
        <div id="top_style_text">
       <b> <i class="fa fa-registered" ></i>Teacher Registration Form </b>
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_teacher">
				<input type="button" name="btn_view" title="View teacher" value="View_Teacher" id="button_view" style="width:120px;"  /></a>
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div >
   	  <table id="Teacher_R"  border="0" cellpadding="0" cellspacing="0" width="0px">
        	<tr>
            	<td style="color: black; text-align:right"><b>Teacher ID:</b></td>
            	<td>
                <input type="text" name="tid" style="color:blue;" title="Please enter ID."  id="textbox" required="required"/>
    			</td>		
            </tr>
            <tr>
            	<td style="color: black;text-align:right"><b>First Name:</b></td>
            	<td>
                	<input type="text" name="Fname" style="color:blue" title="Please enter first name." id="textbox" required="required"/>
    			</td>
            </tr>
         
            <tr>
            	<td style="color: black;text-align:right"><b>Last Name:</b></td>
            	<td>
                	<input type="text" name="tlname" style="color:blue"  title="Please enter last name."  id="textbox" required="required"/>
    			</td>
			
        	</tr>
			  <tr>
            	<td style="color: black;text-align:right"><b>age:</b></td>
            	<td>
                	<input type="text" name="age" style="color:blue;"  title="Please enter last name." id="textbox" required="required"/>
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
			<td ><select id="textbox" required="required" name="type">
			<?php $role=array("Selectrole","director","teacher");
			foreach($role as $i) echo"<option value=$i>$i</option>";
			?></select><br></td>
             </tr>
          <tr>
            	<td style="color: black;text-align:right"><b>Date of occupation:</b></td>
            	<td>
                	<input type="date" name="dofocp" style="color:blue" title="Please enter date ."  id="textbox" required="required"/>
                </td>
            </tr>
              <tr>
            	<td style="color: black;text-align:right"><b> Education level:</b></td>
            	<td>
                <select  name="levelofedu" style="color:blue"  id="textbox" required>
				 <option value="">select you education level</option>
				  <option value="diploma">Diploma</option>
				    <option value="Degree">Degree</option>
					<option value="M.Sc">M.Sc.</option>
					</select>        	
                </td>
            </tr>
			
			    <tr>
            	<td style="color: black;text-align:right"><b>Major:</b></td>
            	<td>
                	<input type="text" name="major" style="color:blue"  title="Please enter major."  id="textbox" required="required"/>
                </td>
            </tr>
			<tr>
			<td style="color: black;text-align:right"><b>Woreda Code:</b></td>
            	<td>
				<select  name="wcode" style="color:blue;" id="textbox" class="wcode" required>
				 <option selected="selected" value="">Select Woreda</option>
				<?php
				$wcode="SELECT *FROM woreda";
				$recored=mysql_query($wcode);
		         if($recored)
				 
				?>
				<!--<option value=""></option>-->
		        <?php
		      while($row=mysql_fetch_assoc($recored))
		      {
				  $wcode=$row['wcode'];
				  ?>
			 <option  value="<?php echo  $wcode;?>">
		    <?php echo  $wcode;?>
		     </option>
			 <?php
				 }
				 
		       ?>
				</select>
                </td>
				<td style="color:blue;"><a href="main.php?tag=selectschool" class="stocks">submit</a></td>
			</tr>
			<tr>
			<td style="color: black;text-align:right"><b>School ID:</b></td>
            	<td>
				<select  name="sid" style="color:blue;" id="textbox" class="wcode" required>
				 <option selected="selected" value="">Select school</option>
				<?php
				$sid="SELECT * FROM school where sid='$wocode'";
				$recored2=mysql_query($sid);
		         if($recored2)
				{
				?>
				<!--<option value=""></option>-->
		        <?php
		      while($row2=mysql_fetch_assoc($recored2))
		      {
				  
				  ?>
			 <option id="woreda" value="<?php echo $row2['sid'];?>">
		    <?php echo $row2["sid"];?>
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
                 <input type="submit" name="btn_sub" value="Register" id="button-in"  />	
                </td>
            </tr>
	  </table>
    </div>
 
    </form>
</div><!-- end of style_-->