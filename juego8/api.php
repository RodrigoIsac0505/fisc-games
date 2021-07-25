<?php 
require "C:/xampp/htdocs/pseudoapi/comun/Conexion.php"; 
require "C:/xampp/htdocs/pseudoapi/comun/ProcesosJuego.php";

$ep = $_GET['ep'];

if ($ep == 'allpreguntas'){
    AllPreguntas();
}

function AllPreguntas(){
    $juegoDb = new ProcesosJuego();
    $preguntas = $juegoDb->AllPreguntas();
    print json_encode($preguntas);
}

?>
