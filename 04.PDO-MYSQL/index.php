<?php

#el index: en el mostraremos la salida de las vistas  al usuario y tambien a traves de el enviaremos lass distintas acciones que el usuario envie al controlador.


#require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. por ello, si el archivo especificado en la funcion require() no se encuentra, saltara un error "PHP fatal error" y el programa PHP se detendra.

#La version require_once() funciona de la misma forma que sus respectivo, salvo que, al utilizar la version _once, se impide ñla carga de un mismo archivo mas de una vez.
#Si requerimos el codigo mas de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases.

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
