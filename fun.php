<?php

function hello($x){

    $user = $x;

    if ($user === "Samer"){
        echo "hello " . $user;
    }else{
        echo "Bye " . $user;
    }

}

hello("Samer");
echo "<br>";
hello("Saud");
echo "<br>";



function add($x , $y){
    return $x + $y ;
}

echo add(5 , 10);

?>