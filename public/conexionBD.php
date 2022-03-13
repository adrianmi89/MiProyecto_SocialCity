<?php 
    $conexion = new mysqli();
    $conexion = mysqli_connect("localhost","root","","socialcity");

    if($conexion -> connect_errno != null){
        echo "Erro número $db -> connect_errno conectando a la base de datos.<br/>Mensaje: $db -> connect_error.";
    exit();
    }
    // $conexion -> close();
    // Variables Filtros
 
    // Variables Registro y Login
   
    function listaLocales($zona,$tipo,$capacidad){
        global $conexion;
        $listarRestaurante = "SELECT Nombre,Puntuacion,Foto FROM restaurante";
        $listarBar = "SELECT Nombre,Puntuacion,Foto FROM bar";

        // Filtrar por zona geográfica
        if(!empty($zona)){
            $listarRestaurante = "SELECT Nombre,Puntuacion,Foto FROM restaurante INNER JOIN direccion
            ON DIRECCION_NombreLocal = NombreLocal WHERE zona = '$zona'";

            $listarBar = "SELECT Nombre,Puntuacion,Foto FROM bar INNER JOIN direccion
            ON DIRECCION_NombreLocal = NombreLocal WHERE zona = '$zona'";
        }
        // Filtrar por tipo de restaurante
        if(!empty($tipo)){
            $listarRestaurante = "SELECT Nombre,Puntuacion,Foto FROM restaurante WHERE Nombre LIKE '%$tipo%'";
        }
        // Filtrar por tamaño del bar
        if(!empty($capacidad)){
            $listarBar = "SELECT Nombre,Puntuacion,Foto FROM bar WHERE Capacidad LIKE '%$capacidad%'";
        }

        $resulRestaurante = mysqli_query($conexion, $listarRestaurante);
        $resulBar = mysqli_query($conexion, $listarBar);
        if(!$resulRestaurante){
            echo mysqli_error($resulRestaurante);
        }

        // Le pasamos a restaurante.php el nombre del local para que lo identifique.
        
            while($restaurante = mysqli_fetch_row($resulRestaurante)){
                $Nombre = $restaurante[0];
                $Foto = $restaurante[2];
                echo "<div style='padding-left:3%;margin-left:10%;margin-right:10%;border:5px solid black;border-radius:0%;width:70%;height:320px;background-color: #3c8dbc'>";
                echo "<a style='color:white' href = 'restaurante.php?nombre=$Nombre'>".$restaurante[0]."<br/>Valoración: ".$restaurante[1]." /5";
                echo "<div style='position:relative;margin-left:45%;margin-top:-35px;width:auto height:auto'>";
                echo "<a href='$Foto'><img src='$Foto' width='400px' height='200px'/></a>";
                echo "</div>";
                echo "</div><br/>";
                
            }
        

        // Mostrar los bares solo si no le pasamos el tipo de restaurante o si le pasamos la capacidad de bar
        // Le pasamos a restaurante.php el nombre del local para que lo identifique.
        if(empty($tipo)){
            while($bar = mysqli_fetch_row($resulBar)){
                $Nombre = $bar[0];
                $Foto = $bar[2];
                echo "<div style='padding-left:3%;margin-left:10%;margin-right:10%;border:5px solid black;border-radius:0%;width:70%;height:320px;background-color: #3c8dbc'>";
                echo "<a style='color:white' href = 'bar.php?nombre=$Nombre'>".$bar[0]."<br/>Valoración: ".$bar[1]." /5";
                echo "<div style='position:relative;margin-left:45%;margin-top:-35px;width:auto height:auto'>";
                echo "<a href='$Foto'><img src='$Foto' width='400px' height='200px'/></a>";
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
    function addFavorito($alias,$nombre){
        global $conexion;
        $localFavorito = "INSERT INTO favoritos(Alias,Nombre) VALUES('$alias','$nombre')";
        $resulRegistro = mysqli_query($conexion, $localFavorito);
    }
    function borraFavorito($alias,$nombre){
        global $conexion;
        $borraFavorito = "DELETE FROM favoritos WHERE Alias = '$alias' AND Nombre = '$nombre'";
        $resulBorraFavorito = mysqli_query($conexion, $borraFavorito);
    }
    // Función para crear una nueva alarma y añadirla a la lista de alarmas del usuario
    function addAlarma($alias,$nombreLocal,$fecha,$hora,$descripcion){
        global $conexion;
        $alarmaLocal = "INSERT INTO alarma(Alias,Nombre,Fecha,Hora,Descripcion) VALUES('$alias','$nombreLocal','$fecha','$hora','$descripcion')";
        $resulAlarmaLocal = mysqli_query($conexion, $alarmaLocal);
    }
    function borraAlarma($alias,$nombreLocal,$fecha){
        global $conexion;
        $alarmaLocal = "DELETE FROM alarma WHERE Alias = '$alias' AND Nombre = '$nombreLocal' AND Fecha = '$fecha'";
        $resulAlarmaLocal = mysqli_query($conexion, $alarmaLocal);
    }
    function addComentario($alias,$descripcion){

    }
    // Función para añadir un LIKE a un comentario específico
    function meGusta($id){

    }
    // Función para añadir la ocupación aproximada que el jefe de cada local va subir al final de la semana
    function ocupacion($lun,$mar,$mie,$jue,$vie,$sab,$dom,$nombreLocal){
        global $conexion;
        $ocupacionLocal = "INSERT INTO historial_ocupacion(Lunes,Martes,Miercoles,Jueves,Viernes,Sabado,Domingo,NombreLocal) VALUES($lun,$mar,$mie,$jue,$vie,$sab,$dom,'$nombreLocal')";
        $resulOcupacionLocal = mysqli_query($conexion, $ocupacionLocal);
    }
    // Función para añadir la edad media del ambiente de un local y actualizarla día
    function edadMedia($edadMedia,$nombreLocal){
        global $conexion;
        $ambienteLocal = "INSERT INTO clientes_habituales(Edad,NombreLocal) VALUES($edadMedia,'$nombreLocal')";
        $resulAmbienteLocal = mysqli_query($conexion, $ambienteLocal);
    }
    function addEvento($eventos,$nombreLocal){
        global $conexion;
        $eventosLocal = "UPDATE bar SET Eventos = '$eventos' WHERE Nombre = '$nombreLocal'";
        $resulAmbienteLocal = mysqli_query($conexion, $eventosLocal);
    }
?>