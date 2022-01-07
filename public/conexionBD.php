<?php 
    $conexion = new mysqli();
    $conexion = mysqli_connect("localhost","root","","socialcity");

    if($conexion -> connect_errno != null){
        echo "Erro número $db -> connect_errno conectando a la base de datos.<br/>Mensaje: $db -> connect_error.";
    exit();
    }
    // $conexion -> close();

    function listaLocales($conexion){
        $listarRestaurante = "SELECT Nombre,Puntuacion FROM restaurante";
        $listarBar = "SELECT Nombre,Puntuacion FROM bar";
        $resulRestaurante = mysqli_query($conexion, $listarRestaurante);
        $resulBar = mysqli_query($conexion, $listarBar);

        while($restaurante = mysqli_fetch_row($resulRestaurante)){
            echo $restaurante[0]."<br/>Valoración: ".$restaurante[1]."<br/><br/>";
        }
        while($bar = mysqli_fetch_row($resulBar)){
            echo $bar[0]."<br/>Valoración: ".$bar[1]."<br/><br/>";
        }
    }
    function altaUsuario($alias,$clave){

    }
    function bajaUsuario($alias,$clave){

    }
    // Función que comprueba si el usuario existe en la base de datos
    function identifica($alias,$clave){

    }
    // Función para añadir un local a la lista Favoritos del usuario
    function addFavorito($nombre){

    }
    // Función para crear una nueva alarma y añadirla a la lista de alarmas del usuario
    function addAlarma($nAlarma,$nombre,$fecha,$hora,$descripcion){

    }
    // Función para añadir un LIKE a un comentario específico
    function meGusta($id){

    }
    // Función para añadir la ocupación aproximada que el jefe de cada local va subir al final de la semana
    function ocupacion($lun,$mar,$mie,$jue,$vie,$sab,$dom){
        
    }
?>