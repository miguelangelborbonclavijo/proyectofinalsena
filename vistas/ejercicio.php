<?php
    //CREAR VARIABLES
    $txt = "HOLA mundo";
    echo $txt;
    //VARIABLE LOCAL GLOBAL ESTATICAS
?>
<hr>
<?php
    $x = 5; //variable global
    function prueba(){
        echo "<p>Variable x dentro de la funcion es : $x </p>";//aca genera un error
    }
    prueba();
    echo "<p>Variable x fuera de la funcion es: $x </p>";
?>
<hr>
<?php 
    function prueba1(){
        $y = 5; // variable local
        echo "<p>Variable x dentro de la funcion es: $y </p>";
    }
    prueba1();
    //genera error
    echo "<p>variables x fuera de la funcion es: $y </p>";
?>
<hr>
<?php
    //Palabra clave global para acceder a una variable global desde una funcion
    $a = 5;
    $b = 8;
    function pruebas2(){
        global $a, $b;
        $b = $a + $b;
    }
    pruebas2();
    echo $b;
?>
<hr>
<?php
//php almacena todas las variable globales en una matriz llamada, los tiene con el nombre de la variable
    $a = 5;
    $b = 5;
    function pruebas3(){
        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    pruebas3();
    echo $b;
?>
<hr>
<?php
//cuando una variable se completa o se ejecuta se elimina todas sus variable, pero aveces no queremos no 
//queremos que no se elimien una variable local. lo necesitamos para un trabajo adicional.

function pruebas4(){
    static $d = 0;
    echo $d;
    $d++;
}
pruebas4();
pruebas4();
pruebas4();
pruebas4();
?>
<hr>
<hr>
<hr>
<?php
    //echo y print
    print "hola mundo1";
    echo "Hola ";
?>
<hr>
<hr>
<hr>
<?php

$variableglobal1 = "Hello";
$variableglobal2 = "Word";

function pruebas7(){
    $GLOBALS['variablelocal2'] = $GLOBALS['variableglobal1'] . $GLOBALS['variableglobal2'] . ' todos';    
}
pruebas7();
echo $variablelocal2;
echo "Soy el repoio";
?>