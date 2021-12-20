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
                <li><a href="perfil.php"><i class="fa fa-circle-o"></i> Inicio</a></li>
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
                              <h1>Listado de Bares y Restaurantes</h1>
                              <h2>Filtrar por...</h2>
                              <div id="#Filtros">
                                  <div style="display:flex" width=100px>
                                  <span style="font-size:20px">Zona</span>
                                  <form action="" method="POST">
                                      <select value="--Selecciona zona--">
                                          <option>--Selecciona zona--</option>
                                          <option>Orzán</option>
                                          <option>Riazor</option>
                                          <option>Paseo Marítimo</option>
                                          <option>Plaza de España</option>
                                          <option>Zalaeta</option>
                                          <option>Montealto</option>
                                          <option>María Pita</option>
                                          <option>La Marina</option>
                                          <option>Plaza de Pontevedra</option>
                                          <option>Ronda de Nelle</option>
                                          <option>Ronda de Outeiro</option>
                                          <option>Ventorrillo</option>
                                          <option>Los Rosales</option>
                                          <option>Los Mallos</option>
                                          <option>Monelos</option>
                                          <option>Os Castros</option>
                                          <option>Elviña</option>
                                          <option>Barrio de las Flores</option>
                                          <option>Matogrande</option>
                                      </select>
                                      <button type="submit">Mostrar<button>
                                  </div>
                                  <div style="display:flex;float:right">
                                  <span style="font-size:20px">Tipo de Restaurante</span>
                                  <form action="" method="POST">
                                      <select value="--¿Que te apetece?--">
                                          <option value="Marisquería">--¿Que te apetece?--</option>
                                          <option value="Marisquería">Marisquería</option>
                                          <option value="Pulpería">Pulpería</option>
                                          <option value="Restaurante Japonés">Restaurante Japonés</option>
                                          <option value="Restaurante Chino">Restaurante Chino</option>
                                          <option value="Restaurante Hindú">Restaurante Hindú</option>
                                          <option value="Restaurante Italiano">Restaurante Italiano</option>
                                          <option value="Restaurante Mejicano">Restaurante Mejicano</option>
                                      </select>
                                  </div>
                                  <br/><br/>
                                  <div style="display:flex;float:right">
                                    <span style="font-size:20px">Juegos de Mesa del Bar</span>
                                    <form action="" method="POST">
                                    <label id="C">Cartas</label><input type="checkbox" id="Cartas" onclick="checkJuegos()">
                                    <label id="A">Ajedrez</label><input type="checkbox" id="Ajedrez" onclick="checkJuegos()">
                                    <label id="P">Parchís</label><input type="checkbox" id="Parchis" onclick="checkJuegos()">
                                    <label id="D">Dominó</label><input type="checkbox" id="Domino" onclick="checkJuegos()">
                                    <label id="Da">Dardos</label><input type="checkbox" id="Dardos" onclick="checkJuegos()">
                                    <label id="V">Villar</label><input type="checkbox" id="Villar" onclick="checkJuegos()">
                                    <label id="F">Futbolín</label><input type="checkbox" id="Futbolin" onclick="checkJuegos()">
                                    <button type="submit">Mostrar<button>
                                  </div>
                                  <br/><br/>
                                  <div style="display:flex;float:left">
                                  <span style="font-size:20px">Rango de Edad</span>
                                    <form action="" method="POST">
                                      <input type="radio" id="joven" value="joven"><label for="joven">15-29 años</label>
                                      <input type="radio" id="adulto" value="adulto"><label for="adulto">30-49 años</label>
                                      <input type="radio" id="mayor" value="mayor"><label for="mayor">50-64 años</label>
                                      <input type="radio" id="muyMayor" value="muyMayor"><label for="muyMayor">65-99 años</label>
                                      <button type="submit">Mostrar<button>
                                    </form>
                                  </div>
                            </div>
                            <div style="margin-top:50px;margin-left:5%;width:auto;height:auto">
                                <!--<?php 
                                foreach($local as $l)
                                ?>-->
                                <div style="margin-top:20px;border:3px">
                                    <h4><b><?php echo "Restaurarante Italiano AYÓ" ?></b></h4>
                                    <h4><b>Valoración: </b><?php echo $Puntuacion ?></h3>
                                </div>
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