<?php 


class ControladorPlantilla{
    #Llamada a la plantilla
    
    public function ctrTraerPlantilla(){
        #include () se utiliza para invocar archivos que contengan codigo html-php
        include "vistas/plantilla.php";
        
     }
}
