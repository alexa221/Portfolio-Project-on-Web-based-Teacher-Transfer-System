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
$t_choose=array();
$fname=array();
$lname=array();
$oldsid=array();
$deletall=mysqli_query($conn,"DELETE from result where wcode='$woreda'");

$teacher=mysqli_query($conn,"SELECT * from transfer_form where status='pandding' and wcode='$woreda' 
 
order by service desc ");

 $i=0;
 while($row=mysqli_fetch_array($teacher)){

	
	$tid[]=$row['trid'];
    $major[]=$row['major'];
    $f_choose[]=$row['first_choice'];
    $s_choose[]=$row['second_choice'];
    $t_choose[]=$row['third_choice'];
    $fname[]=$row['Fname'];
    $lname[]=$row['Lname'];
    $oldsid[]=$row['sid'];
   

   




    
   
$i++;
 }
//  print_r($tid);


$noft=0;
 for($k=0; $k<sizeof($tid);$k++){

// amharic teacher placement 




if($major[$k]=='Amharic'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
$c3=countschool($conn,$t_choose[$k],$major[$k]);
 
$school1=mysqli_query($conn,"SELECT * from request_table 
where Amharic>'$c1' 
  and
(sid='$f_choose[$k]')
");

$school2=mysqli_query($conn,"SELECT * from request_table 
where Amharic>'$c2' 
  and
(sid='$s_choose[$k]')
");

$school3=mysqli_query($conn,"SELECT * from request_table 
where Amharic>'$c3' 
  and
(sid='$t_choose[$k]')
");


 if($row=mysqli_fetch_array($school1)){

	$techid=$tid[$k];
	$sid=$row['sid'];
   $wcode=$row['wcode'];
   $fn=$fname[$k];
   $ln=$lname[$k];
   $osid=$oldsid[$k];
   $m=$major[$k];
   
   placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
   $noft++;

 }
 else if($row=mysqli_fetch_array($school2)){

	$techid=$tid[$k];
	$sid=$row['sid'];
   $wcode=$row['wcode'];
   $fn=$fname[$k];
   $ln=$lname[$k];
   $osid=$oldsid[$k];
   $m=$major[$k];
   
   placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
   $noft++;
 }
 else if($row=mysqli_fetch_array($school3)){

	$techid=$tid[$k];
	$sid=$row['sid'];
   $wcode=$row['wcode'];
   $fn=$fname[$k];
   $ln=$lname[$k];
   $osid=$oldsid[$k];
   $m=$major[$k];
   
   placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
   $noft++;
 }
 else continue;




}
// amharic end here

// english start here


if($major[$k]=='English'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from request_table 
  where English>'$c1'
    and
  (sid='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from request_table 
  where English>'$c2'
    and
  (sid='$s_choose[$k]')
  ");
  $school3=mysqli_query($conn,"SELECT * from request_table 
  where English>'$c3' 
    and
  (sid='$t_choose[$k]')
  ");
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else continue;  
  
  }

//english end here

//biology begin here






if($major[$k]=='Biology'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from request_table 
  where Biology>'$c1'
    and
  (sid='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from request_table 
  where Biology>'$c2'
    and
  (sid='$s_choose[$k]')
  ");
  $school3=mysqli_query($conn,"SELECT * from request_table 
  where Biology>'$c3' 
    and
  (sid='$t_choose[$k]')
  ");
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else continue;  
  
  }


//bilogy ennd here
 

// chemistry begin here






if($major[$k]=='Chemistry'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from request_table 
  where Chemistry>'$c1'
    and
  (sid='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from request_table 
  where Chemistry>'$c2'
    and
  (sid='$s_choose[$k]')
  ");
  $school3=mysqli_query($conn,"SELECT * from request_table 
  where Chemistry>'$c3' 
    and
  (sid='$t_choose[$k]')
  ");
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else continue;  
  
  }




// chemistry end here

//physics start here



if($major[$k]=='Physics'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from request_table 
  where Physics>'$c1'
    and
  (sid='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from request_table 
  where Physics>'$c2'
    and
  (sid='$s_choose[$k]')
  ");
  $school3=mysqli_query($conn,"SELECT * from request_table 
  where Physics>'$c3' 
    and
  (sid='$t_choose[$k]')
  ");
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else continue;  
  
  }

//physics end here



//ICT begin 


if($major[$k]=='ICT'){
  $c1=countschool($conn,$f_choose[$k],$major[$k]);
$c2=countschool($conn,$s_choose[$k],$major[$k]);
$c3=countschool($conn,$t_choose[$k],$major[$k]);
  $school1=mysqli_query($conn,"SELECT * from request_table 
  where ICT>'$c1'
    and
  (sid='$f_choose[$k]')
  ");
  $school2=mysqli_query($conn,"SELECT * from request_table 
  where ICT>'$c2'
    and
  (sid='$s_choose[$k]')
  ");
  $school3=mysqli_query($conn,"SELECT * from request_table 
  where ICT>'$c3' 
    and
  (sid='$t_choose[$k]')
  ");
  
  
   if($row=mysqli_fetch_array($school1)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school2)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
   else if($row=mysqli_fetch_array($school3)){
  
    $techid=$tid[$k];
    $sid=$row['sid'];
     $wcode=$row['wcode'];
     $fn=$fname[$k];
     $ln=$lname[$k];
     $osid=$oldsid[$k];
     $m=$major[$k];
     
     placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid);
     $noft++;
   }
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
  $cc=mysqli_query($conn,"SELECT  T_School_id , count(T_School_id)
as noofs from result where T_School_id='$sch' and major='$m'");
if($coc=mysqli_fetch_array($cc)){
  return $coc['noofs'];
}
}

//counting end here
?>
















<?php

// this function is for inserting placement result to result table
function placement($conn,$techid,$osid,$wcode,$fn,$ln,$m,$sid){
 
  
$sql2=mysqli_query($conn,"INSERT INTO result VALUES('$techid',
'$osid','$wcode','$fn','$ln','$m','$sid')");
if($sql2==true)
{
  
echo " ";
}
else {
$msg="<ft>Not inserted try again</ft>";
}
// placement end here
$update=mysqli_query($conn,"update teacher set sid='$sid' where t_id='$techid'");
  } 

	














?>