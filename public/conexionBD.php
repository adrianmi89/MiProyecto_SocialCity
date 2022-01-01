<?php 
    $db = new mysqli();
    $db -> connect("localhost","root","","socialcity");

    if($db -> connect_errno != null){
        echo "Erro número $db -> connect_errno conectantdo a la base de datos.<br/>Mensaje: $db -> connect_error.";
    exit();
    }
    // $db -> close();
?>