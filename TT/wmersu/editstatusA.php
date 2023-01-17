<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form action="execeditstatusA.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['rs_id'] ?>">
	Status:<br>
	<select name="status" class="ed">
	<option>በጉዞ ላይ </option>
	<option>ተሰርዟል</option>
	<option>ደርሷል </option>
	
	</select>
	<br>
	<input type="submit" value="አስተካክል" id="button1">
</form>