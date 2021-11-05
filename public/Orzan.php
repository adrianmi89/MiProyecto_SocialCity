<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SocialCity | Orzán </title>
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
    <style>
        ul li{
            list-style-image:none;
        }
        ul li.desplegableNivel1_Res > ul li{
			display:none;
		}
		ul li.desplegableNivel2_Res > ul li{
			display:none;
		}
		ul li.desplegableNivel1_Bar > ul li{
			display:none;
		}
		ul li.desplegableNivel2_Bar > ul li{
			display:none;
		}
		.desplegableNivel1_Res{
			list-style-image:url(img/mas.jpg);
			//background-repeat:no-repeat;
			list-style-position:inside;
		}
		.desplegableNivel2_Res{
			list-style-image:url(img/mas.jpg);
			//background-repeat:no-repeat;
			list-style-position:inside;
		}
		.desplegableNivel1_Bar{
			list-style-image:url(img/mas.jpg);
			//background-repeat:no-repeat;
			list-style-position:inside;
		}
		.desplegableNivel2_Bar{
			list-style-image:url(img/mas.jpg);
			//background-repeat:no-repeat;
			list-style-position:inside;
        }
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="inicio.html" class="logo">
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
                <li><a href="inicio.html"><i class="fa fa-circle-o"></i> Inicio</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Selecciona una zona</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Riazor</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Orzán</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Monte alto</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Plaza de España</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Zalaeta</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>María Pita</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> La Marina</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Plaza de Pontevedra</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Ronda de Nelle</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Ventorrillo</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Los Rosales</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Los Mallos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Monelos</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Los Castros</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Barrio de las Flores</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Matogrande</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Elviña</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i>Eirís</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Inicia Sesión</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i>Área personal</a></li>
                
              </ul>
            </li>  
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Registrarse</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o">Registro</i></a></li>
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
                              <h1>ORZÁN</h1>
                              <div style="margin-top:50px;margin-left:5%;width:auto;height:auto;border:10px solid #3c8dbc;border-right:none;border-bottom:none;border-left:block;border-top:none">
      
                <h1>RESTAURANTES</h1><!--Menú desplegable con los restaurantes principales de la zona que va a cargar los restaurantes
                                que haya desde la base de datos-->
                    <div id="#RestaurareAyo" style="margin-top:50px;margin-left:2%;width:50%;height:auto">
                      <h2>Restaurante AYÓ</h2> <!--Submenú desplegable con la información básica de cada local-->
                        <h4>Valorarión: (Obtener de la base de datos) estrellas</h4>
                        <h4>Horario: (Obtener de la base de datos)</h4>
                        <h4>Dirección: (Obtener de la base de datos)</h4> 
                        <h4>Teléfono: (Obtener de la base de datos)</h4> 
                        <h4>Sitio Web: (Obtener de la base de datos)</h4>
                        <h4>Ocupación estimada. <table width="200px" height="auto"><tr><td>Lunes:</td><td>(Obtener de la base de datos)</td><td>Martes:</td><td>0 %</td><td>Miércoles:</td><td>0 %</td><td>Jueves:</td><td>0 %</td></tr><tr><td>Viernes:</td><td>0 %</td><td>Sábado:</td><td>0 %</td><td>Domingo:</b></td><td>0 %</td></tr></table><h4>
                        <h4>La carta: (QR con enlace al menú)</h4>    
                        <h4><a href="https://www.google.es/maps/place/Ay%C3%B3+Pasta+Bar/@43.3700228,-8.4059316,17z/data=!3m1!4b1!4m5!3m4!1s0xd2e7d62be9e6c0b:0xcc0e549d20956709!8m2!3d43.3700189!4d-8.4037429" style="font-decoration:italic">Ver ubicación</a></h4>        
                    </div>   
               </div>     
						</div>
        </div>
                      <div style="margin-top:50px;margin-left:5%;width:auto;height:auto;border:10px solid #3c8dbc;border-right:none;border-bottom:none;border-left:block;border-top:none">  
                <h1>BARES</h1><!--Menú desplegable con los restaurantes principales de la zona que va a cargar los restaurantes
                                que haya desde la base de datos-->
                    <div id="#RestaurareAyo" style="margin-top:50px;margin-left:2%;width:50%;height:auto">
                    <h2>Tio Ovidio</h2><!--Submenú desplegable con la información básica de cada local-->
                        <h4>Valorarión:</h4>
                        <h4>Horario:</h4>
                        <h4>Dirección:</h4> 
                        <h4>Teléfono: 981 35 44 76</h4> 
                        <h4>Juegos de mesa:</h4>
						<h4>Eventos:</h4>
                        <h4>Ocupación estimada. <table width="200px" height="auto"><tr><td>Lunes:</td><td width="20px">0 %</td><td>Martes:</td><td>0 %</td><td>Miércoles:</td><td>0 %</td><td>Jueves:</td><td>0 %</td></tr><tr><td>Viernes:</td><td>0 %</td><td>Sábado:</td><td>0 %</td><td>Domingo:</b></td><td>0 %</td></tr></table></h4>
						<h4>La carta</h4>         
            <h4><a href="https://www.google.es/maps/place/T%C3%ADo+Ovidio/@43.3701126,-8.4058509,17z/data=!3m2!4b1!5s0xd2e7c7c460fd5bf:0x8aba7b8001e13226!4m5!3m4!1s0xd2e7c7c45eb0b77:0x2e4f28cf2b7e7741!8m2!3d43.3701087!4d-8.4036622" style="font-decoration:italic;color:blue;">Ver ubicación</a></h4>          
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
      <script>
$(document).ready(function() {
            $(".desplegableNivel1_Res").click(function() {
				if ($(".desplegableNivel1_Res > ul li").css("display")=="none"){
                    $(".desplegableNivel1_Res > ul li").show();
					$(".desplegableNivel1_Res").css("list-style-image","url(img/menos.jpg)");
					}
				else{
					$("ul li.desplegableNivel1_Res > ul li").hide();
					$(".desplegableNivel1_Res").css("list-style-image","url(img/mas.jpg)");
					}
			});
			$(".desplegableNivel2_Res").click(function() {
				if ($(".desplegableNivel2_Res > ul li").css("display")=="none"){
					$(".desplegableNivel2_Res > ul li").show();
					$(".desplegableNivel2_Res").css("list-style-image","url(img/menos.jpg)");
					}
				else{
					$("ul li.desplegableNivel2_Res > ul li").hide();
					$(".desplegableNivel2_Res").css("list-style-image","url(img/mas.jpg)");
					}
			});

			$(".desplegableNivel1_Bar").click(function() {
				if ($(".desplegableNivel1_Bar > ul li").css("display")=="none"){
					$(".desplegableNivel1_Bar > ul li").show();
					$(".desplegableNivel1_Bar").css("list-style-image","url(img/menos.jpg)");
					}
				else{
					$("ul li.desplegableNivel1_Bar > ul li").hide();
					$(".desplegableNivel1_Bar").css("list-style-image","url(img/mas.jpg)");
					}
			});
			$(".desplegableNivel2_Bar").click(function() {
				if ($(".desplegableNivel2_Bar > ul li").css("display")=="none"){
					$(".desplegableNivel2_Bar > ul li").show();
					$(".desplegableNivel2_Bar").css("list-style-image","url(img/menos.jpg)");
					}
				else{
					$("ul li.desplegableNivel2_Bar > ul li").hide();
					$(".desplegableNivel2_Bar").css("list-style-image","url(img/mas.jpg)");
					}
			});
        });
</script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>