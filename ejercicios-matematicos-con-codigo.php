<?php

/* 
max();— Encuentra el valor más alto
min(); — Encuentra el valor más bajo
pi (); — Obtiene el valor de pi
rand(); — Genera un número entero aleatorio
sqrt(); — Obtiene la Raíz cuadrada de un numero

Existen otras funciones matemáticas:
https://www.php.net/manual/es/book.math.php

PHP: Funciones Matemáticas - Manual
https://www.php.net/manual/es/ref.math.php

---------------------------------------

//echo max(9,4,3,2,6);
//echo min(9,4,3,2,6);
//echo sqrt(4);

//generar números aleatoreos
//echo rand(40, 100);

Documentación:
https://www.php.net/manual/en/book.math.php

----------------------------------------------------------------
Lecturas recomendadas

PHP: Manual de PHP - Manual
https://php.net/manual/es/index.php


PHP: max - Manual
https://www.php.net/manual/es/function.max.php


PHP: min - Manual
https://www.php.net/manual/es/function.min

*/

function getFate($option)
{
    switch ($option) {
        case 1:
            $fate = "Serás millonario!! 🤑";
            break;
        case 2:
            $fate = "Encontrarás el amor de tu vida! 💘";
            break;
        case 3:
            $fate = "Vivirás 200 años! 👵";
            break;
        case 4:
            $fate = "Podrás leer la mente! 🧙‍♂️";
            break;
        case 5:
            $fate = "Te va a dar diarrea 🧻";
            break;
    }
    return $fate;
}

$option = rand(1, 5);
$fate = getFate($option);
//echo "Tu futuro es: " . $fate;

echo "Tu futuro es: " . getFate(rand(1, 5));

echo "\n";

