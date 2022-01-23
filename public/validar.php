<?php
    function validarRegistro($alias,$clave){
        if(strlen($alias) > 5 && strlen($alias)  < 25 && strlen($clave) >= 8 && strlen($clave) <= 16){
            return true;
        }else
            return false;
    }
?>