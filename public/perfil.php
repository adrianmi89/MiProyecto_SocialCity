<!DOCTYPE html>
<?php 
    include "conexionBD.php";

    $alias = $_GET['alias'];

    /*$nombre = $_POST['Nombre'];
    $sexo = $_POST['Sexo'];
    $edad = $_POST['Edad'];
    $estadoCivil = $_POST['EstadoCivil'];
    $ramaProfesional = $_POST['RamaProfesional'];
    $intereses = $_POST['Intereses'];
    */
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
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SC</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SocialCity</b></span>
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
                      <button style="border:3px solid white;radius:30%;width:90%"><a style="color:white" href="login.php">Cerrar Sesión</a></button>
                      <button style="border:3px solid white;radius:30%;width:90%"><a style="color:white" href="login.php">Darse de Baja</a></button>
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
                <span>Inicio</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Inicio</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Acerca de...</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="socialcity.html"><i class="fa fa-circle-o"></i>Socialcity</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Iniciar Sesión</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="login.php"><i class="fa fa-circle-o"></i>Login</a></li>
                
              </ul>
            </li>  
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Registrarse</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="registro.php"><i class="fa fa-circle-o">Nuevo usuario</i></a></li>
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o">Olvidé mi contraseña</i></a></li>
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
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido dinámico con el tag yield-->
                              <!--@yield('Contenido')-->
                              <!--Fin Contenido-->
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
                          
                            <div id="DatosPersona">
                                <h2>Información básica</h2>
                                <form action="" method="POST" width="200px" height="auto">
                                    <label for="Nombre">Nombre: </label><input name="Nombre" value="<?php echo $Nombre ?>"><br/>
                                    <label for="Sexo">Sexo: </label><input name="Sexo" value="<?php echo $Sexo ?>" placeholder="Tu Sexo"><br/>
                                    <label for="Edad">Edad: </label><input name="Edad" value="<?php echo $Edad ?>"><br/>
                                    <label for="EstadoCivil">Estado Civil: </label><input name="EstadoCivil" value="<?php echo $EstadoCivil ?>"><br/>
                                    <label for="RamaProfesional">Rama Profesional: </label><input name="RamaProfesional" value="<?php echo $RamaProfesional ?>"><br/>
                                    <label for="Intereses">Intereses: </label><input name="Intereses" value="<?php echo $Intereses ?>"><br/>
                                    <button type="submit">Editar</button>
                                </form>
                            </div>
                            <div id="Favoritos">
                                
                                <h2>Mis Favoritos</h2>
                                <div>
                                    <b>Leer locales Favoritos de la base de datos con enlace al mismo</b>
                                </div>
                            </div>
                            <div id="Alarmas">
                                <h2>Mis Alarmas</h2>
                                <div>
                                    <b>Leer alarma de la base de datos</b><button>Eliminar</button>
                                </div>
                            
                                <div id="CreaAlarma">
                                    <h2>Nueva Alarma...</h2>
                                    <form action="" method="POST" width="200px" height="auto">
                                        <label for="Nombre">Nombre: </label><input name="Nombre" placeholder="Nombre Local"><br/>
                                        <label for="Fecha">Fecha: </label><input name="Fecha" placeholder="Fecha del aviso"><br/>
                                        <label for="Hora">Edad: </label><input name="Hora" placeholder="Hora del aviso"><br/>
                                        <label for="Descripcion">Estado Civil: </label><input name="Descripcion" placeholder="Texto para el recordatorio"><br/>
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