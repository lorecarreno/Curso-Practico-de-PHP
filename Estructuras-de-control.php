<?php

/* 6️⃣
Son herramientas que nos provee nuestro lenguaje para que podamos hacer validaciones, iteraciones y demas de acuerdo a nuestras necesidades.

Tenemos:
-if             -for 
-else           -foreach
-while          -switch 
-do-while

------------------------------
** if - else **

$valorA = 5;

if($valorA == 10) {
    echo "Es igual a 10";
} else {
    echo "No es igual a 10";
}
-------------------------------
** while - dowile **

$i = 0;
do {
    echo $i++;
} while ($i <= 10);
-------------------------------
** for - foreach **

$arr = array(1,2,3,4);
foreach($arr as $value) {
    echo $value;
}
------------------------------


