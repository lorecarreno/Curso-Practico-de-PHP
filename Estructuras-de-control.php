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
Esta estructura de control nos ayuda a validar si sucede alguna condición para que una acción se pueda ejecutar y en caso de que esa validación sea falso o no se cumpla entonces se ejecuta otra acción

$valorA = 5;

if($valorA == 10) {
    echo "Es igual a 10";
} else {
    echo "No es igual a 10";
}
-------------------------------
** while - dowile **
Estas estructuras las tratamos como un ciclo porque se encargan de ejecutar una acción mientras una condición sucede. Parecido al if.

$i = 0;
do {
    echo $i++;
} while ($i <= 10);
-------------------------------
** for - foreach **
tendremos un array y pasaremos por cada una de sus posiciones para hacer cualquier haccion que necesitemos. 

$arr = array(1, 2, 3, 4);
for($i = 0 ; $i < 4 ; $i++ ){
    echo $arr[$i];
}

echo "\n";

$arr = array(1,2,3,4);
foreach($arr as $value) {
    echo $value;
}

echo "\n";
-------------------------------
** switch **
validando diferentes casos para un mismo valor.
Con esta instrucción podemos tener diferentes casos de evaluación para una variable, quiere decir que si uno de esos casos resulta ser igual al valor de esa variable, entonces se va a ejecutar la instruccion que se le haya indicado.

$valorA = 6;

switch($valorA){
    case 1: "EL VALOR ES 1"; break;
    case 2: "EL VALOR ES 2"; break;
    case 3: "EL VALOR ES 3"; break;
    default: "NO ES NINGUNO DE LOS VALORES 1, 2 o 3"; break;
}






