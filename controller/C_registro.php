<?php

//Controlpagina de registro 

class ControlRegistro {
    
    public function control(){

        require_once "model/M_general.php";
        $general = new General();
        
        require_once "view/vistas/V_registro.php";
    
        }
        
    }

?>