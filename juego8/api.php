<?php 
require "https://github.com/RodrigoIsac0505/fisc-games/tree/main/comun/Conexion.php"; 
require "https://github.com/RodrigoIsac0505/fisc-games/tree/main/comun/ProcesosJuego.php";

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
