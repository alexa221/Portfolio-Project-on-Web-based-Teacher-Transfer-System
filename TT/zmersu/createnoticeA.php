<?php
if(isset($_POST['submit'])){
$Day=$_POST['Day'];
$title=$_POST['Title'];
$body=$_POST['text'];


$conn=mysql_connect("localhost","root","");
mysql_select_db('goldenbus'); 
$query=mysql_query("select * from notice where Day='".$Day."' and title='".$title."' ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0){

$sql="insert into notice values('$Day','$title','$body')";
                   $result=mysql_query($sql);
                                    echo "<script type = \"text/javascript\">
                                            alert(\"ማስታወቂያ በተሳካ ሁኔታ ተፈጥሯል።
\");
                                            window.location = (\"mainA.php\")
                                            </script>"; 
}
                                            
else 
 {
          echo'በ  <u>'.$Day.'</u> ቀን የተጻፈ 
<u>'.$title.'</u> ማስተዋቂያ አለ / ድጋሜ ነው።';


}
}
