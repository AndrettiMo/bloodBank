<?php

include_once "vista/modulo/cabecera.php";

if (isset($_GET["ruta"])) {
   if ($_GET["ruta"]== "inicio"||
       $_GET["ruta"]== "Proceso"||
       $_GET["ruta"]== "ubicacion"||
       $_GET["ruta"]== "donacion"||
       $_GET["ruta"]== "Conocenos") {
     
        include_once "vista/modulo/".$_GET["ruta"].".php";
   }
} else {
   
}


include_once "vista/modulo/pie.php";