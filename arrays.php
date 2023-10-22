<form action="arrays.php" method=GET>

<input type="text" name="name">
<input  type="submit" >


</form>




<?php

$name = $_GET["name"];

$Grade = [
   "Samer" => ["100" , "A+"] , 
   "Mohammed" => ["90" , "A"] , 
   "Abdullah" => ["95" , "A+"] , 
];
echo "Scoure : " . $Grade[$name][0];
echo "<br>" ;
echo " Grade : " . $Grade[$name][1];


?>