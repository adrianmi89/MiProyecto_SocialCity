<?php 
    $conexion = new mysqli();
    $conexion = mysqli_connect("localhost","root","","socialcity");

    if($conexion -> connect_errno != null){
        echo "Erro número $db -> connect_errno conectando a la base de datos.<br/>Mensaje: $db -> connect_error.";
    exit();
    }
    // $conexion -> close();
    // Variables Filtros
    if(isset($_POST['zona'])){
        $zona = $_POST['zona'];
    }
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    }
    if(isset($_POST['capacidad'])){
        $capacidad = $_POST['capacidad'];
    }
    // Variables Registro y Login
   
    function listaLocales($conexion,$zona,$tipo,$capacidad){
        $listarRestaurante = "SELECT Nombre,Puntuacion,Foto FROM restaurante";
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
        // Filtrar por tamaño del bar
        if(isset($capacidad) != NULL){
            $listarBar = "SELECT Nombre,Puntuacion FROM bar WHERE Capacidad LIKE '%$capacidad%'";
        }

        $resulRestaurante = mysqli_query($conexion, $listarRestaurante);
        $resulBar = mysqli_query($conexion, $listarBar);
        
        // Le pasamos a restaurante.php el nombre del local para que lo identifique.
        if(isset($capacidad) == NULL){
            while($restaurante = mysqli_fetch_row($resulRestaurante)){
                $Nombre = $restaurante[0];
                $Foto = $restaurante[7];
                echo "<div style='padding-left:3%;margin-left:10%;margin-right:10%;border:5px solid black;border-radius:10%;width:70%;height:320px;background-color: #3c8dbc'>";
                echo "<a style='color:white' href = 'restaurante.php?nombre=$Nombre'>".$restaurante[0]."<br/>Valoración: ".$restaurante[1]."<img style='float:left;width:500px;height:auto' src='$Foto'/></a>";
                echo "<div style='position:relative;margin-left:45%;margin-top:-35px;width:auto height:auto'>";
                echo "<a src='https://media-cdn.tripadvisor.com/media/photo-s/0c/67/fb/3a/pulpeira-de-melide.jpg'><img src='https://media-cdn.tripadvisor.com/media/photo-s/0c/67/fb/3a/pulpeira-de-melide.jpg' width='400px' height='200px'/></a>";
                echo "</div>";
                echo "</div><br/>";
                
            }
        }
        

        // Mostrar los bares solo si no le pasamos el tipo de restaurante o si le pasamos la capacidad de bar
        // Le pasamos a restaurante.php el nombre del local para que lo identifique.
        if(isset($tipo) == NULL){
            while($bar = mysqli_fetch_row($resulBar)){
                $Nombre = $bar[0];
                echo "<div style='padding-left:3%;margin-left:10%;margin-right:10%;border:5px solid black;border-radius:10%;width:70%;height:320px;background-color: #3c8dbc'>";
                echo "<a style='color:white' href = 'restaurante.php?nombre=$Nombre'>".$bar[0]."<br/>Valoración: ".$bar[1]."<img style='float:left;width:500px;height:auto' src='$Foto'/></a>";
                echo "<div style='position:relative;margin-left:45%;margin-top:-35px;width:auto height:auto'>";
                echo "<a src='https://media-cdn.tripadvisor.com/media/photo-s/0c/67/fb/3a/pulpeira-de-melide.jpg'><img src='https://media-cdn.tripadvisor.com/media/photo-s/0c/67/fb/3a/pulpeira-de-melide.jpg' width='400px' height='200px'/></a>";
                echo "</div>";
                echo "</div><br/>";
            }
        }
    }
    function altaUsuario($conexion,$alias,$clave){
        // Comprobamos si el usuario ya existe en la base de datos
        $existeUsuario = "SELECT Alias FROM perfil WHERE Alias = '$alias'";
        $existe = mysqli_query($conexion, $existeUsuario);

        if(!empty($alias) && !empty($clave)){
            $registrarUsuario = "INSERT INTO perfil(Alias,Clave) VALUES('$alias','$clave')";
            $resulRegistro = mysqli_query($conexion, $registrarUsuario);
        }
        else if($existe == true){
            echo "<span style='color:red';font-size:20px;font-weight:bold>ERROR. Este alias ya existe.</span>";
        }
    }
    function bajaUsuario($conexion,$alias){
        $eliminarUsuario = "DELETE FROM perfil WHERE Alias = '$alias'";
        $resulElimina = mysqli_query($conexion, $eliminarUsuario);
    }
    // Función que comprueba si el usuario existe en la base de datos
    function identifica($conexion,$alias,$clave){
        if(!empty($alias) && !empty($clave)){
            $buscaUsuario = "SELECT * FROM perfil WHERE Alias = '$alias' AND Clave = '$clave'";
            $resulBusca = mysqli_query($conexion, $buscaUsuario);

            if($perfil = mysqli_num_rows($resulBusca)){
                return true;
            }
            else
                return false;
            }
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