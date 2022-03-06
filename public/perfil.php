<!DOCTYPE html>
<?php 
    include "conexionBD.php";

    session_start();
    if(!isset($_SESSION['usuario'])){
      header("Location: login.php");
      die();
    }
    
    $alias = $_SESSION["usuario"];
    $jefeLocal = NULL;
    $nombreLocal = NULL;

    // Identificamos al jefe y cogemos el nombre del local para editar los datos de los locales
    $jefeRes = "SELECT Nombre FROM restaurante WHERE Jefe = '$alias'";
    $jefeBar = "SELECT Nombre FROM bar WHERE Jefe = '$alias'";

    $resulResJefe = mysqli_query($conexion, $jefeRes);
    $resulBarJefe = mysqli_query($conexion, $jefeBar);

    while($restaurante = mysqli_fetch_row($resulResJefe)){
      $nombreRes = $restaurante[0];
    }
    while($bar = mysqli_fetch_row($resulBarJefe)){
      $nombreBar = $bar[0];
    }

    if(isset($_POST['cerrarSesion'])){
      unset($_SESSION);
      session_destroy();
      header("Location: login.php");
    }

    // Actualizar Perfil
    if(!empty($_POST['Nombre'])){
      $nombre = $_POST['Nombre'];
      $actualizarPerfil = "UPDATE perfil SET Nombre = '$nombre' WHERE Alias = '$alias'"; 
      $resulActualizarPerfil = mysqli_query($conexion, $actualizarPerfil);
      }
      if(!empty($_POST['Sexo'])){
        $sexo = $_POST['Sexo'];
        $actualizarPerfil = "UPDATE perfil SET Sexo = '$sexo' WHERE Alias = '$alias'"; 
        $resulActualizarPerfil = mysqli_query($conexion, $actualizarPerfil);
        }
        if(!empty($_POST['Edad'])){
          $edad = $_POST['Edad'];
          $actualizarPerfil = "UPDATE perfil SET Edad = '$edad' WHERE Alias = '$alias'"; 
          $resulActualizarPerfil = mysqli_query($conexion, $actualizarPerfil);
          }
          if(!empty($_POST['EstadoCivil'])){
            $estadoCivil = $_POST['EstadoCivil'];
            $actualizarPerfil = "UPDATE perfil SET EstadoCivil = '$estadoCivil' WHERE Alias = '$alias'"; 
            $resulActualizarPerfil = mysqli_query($conexion, $actualizarPerfil);
            }
            if(!empty($_POST['RamaProfesional'])){
              $ramaProfesional = $_POST['RamaProfesional'];
              $actualizarPerfil = "UPDATE perfil SET RamaProfesional = '$ramaProfesional' WHERE Alias = '$alias'"; 
              $resulActualizarPerfil = mysqli_query($conexion, $actualizarPerfil);
              }
              if(!empty($_POST['Intereses'])){
                $intereses = $_POST['Intereses'];
                $actualizarPerfil = "UPDATE perfil SET Intereses = '$intereses' WHERE Alias = '$alias'"; 
                $resulActualizarPerfil = mysqli_query($conexion, $actualizarPerfil);
                }
    if(!empty($_POST['borrar'])){
      bajaUsuario($conexion,$alias);
    }
    if(isset($_POST['alarma'])){
      $nombreLocal = $_POST['NombreLocal'];
      $fecha = $_POST['Fecha'];
      $hora = $_POST['Hora'];
      $descripcion = $_POST['Descripcion'];
      addAlarma($alias,$nombreLocal,$fecha,$hora,$descripcion);
      }
    if(isset($_POST['borraAlarma'])){
      $nombreLocal = $_POST['NombreLocal'];
      $fecha = $_POST['Fecha'];
      borraAlarma($alias,$nombreLocal,$fecha);
      }
  
    // Datos del jefe del local
    if(isset($_POST['datosOcupacion'])){
      $lun = $_POST['Lunes'];
      $mar = $_POST['Martes'];
      $mie = $_POST['Miercoles'];
      $jue = $_POST['Jueves'];
      $vie = $_POST['Viernes'];
      $sab = $_POST['Sabado'];
      $dom = $_POST['Domingo'];
     
      ocupacion($lun,$mar,$mie,$jue,$vie,$sab,$dom,$nombreLocal);
    }
    if(isset($_POST['edadMedia'])){
      $edadMedia = $_POST['edadDia'];
    
      edadMedia($edadMedia,$nombreLocal);
    }    
