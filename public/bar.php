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
                  <small class="bg-red"></small>
                  <span class="hidden-xs"></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                   
                      <small></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
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
                <i class="fa fa-laptop"></i>
                <span style="font-size:27px;font-family: 'Redressed', cursive;">Acerca de...</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="socialcity.html" style="font-size:20px;font-family: 'Redressed', cursive;"><i class="fa fa-circle-o"></i>Socialcity</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span style="font-size:27px;font-family: 'Redressed', cursive;">Iniciar Sesión</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="login.php" style="font-size:20px;font-family: 'Redressed', cursive;"><i class="fa fa-circle-o"></i>Login</a></li>
                
              </ul>
            </li>  
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span style="font-size:27px;font-family: 'Redressed', cursive;">Registrarse</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="registro.php" style="font-size:20px;font-family: 'Redressed', cursive;"><i class="fa fa-circle-o"> Usuario Nuevo</i></a></li>
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
		                       
               </div>     
						</div>
        </div>
                    <div style="margin-top:50px;margin-left:5%;width:auto;height:auto">  
                    <!--DATOS DEL BAR ELEGIDO-->
                    <?php
                    include 'conexionBD.php';
                    // Le pasamos el nombre del local actual a través del enlace de lista de locales
                    $localActual = $_GET['nombre'];
                    $verDatos = "SELECT * FROM bar WHERE Nombre = '$localActual'";
                    $Direccion = "SELECT * FROM direccion WHERE NombreLocal = '$localActual'";
                    $resulDatosBar = mysqli_query($conexion, $verDatos);
                    $resulDatosDireccion = mysqli_query($conexion, $Direccion);

                    while($bar = mysqli_fetch_row($resulDatosBar)){
                      $Nombre = $bar[0]; 
                      $Capacidad = $bar[1];
                      $Puntuacion = $bar[2];
                      $Horario = $bar[3];
                      $CLIENTES_HABITUALES_ID = $bar[4];
                      $Eventos = $bar[5];
                      $JuegosDeMesa = $bar[6];
                    }
                    while($direccion = mysqli_fetch_row($resulDatosDireccion)){
                      $NombreLocal = $direccion[0]; 
                      $Zona = $direccion[1]; 
                      $Calle = $direccion[2];
                      $Ciudad = $direccion[3];
                    }
                    ?>
                    <div style='padding:5px;border:5px solid white;border-radius:10%;background-color:black;color:white;width:600px;height:100px'>
                    </div>
                    <div style="margin-top:50px;margin-left:2%;width:70%;height:auto">
                        <h3><b>Valoración:</b><span style="font-weight:normal"><?php echo $Puntuacion." estrellas" ?></span></h3>
                        <h3><b>Capacidad: </b><span style="font-weight:normal"><?php echo $Capacidad." personas"?></span></h3>
                        <h3><b>Horario: </b><span style="font-weight:normal"><?php echo $Horario ?></span></h3>
                        <h3><b>Eventos: </b><span style="font-weight:normal"><?php echo $Eventos ?></span></h3>
                        <h3><b>Dirección: </b><span style="font-weight:normal"><?php echo $Calle." - ".$Ciudad ?></span></h3>
                        <h3><b>Rango de edad del ambiente: </b><?php echo "Sin datos" ?>&nbsp;</h3>
                        <h3>Ocupación estimada: 
                            <table width="400px" height="auto">
                                <tr>
                                    <td>Lunes:</td><td width="20px"><?php echo "Sin datos" ?> %</td><td>Martes:</td><td><?php echo "Sin datos" ?> %</td>
                                    <td>Miércoles:</td><td><?php echo "Sin datos" ?> %</td><td>Jueves:</td><td><?php echo "Sin datos" ?> %</td>
                                </tr>
                                <tr>
                                    <td>Viernes:</td><td><?php echo "Sin datos" ?> %</td><td>Sábado:</td><td><?php echo "Sin datos" ?> %</td>
                                    <td>Domingo:</b></td><td><?php echo "Sin datos" ?> %</td>
                                </tr>
                            </table>
						            <h3>Juegos de mesa: <span style="font-weight:normal"><?php echo $JuegosDeMesa ?></span></h3>                 
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