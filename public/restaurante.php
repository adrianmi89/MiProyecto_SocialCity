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
                  <small class="bg-red">Conectado como-></small>
                  <span class="hidden-xs">Adrianmi</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      Diseñador Web
                      <small>http:www.adrianmi.info</small>
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
		                       
               </div>     
						</div>
        </div>
                      <div style="margin-top:50px;margin-left:5%;width:auto;height:auto;border:10px solid #3c8dbc;border-right:none;border-bottom:none;border-left:block;border-top:none">  
                    <!--DATOS DEL RESTAURANTE ELEGIDO-->
                    <h1><?php echo $Nombre ?></h1>
                    <div style="margin-top:50px;margin-left:2%;width:50%;height:auto">
                        <h3><b>Valoración: </b><?php echo $Puntuacion ?></h3>
                        <h3><b>Capacidad: </b><?php echo $Capacidad ?></h3>
                        <h3><b>Horario: </b><?php echo $Horario ?></h3>
                        <h3><b>Dirección: </b><?php echo $Direccion ?></h3>
                        <h3><b>Rango de edad del ambiente </b><?php echo $Puntuacion ?>&nbsp;años</h3>
                        <h3>Ocupación estimada: 
                            <table width="400px" height="auto">
                                <tr>
                                    <td>Lunes:</td><td width="20px"><?php echo $Lunes ?> %</td><td>Martes:</td><td><?php echo $Martes ?> %</td>
                                    <td>Miércoles:</td><td><?php echo $Miercoles ?> %</td><td>Jueves:</td><td><?php echo $Jueves ?> %</td>
                                </tr>
                                <tr>
                                    <td>Viernes:</td><td><?php echo $Viernes ?> %</td><td>Sábado:</td><td><?php echo $Sabado ?> %</td>
                                    <td>Domingo:</b></td><td><?php echo $Domingo ?> %</td>
                                </tr>
                            </table>
						<h3>Nuestra carta <a href="<?php echo $Carta ?>">Ver menú </a></h3>                 
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