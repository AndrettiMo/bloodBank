<?php



class agendamientoControl{

   public $nombre;
   public $apellido;
   public $tipoDocumento;
   public $numeroDocumento;
   public $fecha;
   public $hora;
   public $lugar;
   public $email;





}


if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["tipoDocumento"]) && isset($_POST["numeroDocumento"]) && isset($_POST["fecha"]) && isset($_POST["hora"]) && isset($_POST["lugar"]) && isset($_POST["email"])) {
    
    $objInsertar = new agendamientoControl;
    $objInsertar->nombre = $_POST["nombre"];
    $objInsertar->apellido = $_POST["apellido"];
    $objInsertar->tipoDocumento = $_POST["tipoDocumento"];
    
}