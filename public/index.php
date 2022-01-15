<!DOCTYPE html>
<?php 
    include "conexionBD.php";
    error_reporting(0);

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet"> 
    
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SC</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="font-size:40px !important"><b>SocialCity</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <span style="padding-left:50px;color:white;font-size:50px;font-family: Neonderthaw;"><!--Haettenschweiler, 'Arial Narrow Bold', sans-serif-->
          <b>A Coruña, una ciudad que conecta. ¿Aún no sabes que hacer? </b></span>
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
                <li><a href="registro.php"><i class="fa fa-circle-o"> Usuario Nuevo</i></a></li>
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
                              <h1>Listado de Bares y Restaurantes</h1>
                              <h2>Filtrar por...</h2>
                              <div id="Filtros">
                                  <div id="FiltroZona">
                                  <span style="font-size:25px">Zona</span>
                                  <form action="" method="POST">
                                      <select id="zona" name="zona" value="--Selecciona zona--">
                                          <option>--Selecciona zona--</option>
                                          <option value="Orzán">Orzán</option>
                                          <option value="Riazor">Riazor</option>
                                          <option value="Paseo Marítimo">Paseo Marítimo</option>
                                          <option value="Plaza de España">Plaza de España</option>
                                          <option value="Zalaeta">Zalaeta</option>
                                          <option value="Montealto">Montealto</option>
                                          <option value="La Marina">La Marina</option>
                                          <option value="Plaza de Pontevedra">Plaza de Pontevedra</option>
                                          <option value="Ronda de Nelle">Ronda de Nelle</option>
                                          <option value="Ronda de Outeiro">Ronda de Outeiro</option>
                                          <option value="Ventorrillo">Ventorrillo</option>
                                          <option value="Los Rosales">Los Rosales</option>
                                          <option value="Los Mallos">Los Mallos</option>
                                          <option value="Monelos">Monelos</option>
                                          <option value="Os Castros">Os Castros</option>
                                          <option value="Elviña">Elviña</option>
                                          <option value="Barrio de las Flores">Barrio de las Flores</option>
                                          <option value="Matogrande">Matogrande</option>
                                      </select>
                                      <button type="submit">Mostrar</button>
                                    </form>
                                      
                                  </div>
                                  <div id="FiltroRestaurante">
                                  <span style="font-size:25px">Tipo de Restaurante</span>
                                  <form action="" method="POST">
                                      <select value="tipo" name="tipo">
                                          <option>--¿Que te apetece?--</option>
                                          <option value="Marisquería">Marisquería</option>
                                          <option value="Pulpería">Pulpería</option>
                                          <option value="Restaurante Japonés">Restaurante Japonés</option>
                                          <option value="Restaurante Chino">Restaurante Chino</option>
                                          <option value="Restaurante Hindú">Restaurante Hindú</option>
                                          <option value="Restaurante Italiano">Restaurante Italiano</option>
                                          <option value="Restaurante Mejicano">Restaurante Mejicano</option>
                                      </select>
                                      <button type="submit">Mostrar</button>
                                  </form>    
                                  </div>
                                  <div id="FiltroEdad">
                                  <span style="font-size:25px">Rango de Edad</span>
                                    <form action="" method="POST">
                                      <select value="--¿Que te apetece?--">
                                          <option name="edad">--¿Cual es tu rango?--</option>
                                          <option value="Joven">15-29</option>
                                          <option value="Adulto">30-49</option>
                                          <option value="Mayor">49-64</option>
                                          <option value="MuyMayor">65-99</option>
                                      </select>
                                      <button type="submit">Mostrar</button>
                                  </form>
                                  </div>
                                  <!--<div id="FiltroJuegos">
                                    <span style="font-size:25px">Juegos de Mesa del Bar</span>
                                    <form action="" method="POST">
                                      <label id="C">Cartas</label><input type="checkbox" id="Cartas" onclick="checkJuegos()">
                                      <label id="A">Ajedrez</label><input type="checkbox" id="Ajedrez" onclick="checkJuegos()">
                                      <label id="P">Parchís</label><input type="checkbox" id="Parchis" onclick="checkJuegos()">
                                      <label id="D">Dominó</label><input type="checkbox" id="Domino" onclick="checkJuegos()">
                                      <label id="Da">Dardos</label><input type="checkbox" id="Dardos" onclick="checkJuegos()">
                                      <label id="V">Villar</label><input type="checkbox" id="Villar" onclick="checkJuegos()">
                                      <label id="F">Futbolín</label><input type="checkbox" id="Futbolin" onclick="checkJuegos()">
                                  </form>
                                    <button type="submit">Mostrar</button>
                                  </div>-->
                                  <br/><br/>
                            </div>
                            <div id="Locales" style="margin-top:100px; margin-left:5%;width:auto;height:auto;font-size:22px;font-weight:bold;">
                                <?php 
                                listaLocales($conexion,$zona,$tipo)
                                ?>
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
    <script type="text/javascript" src="js/misFunciones.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>