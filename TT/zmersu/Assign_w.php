<?php 
$sql=mysqli_query($conn,"select *  from account where u_id='$id_session'");
$r=mysqli_fetch_array($sql);
if($r)
$u_id=$r['u_id'];
$user=mysqli_query($conn,"SELECT * FROM user where u_id='$u_id'");
$row1=mysqli_fetch_array($user);
$id=$row1['u_id'];
$woreda=$row1['wcode'];
//echo $woreda;
?>





<!-- placement  starts from here-->


<?php
// $noft=array();
$tid=array();
$major=array();
$f_choose=array();
$s_choose=array();
//$t_choose=array();
$fname=array();
$lname=array();
$oldwcode=array();
$deletall=mysqli_query($conn,"DELETE from wtow_result ");

$teacher=mysqli_query($conn,"SELECT * from w_transfer_form  
 
order by sum_E desc  ");

 $i=0;
 while($row=mysqli_fetch_array($teacher)){

	
	$tid[]=$row['wtrid'];
    $major[]=$row['major'];
    $f_choose[]=$row['first_choice'];
    $s_choose[]=$row['second_choice'];
    $fname[]=$row['Fname'];
    $lname[]=$row['Lname'];
    $oldwcode[]=$row['wcode'];
   

   




    
   
$i++;
 }
//  print_r($tid);


$noft=0;
 for($k=0; $k<sizeof($tid);$k++){

// amharic teacher placement 




if($major[$k]=='Amharic'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
//$c3=countschool($conn,$t_choose[$k],$major[$k]);
 
$school1=mysqli_query($conn,"SELECT * from w_request_table 
where Amharic>'$c1' 
  and
(wcode='$f_choose[$k]')
");

$school2=mysqli_query($conn,"SELECT * from w_request_table 
where Amharic>'$c2' 
  and
(wcode='$s_choose[$k]')
");

/*$school3=mysqli_query($conn,"SELECT * from w_request_table 
where Amharic>'$c3' 
  and
(wcode='$t_choose[$k]')
");*/


 if($row=mysqli_fetch_array($school1)){

	$techid=$tid[$k];
	//$sid=$row['sid'];
   $wcode=$row['wcode'];
   $fn=$fname[$k];
   $ln=$lname[$k];
   $osid=$oldwcode[$k];
   $m=$major[$k];
   
   placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
   $noft++;

 }
 else if($row=mysqli_fetch_array($school2)){

	$techid=$tid[$k];
	//$sid=$row['sid'];
   $wcode=$row['wcode'];
   $fn=$fname[$k];
   $ln=$lname[$k];
   $osid=$oldwcode[$k];
   $m=$major[$k];
   
   placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
   $noft++;
 }
 /*else if($row=mysqli_fetch_array($school3)){

	$techid=$tid[$k];
	//$sid=$row['sid'];
   $wcode=$row['wcode'];
   $fn=$fname[$k];
   $ln=$lname[$k];
   $osid=$oldwcode[$k];
   $m=$major[$k];
   
   placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
   $noft++;
 }*/
 else continue;




}
// amharic end here

// english start here


if($major[$k]=='English'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
//$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from w_request_table 
  where English>'$c1'
    and
  (wcode='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from w_request_table 
  where English>'$c2'
    and
  (wcode='$s_choose[$k]')
  ");
  /*$school3=mysqli_query($conn,"SELECT * from w_request_table 
  where English>'$c3' 
    and
  (wcode='$t_choose[$k]')
  ");*/
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   /*else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }*/
   else continue;  
  
  }

//english end here

//biology begin here






if($major[$k]=='Biology'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
//$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from w_request_table 
  where Biology>'$c1'
    and
  (wcode='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from w_request_table 
  where Biology>'$c2'
    and
  (wcode='$s_choose[$k]')
  ");
  /*$school3=mysqli_query($conn,"SELECT * from w_request_table 
  where Biology>'$c3' 
    and
  (wcode='$t_choose[$k]')
  ");*/
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
  /* else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }*/
   else continue;  
  
  }


//bilogy ennd here
 

// chemistry begin here






if($major[$k]=='Chemistry'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
//$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from w_request_table 
  where Chemistry>'$c1'
    and
  (wcode='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from w_request_table 
  where Chemistry>'$c2'
    and
  (wcode='$s_choose[$k]')
  ");
 /* $school3=mysqli_query($conn,"SELECT * from w_request_table 
  where Chemistry>'$c3' 
    and
  (wcode='$t_choose[$k]')
  ");*/
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
   // $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   /*else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
   // $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }*/
   else continue;  
  
  }




// chemistry end here

//physics start here



if($major[$k]=='Physics'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
//$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from w_request_table 
  where Physics>'$c1'
    and
  (wcode='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from w_request_table 
  where Physics>'$c2'
    and
  (wcode='$s_choose[$k]')
  ");
  /*$school3=mysqli_query($conn,"SELECT * from w_request_table 
  where Physics>'$c3' 
    and
  (wcode='$t_choose[$k]')
  ");*/
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   /*else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }*/
   else continue;  
  
  }

//physics end here



//ICT begin 


if($major[$k]=='ICT'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
//$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from w_request_table 
  where ICT>'$c1'
    and
  (wcode='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from w_request_table 
  where ICT>'$c2'
    and
  (wcode='$s_choose[$k]')
  ");
  /*$school3=mysqli_query($conn,"SELECT * from w_request_table 
  where ICT>'$c3' 
    and
  (wcode='$t_choose[$k]')
  ");*/
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
   // $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }
   /*else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    //$sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldwcode[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$fn,$ln,$m,$wcode);
     $noft++;
   }*/
   else continue;  
  
  }

//ICT end


}


echo "   <b><i>Congratulations         [$noft]        number of teacher can get transfer   successfully!!!!!!!!</i></b>";


?>



<!-- placemnt end here -->


<?php 
// counting   requirment of each school in each subject
function countschool($conn,$sch,$m){
  $cc=mysqli_query($conn,"SELECT  T_woreda_id , count(T_woreda_id)
as noofs from wtow_result where T_woreda_id='$sch' and major='$m'");
if($coc=mysqli_fetch_array($cc)){
  return $coc['noofs'];
}
}

//counting end here
?>
















<?php

// this function is for inserting placement result to result table
function placement($conn,$techid,$osid,$fn,$ln,$m,$wcode){
$sql2=mysqli_query($conn,"INSERT INTO wtow_result VALUES('$techid',
'$osid','$fn','$ln','$m','$wcode','noschool',NOW())");
if($sql2==true)
{
  
echo " ";
}
else {
$msg="<ft>Not inserted try again</ft>";
}
// placement end here
$update=mysqli_query($conn,"update transfer_form set status='transfered' where trid='$techid'");
//$woreda=mysqli_query($conn,"update teacher set wcode='$wcode' where trid='$techid'");-->
  } 

	














?>