<?php

/* 

Esa porción del código que llamamos función pero des algo que se encarga de realzar una acción muy especifica y muy puntual dentro de los escripts
La idea es además de optimizar el código y que esté ordenado, es que sea reutilizable.

*/

//$nombre = "Lorena";
//$apellido = "Carreno";

//echo $nombre." ".$apellido;

function concatenar($nombre, $apellido){
    echo $nombre." ".$apellido;
}

concatenar("Lorena", "Carreno");

echo "\n";

function sumaNumeros($numeros){
    $suma = 0;
    for ( $i = 0 ; $i < 4 ; $i++ ){
    $suma = $suma + $numeros[$i];
    }
    echo "La suma de los valores del array es: ".$suma."\n";
}

$numeros = array(1,2,3,4);
sumaNumeros($numeros);

/* The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

https://www.w3schools.com/php/php_functions.asp */
