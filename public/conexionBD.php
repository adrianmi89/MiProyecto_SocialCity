<?php 
    $conexion = new mysqli();
    $conexion = mysqli_connect("localhost","root","","socialcity");

    if($conexion -> connect_errno != null){
        echo "Erro número $db -> connect_errno conectando a la base de datos.<br/>Mensaje: $db -> connect_error.";
    exit();
    }
    // $conexion -> close();
    if(isset($_POST['zona'])){
        $zona = $_POST['zona'];
    }
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    }
    function listaLocales($conexion,$zona,$tipo){
        $listarRestaurante = "SELECT Nombre,Puntuacion FROM restaurante";
        $listarBar = "SELECT Nombre,Puntuacion FROM bar";
        // Filtrar por zona geográfica
        if(isset($zona) != NULL){
            $listarRestaurante = "SELECT Nombre,Puntuacion FROM restaurante INNER JOIN direccion
            ON DIRECCION_NombreLocal = NombreLocal WHERE zona = '$zona'";

            $listarBar = "SELECT Nombre,Puntuacion FROM bar INNER JOIN direccion
            ON DIRECCION_NombreLocal = NombreLocal WHERE zona = '$zona'";
        }
        // Filtrar por tipo de restaurante
        if(isset($tipo) != NULL){
            $listarRestaurante = "SELECT Nombre,Puntuacion FROM restaurante WHERE Nombre LIKE '%$tipo%'";
        }
        $resulRestaurante = mysqli_query($conexion, $listarRestaurante);
        $resulBar = mysqli_query($conexion, $listarBar);

        // Le pasamos a restaurante.php el nombre del local para que lo identifique.
        while($restaurante = mysqli_fetch_row($resulRestaurante)){
            $Nombre = $restaurante[0];
            echo "<a style='color:black' href = 'restaurante.php?nombre=$Nombre'>".$restaurante[0]."<br/>Valoración: ".$restaurante[1]."</a><br/><br/>";
        }

        // Mostrar los bares solo si no le pasamos el tipo de restaurante
        // Le pasamos a restaurante.php el nombre del local para que lo identifique.
        if(isset($tipo) == NULL){
            while($bar = mysqli_fetch_row($resulBar)){
                $Nombre = $bar[0];
                echo "<a style='color:black' href = 'bar.php?nombre=$Nombre'>".$bar[0]."<br/>Valoración: ".$bar[1]."</a><br/><br/>";
            }
        }
    }
    function altaUsuario(){
        
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