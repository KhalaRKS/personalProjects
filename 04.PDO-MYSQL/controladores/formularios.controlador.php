<?php
require_once "modelos/formularios.modelo.php";
class ControladorFormularios {
    
    #registro
    
        static public function ctrRegistro()
    {


        if(isset($_POST["registroNombre"])){

                if (preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚ ]+$/',$_POST['registroNombre'])  and preg_match('/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/',$_POST['registroEmail'])
                    and preg_match('/^[0-9a-zA-Z]+$/',$_POST['registroPassword'])) {
                    
                $tabla = "registros";
                $datos = array("nombre" => $_POST["registroNombre"], "email" => $_POST["registroEmail"], "password" => $_POST["registroPassword"]);

                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

                return $respuesta;
                    
                } else {
                $respuesta = "error";
                return $respuesta;
            }
        }
           
    }
    # Seleccionar registros
    
        static public function ctrSeleccionarRegistros(){
            
            $tabla = 'registros';
            $respuesta = new ModeloFormularios;
            $respuesta -> mdlSeleccionarRegistros($tabla);
    
            return $respuesta;


    
    }
}