?>
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
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span style="font-size:27px;font-family: 'Redressed', cursive;">Mi Perfil</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="perfil.php" style="font-size:20px;font-family: 'Redressed', cursive;"><i class="fa fa-circle-o"><?php echo " ".$alias ?></i></a></li>
              </ul>
            </li>           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row" style="margin-left:0px !important">
            <div class="col-md-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12" style="margin:2%">
		                          <!--Contenido dinámico con el tag yield-->
                              <!--@yield('Contenido')-->
                              <!--Fin Contenido-->
                            <?php
                              $estado = false;
                              if($estado){
                                echo "Cargando Perfil...";
                              }
                              sleep(3);
                              if(!$estado){
                                echo "";
                              }
                            ?>
                            <h1>Mi Perfil</h1>
                            <?php
                                $verDatos = "SELECT * FROM perfil WHERE Alias = '$alias'";
                                $resulDatosPerfil = mysqli_query($conexion, $verDatos);

                                while($perfil = mysqli_fetch_row($resulDatosPerfil)){
                                  $Alias = $perfil[0]; 
                                  $Clave = $perfil[1];
                                  $Nombre = $perfil[2]; 
                                  $Sexo = $perfil[3];
                                  $Edad = $perfil[4];
                                  $EstadoCivil = $perfil[5];
                                  $RamaProfesional = $perfil[6];
                                  $Intereses = $perfil[7];
                                }
                            ?>
                          
                            <div id="DatosPersona" style="padding-left:2%">
                                <h2>Información básica</h2><hr/>
                                <form action="" method="POST" width="200px" height="auto">
                                  <div>
                                    <label for="Nombre">Nombre: </label><input name="Nombre" value="<?php echo $Nombre ?>"><br/>
                                    <label for="Sexo">Sexo: </label><input name="Sexo" value="<?php echo $Sexo ?>" placeholder="Tu Sexo"><br/>
                                  </div>
                                  <div style="position:relative;float:right;margin-top:-90px;margin-right:50%">
                                    <label for="Edad">Edad: </label><input name="Edad" value="<?php echo $Edad ?>"><br/>
                                    <label for="EstadoCivil">Estado Civil: </label><input name="EstadoCivil" value="<?php echo $EstadoCivil ?>"><br/>
                                  </div>
                                  <div style="position:relative;float:right;margin-top:-110px;margin-right:20%">
                                    <label for="RamaProfesional">Rama Profesional: </label><input name="RamaProfesional" value="<?php echo $RamaProfesional ?>"><br/>
                                    <label for="Intereses">Intereses: </label><input name="Intereses" value="<?php echo $Intereses ?>"><br/>
                                  </div>
                                    <button type="submit">Editar</button>
                                </form>
                            </div>
                            <?php
                              if($resuljefeLocal == true){
                                echo "<div id='DatosJefeLocal' style='padding-left:2%;margin-top:50px'>";
                                  echo "<h2>Ocupación Semanal del Local</h2><hr/>";
                                      echo "<form action='' method='POST' width='100px' height='auto'>";
                                          echo "<label for='Lunes'>Lunes: </label><input name='Lunes'><br/>";
                                          echo "<label for='Martes'>Martes: </label><input name='Martes'><br/>";
                                          echo "<label for='Miercoles'>Miércoles: </label><input name='Miercoles'><br/>";
                                          echo "<label for='Jueves'>Jueves: </label><input name='Jueves'><br/>";
                                          echo "<label for='Viernes'>Viernes: </label><input name='Viernes'><br/>";
                                          echo "<label for='Sabado'>Sábado: </label><input name='Sabado'><br/>";
                                          echo "<label for='Domingo'>Domingo: </label><input name='Domingo'><br/>";
                                          echo "<button type='submit' name='datosOcupacion'>Actualizar</button>";
                                        echo "</form>";
                                  echo "<h2>Edad Media del ambiente de Local</h2><hr/>";
                                    echo "<form action='' method='POST' whidth='100px' height='auto'>";
                                        echo "<label for='edadMedia' style='font-weight:bold'>Edad media del día actual: </label><input name='edadDia'><br/>";
                                        echo "<button type='submit' name='edadMedia'>Actualizar</button>";
                                      echo "</form>";
                                echo "</div>";
                              }
                            ?>
                            <div id="Favoritos" style="padding-left:2%">
                                
                                <h2>Mis Favoritos</h2><hr/>
                                <div>
                                <?php
                                  $listaFavoritos = "SELECT Nombre FROM favoritos WHERE Alias = '$alias'";

                                  $resulFavoritos = mysqli_query($conexion, $listaFavoritos);

                                  while($favoritos = mysqli_fetch_row($resulFavoritos)){
                                    $nombre = $favoritos[0];
                                
                                    echo "<div style='padding:10px;'>";
                                    echo "<a style='color:black;font-weight:bold;font-size:18px' href = 'restaurante.php?nombre=$nombre'>".$nombre."</a>";
                                    echo "</div>";
                                  }
                                ?>
                                </div>
                            </div>
                            <div id="Alarmas" style="padding-left:2%">
                                <h2>Mis Alarmas</h2><hr/>
                                <div>
                                  <?php
                                  $verAlarmas = "SELECT * FROM alarma WHERE Alias = '$alias'";
                                  $resulDatosAlarma = mysqli_query($conexion, $verAlarmas);

                                  echo "<table style='font-size:20px;width:50%'>";
                                  echo "<th style='color:black;font-weight:bold'>Nombre Local</th><th style='color:black;font-weight:bold'>Fecha</th><th style='color:black;font-weight:bold'>Hora</th><th style='color:black;font-weight:bold'>Descripción</th>";
                                  echo "<br/><br/>";
                                  while($alarma = mysqli_fetch_row($resulDatosAlarma)){
                                    $nAlarma = $alarma[0]; 
                                    $alias = $alarma[1];
                                    $nombreLocal = $alarma[2]; 
                                    $fecha = $alarma[3];
                                    $hora = $alarma[4];
                                    $descripcion = $alarma[5];

                                    echo "<tr>";
                                    echo "<td>".$nombreLocal."</td><td>".$fecha."</td><td>".$hora."</td><td>".$descripcion."</td>";
                                    echo "</tr>";
                                  }
                                  echo "</table>";
                                  ?>
                                </div>
                            
                                <div id="CreaAlarma" style="position:relative;float:left;margin-top:50px;margin-left:0%">
                                    <h2>Nueva Alarma...</h2>
                                    <form action="" method="POST" width="200px" height="auto">
                                        <label for="NombreLocal">Nombre: </label><input name="NombreLocal" placeholder="Nombre Local"><br/>
                                        <label for="Fecha">Fecha: </label><input name="Fecha" placeholder="Fecha del aviso"><br/>
                                        <label for="Hora">Hora: </label><input name="Hora" placeholder="Hora del aviso"><br/>
                                        <label for="Descripcion">Descripcion: </label><input name="Descripcion" placeholder="Texto para el recordatorio"><br/>
                                        <button type="submit" name="alarma">Añadir</button>
                                    </form>
                                </div>   
                                <div id="EliminaAlarma" style="position:relative;float:right;margin-top:50px;margin-right:60%">
                                    <h2>Quitar Alarma...</h2>
                                    <form action="" method="POST" width="200px" height="auto">
                                        <label for="Nombre">Nombre: </label><input name="NombreLocal" placeholder="Nombre Local"><br/>
                                        <label for="Fecha">Fecha: </label><input name="Fecha" placeholder="Fecha del aviso"><br/>
                                        <button type="submit" name="borraAlarma">Eliminar</button>
                                    </form>
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
    <script type="text/javascript" src="js/misFunciones.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>