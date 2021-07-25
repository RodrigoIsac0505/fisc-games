<?php

    class ProcesosJuego{

        function AllPreguntas(){
            $con = new Conexion();

            $allPreguntas = mysqli_query($con->Conectar(),"SELECT * FROM scru_pregunta");
            $countRows = mysqli_num_rows($allPreguntas);
                if($countRows>0){
                    $datos = array();
                    while($row = mysqli_fetch_assoc($allPreguntas)){
                        $datos[]=$row;
                    }
                    return $datos;
                }
                return [1];
        }
        
    }
?>
