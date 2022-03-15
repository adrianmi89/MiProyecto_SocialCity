<?php
    include 'conexionBD.php';

    $alias = NULL;

    session_start();
    if(isset($_SESSION['usuario'])){
     $alias = $_SESSION['usuario'];
    }

    if(isset($_POST['cerrarSesion'])){
      unset($_SESSION);
      session_destroy();
      header("Location: login.php");
    }

    // Variable que la utilizamos para saber si el local está en los favoritos de usuario
    $favorito;
    if(isset($_POST['favorito'])){
      $nombre = $_GET['nombre'];
      addFavorito($alias,$nombre);
      $favorito = true;
    }

    if(isset($_POST['borraFavorito'])){
      $nombre = $_GET['nombre'];
      borraFavorito($alias,$nombre);
      $favorito = false;
    }
    if(isset($_POST['comenta'])){
      $comentario = $_POST['comentario'];
      $nombre = $_GET['nombre'];
      addComentarioRes($comentario,$nombre,$alias);
    }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SocialCity</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SC</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="font-size:50px !important;font-family: 'Redressed', cursive;"><b>SocialCity</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo "<span style='color:white;font-size:28px'>".$alias."</span>" ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                    <form action="" method="POST">
                      <button type="submit" name="cerrarSesion" style="border:3px solid white;radius:30%;width:90%">Cerrar Sesión</button>
                      <button style="border:3px solid white;radius:30%;width:90%" type="submit" name="borrar">Borrar Cuenta</button>
                    </form>
                      
                 </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                     
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>


        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span style="font-size:27px;font-family: 'Redressed', cursive;">Inicio</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php" style="font-size:20px;font-family: 'Redressed', cursive;"><i class="fa fa-circle-o"></i> Inicio</a></li>
              </ul>
            </li>
            <?php
              if(isset($_SESSION['usuario'])){
                echo "<li class='treeview'>";
                  echo "<a href='#'>";
                  echo "<i class='fa fa-folder'></i> <span style='font-size:27px;font-family: 'Redressed', cursive'>Mi Perfil</span>";
                  echo "<i class='fa fa-angle-left pull-right'></i>";
                  echo "</a>";
                  echo "<ul class='treeview-menu'>";
                    echo "<li><a href='perfil.php' style='font-size:20px;font-family: 'Redressed', cursive;'><i class='fa fa-circle-o'> $alias</i></a></li>";
                echo "</ul>";
                echo "</li>";           
              }
              else{
                echo "<li class='treeview'>";
                  echo "<a href='#'>";
                  echo "<i class='fa fa-folder'></i> <span style='font-size:27px;font-family: 'Redressed', cursive'>Acerca de...</span>";
                  echo "<i class='fa fa-angle-left pull-right'></i>";
                  echo "</a>";
                  echo "<ul class='treeview-menu'>";
                    echo "<li><a href='socialcity.html' style='font-size:20px;font-family: 'Redressed', cursive;'><i class='fa fa-circle-o'> Socialcity</i></a></li>";
                echo "</ul>";
                echo "</li>";
                echo "<li class='treeview'>";
                  echo "<a href='#'>";
                  echo "<i class='fa fa-folder'></i> <span style='font-size:27px;font-family: 'Redressed', cursive'>Iniciar Sesión</span>";
                  echo "<i class='fa fa-angle-left pull-right'></i>";
                  echo "</a>";
                  echo "<ul class='treeview-menu'>";
                    echo "<li><a href='login.php' style='font-size:20px;font-family: 'Redressed', cursive;'><i class='fa fa-circle-o'> Login</i></a></li>";
                echo "</ul>";
                echo "</li>";           
                echo "<li class='treeview'>";
                echo "<a href='#'>";
                echo "<i class='fa fa-folder'></i> <span style='font-size:27px;font-family: 'Redressed', cursive'>Registrarse</span>";
                echo "<i class='fa fa-angle-left pull-right'></i>";
                echo "</a>";
                echo "<ul class='treeview-menu'>";
                  echo "<li><a href='registro.php' style='font-size:20px;font-family: 'Redressed', cursive;'><i class='fa fa-circle-o'> Nuevo Usuario/i></a></li>";
                echo "</ul>";
                echo "</li>";    
                }
              ?>     
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box" style="margin-left:2%;margin-right:2%">
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                       
               </div>     
						</div>
        </div>
                  <div style="margin-top:50px;margin-left:5%;width:auto;height:auto;">  
                    <!--DATOS DEL RESTAURANTE ELEGIDO-->
                    <?php
                    // Le pasamos el nombre del local actual a través del enlace de lista de locales
                    $localActual = $_GET['nombre'];
                    $verDatos = "SELECT * FROM restaurante WHERE Nombre = '$localActual'";
                    $Direccion = "SELECT * FROM direccion WHERE NombreLocal = '$localActual'";
                    $resulDatosRestaurante = mysqli_query($conexion, $verDatos);
                    $resulDatosDireccion = mysqli_query($conexion, $Direccion);

                    while($restaurante = mysqli_fetch_row($resulDatosRestaurante)){
                      $Nombre = $restaurante[0]; 
                      $Capacidad = $restaurante[1];
                      $Puntuacion = $restaurante[2];
                      $Carta = $restaurante[3];
                      $Horario = $restaurante[4];
                      $CLIENTES_HABITUALES_ID1 = $restaurante[5];
                      $DIRECCION_NombreLocal = $restaurante[6];
                      $Foto = $restaurante[7];
                    }
                    while($direccion = mysqli_fetch_row($resulDatosDireccion)){
                      $NombreLocal = $direccion[0];
                      $Zona = $direccion[1]; 
                      $Calle = $direccion[2];
                      $Ciudad = $direccion[3];
                    }
                    // Vamos a separar el horario en subcadenas para que se visualize mejor
                    //$HorarioDia = explode(": ",$Horario);

                    // Sacamos la edad media del ambiente de cada local y la ocupación diaria
                    $verEdadMedia = "SELECT Edad FROM clientes_habituales WHERE NombreLocal = '$localActual'";
                    $verOcupacion = "SELECT Lunes,Martes,Miercoles,Jueves,Viernes,Sabado,Domingo FROM historial_ocupacion WHERE NombreLocal = '$localActual'";
                    $resulVerEdadMedia = mysqli_query($conexion, $verEdadMedia);
                    $resulVerOcupacion = mysqli_query($conexion, $verOcupacion);

                    $edadMedia = NULL;
                    while($clientes_habituales = mysqli_fetch_row($resulVerEdadMedia)){
                      $edadMedia = $clientes_habituales[0]; 
                      
                    }
                    $lun = $mar = $mie = $jue = $vie = $sab = $dom = NULL;
                    while($historial_ocupacion = mysqli_fetch_row($resulVerOcupacion)){
                      $lun = $historial_ocupacion[0]; 
                      $mar = $historial_ocupacion[1];
                      $mie = $historial_ocupacion[2];
                      $jue = $historial_ocupacion[3];
                      $vie = $historial_ocupacion[4];
                      $sab = $historial_ocupacion[5];
                      $dom = $historial_ocupacion[6];
                    }
                    ?>
                  <div style='padding-left:3%;margin-left:5%;margin-right:5%;border:5px solid black;border-radius:0%;width:90%;height:180px;background-color: #3c8dbc;color:white;font-size:36px'>
                      <h1 style="font-size:42px"><?php echo $Nombre ?></h1>
                      <form action= "" method= "POST">
                        <?php

                          $localFavorito = "SELECT Alias,Nombre FROM favoritos WHERE Alias = '$alias' AND Nombre = '$Nombre'";
                          $buscaFavorito = mysqli_query($conexion, $localFavorito);
                          if($favoritos = mysqli_num_rows($buscaFavorito)){
                            echo "<button style='position:relative;float:right;margin-top:10px;margin-right:3%;background-color:red !important;color:white !important;width:auto;font-weight:bold;font-size:18px' type='submit' name='borraFavorito'>Eliminar</button>";
                            $favorito = true;
                          }
                          else{
                            echo "<button style='position:relative;float:right;margin-top:10px;margin-right:3%;background-color:white;color:black;width:auto;font-weight:bold;font-size:18px;' type='submit' name='favorito'>Me Gusta</button>";
                            $favorito = false;
                          }
                        ?>
                            <p class="clasificacion">
                              <?php
                              if($Puntuacion >= 1 && $Puntuacion < 2){
                                echo "<input style='display:none !important' id='radio1' type='radio' name='estrellas' value='5'>";
                                echo "<label for='radio1' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio2' type='radio' name='estrellas' value='4'>";
                                echo "<label for='radio2'>★</label>";
                                echo "<input style='display:none !important' id='radio3' type='radio' name='estrellas' value='3'>";
                                echo "<label for='radio3'>★</label>";
                                echo "<input style='display:none !important' id='radio4' type='radio' name='estrellas' value='2'>";
                                echo "<label for='radio4'>★</label>";
                                echo "<input style='display:none !important' id='radio5' type='radio' name='estrellas' value='1'>";
                                echo "<label for='radio5'>★</label>";
                              }
                              if($Puntuacion >= 2 && $Puntuacion < 3){
                                echo "<input style='display:none !important' id='radio1' type='radio' name='estrellas' value='5'>";
                                echo "<label for='radio1' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio2' type='radio' name='estrellas' value='4'>";
                                echo "<label for='radio2' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio3' type='radio' name='estrellas' value='3'>";
                                echo "<label for='radio3'>★</label>";
                                echo "<input style='display:none !important' id='radio4' type='radio' name='estrellas' value='2'>";
                                echo "<label for='radio4'>★</label>";
                                echo "<input style='display:none !important' id='radio5' type='radio' name='estrellas' value='1'>";
                                echo "<label for='radio5'>★</label>";
                              }
                              if($Puntuacion >= 3 && $Puntuacion < 4){
                                echo "<input style='display:none !important' id='radio1' type='radio' name='estrellas' value='5'>";
                                echo "<label for='radio1' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio2' type='radio' name='estrellas' value='4'>";
                                echo "<label for='radio2' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio3' type='radio' name='estrellas' value='3'>";
                                echo "<label for='radio3' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio4' type='radio' name='estrellas' value='2'>";
                                echo "<label for='radio4'>★</label>";
                                echo "<input style='display:none !important' id='radio5' type='radio' name='estrellas' value='1'>";
                                echo "<label for='radio5'>★</label>";
                              }
                              if($Puntuacion >= 4 && $Puntuacion < 5){
                                echo "<input style='display:none !important' id='radio1' type='radio' name='estrellas' value='5'>";
                                echo "<label for='radio1' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio2' type='radio' name='estrellas' value='4'>";
                                echo "<label for='radio2' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio3' type='radio' name='estrellas' value='3'>";
                                echo "<label for='radio3' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio4' type='radio' name='estrellas' value='2'>";
                                echo "<label for='radio4' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio5' type='radio' name='estrellas' value='1'>";
                                echo "<label for='radio5'>★</label>";
                              }
                              if($Puntuacion == 5){
                                echo "<input style='display:none !important' id='radio1' type='radio' name='estrellas' value='5'>";
                                echo "<label for='radio1' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio2' type='radio' name='estrellas' value='4'>";
                                echo "<label for='radio2' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio3' type='radio' name='estrellas' value='3'>";
                                echo "<label for='radio3' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio4' type='radio' name='estrellas' value='2'>";
                                echo "<label for='radio4' style='color:orange !important'>★</label>";
                                echo "<input style='display:none !important' id='radio5' type='radio' name='estrellas' value='1'>";
                                echo "<label for='radio5' style='color:orange !important'>★</label>";
                              }
                              ?>
                            </p>
                      </form>
                  </div>
                  <div style='position:absolute;float:right;margin-left:42%;margin-top:50px;width:auto height:auto'>
                    <a href='<?php echo $Foto ?>'>
                    <img src='<?php echo $Foto ?>' width="800px" height="400px"/></a>
                  </div>
                    <div style="margin-top:50px;margin-left:2%;width:30%;height:auto;">
                        <h3><b>Valoración: </b><span style="font-weight:normal"><br/><?php echo $Puntuacion." estrellas" ?></span></h3>
                        <h3><b>Capacidad: </b><span style="font-weight:normal"><br/><?php echo $Capacidad." personas" ?></span></h3>
                        <h3><b>Horario: </b><span style="font-weight:normal"><br/><?php echo $Horario ?></span></h3>
                        <h3><b>Dirección: </b><span style="font-weight:normal"><br/><?php echo $Calle." - ".$Ciudad ?></span></h3>
                        <h3><b>Edad media del ambiente: </b><span style="font-weight:normal"><br/><?php echo $edadMedia." años" ?>&nbsp;</h3>
                        <br/>
                        <h3>Ocupación estimada:</h3>
                            <table width="700px" height="100px" style="font-size:24px" aling="center">
                                <tr style="font-weight:bold;background-color:#3c8dbc;color:white">
                                  <th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th>
                                </tr>
                                <tr style="margin-top:10px;border:2px solid #3c8dbc;border-top:none">
                                    <td style="padding-left:20px"><?php echo $lun ?> %</td><td style="padding-left:20px"><?php echo $mar ?> %</td>
                                    <td style="padding-left:30px"><?php echo $mie ?> %</td><td style="padding-left:20px"><?php echo $jue ?> %</td>
                                    <td style="padding-left:20px"><?php echo $vie ?> %</td><td style="padding-left:20px"><?php echo $sab ?> %</td>
                                    <td style="padding-left:20px"><?php echo $dom ?> %</td>
                                </tr>
                            </table>
						<h3>Nuestra carta: <a href="<?php echo $Carta ?>">Ver menú </a></h3> 
            <br/><br/>
            <div id="Comentarios" style="padding-left:2%">
                                <h2>Comentarios</h2><hr/>
                                <div>
                                  <?php
                                  $verComentario = "SELECT Descripcion,PERFIL_Alias FROM comentario WHERE RESTAURANTE_Nombre = '$Nombre'";
                                  $resulComentario = mysqli_query($conexion, $verComentario);
                        
                                  echo "<table width='50%' height='auto'>";
                                  while($comentario = mysqli_fetch_row($resulComentario)){
                                    $descripcion = $comentario[0]; 
                                    $autor = $comentario[1];
            
                                    echo "<tr>";
                                    echo "<b><td>".$autor."</td></b>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>".$descripcion."</td>";
                                    echo "</tr>";
                                  }
                                  echo "</table>";
                                  ?>
                                </div>
                            
                                <div id="CreaComentario" style="position:relative;float:left;margin-top:50px;margin-left:0%">
                                    <form action="" method="POST" width="200px" height="auto">
                                    <textarea name='comentario' placeholder='Deja un comentario' width='200px' height='100px'></textarea><br/>
                                        <button type="submit" name="comenta">Enviar</button>
                                    </form>
                                </div>   
                                </div>                
                    </div>
        </div>
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>