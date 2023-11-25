<?php

 $host="localhost";

 $user="root";

 $pass="";

 $db="internet";

 $con=mysqli_connect($host,$user, $pass, $db);
if ($con) {

 echo "ok";
 }

 else

 {
echo "DB Not Connected";

 }

 ?>
