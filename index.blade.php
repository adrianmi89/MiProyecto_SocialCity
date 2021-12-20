<?php
        @extend('layouts.admin.blade.php');
        @section('contenido');
        $res = isset($res) ? $ $res : null;
        $bar = isset($bar) ? $ $bar : null;
        $hisOcupacion = isset($hisOcupacion) ? $hisOcupacion : null;
    ?>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h1>RESTAURANTES</h1><a href="categoria/create"><button>Nuevo</button></a>
            <?php @include('search')?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Valoración</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Sitio Web</th>
                        <th>La carta (QR con enlace al menú)</th>
                    </thead>
                    @foreach($restaurantes as $res)
                    <tr>
                        <td>{{<?php echo  $res->Nombre ?>}}</td>
                        <td>{{<?php echo $res->Capacidad ?>}}</td>
                        <td>{{<?php echo $res->Puntuacion ?> </td>
                        <td>{{<?php echo $res->Carta ?></td>
                        <td>{{<?php echo $res->Horario ?></td>
                        <td><div id="qrcode">
                        <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Frestaurante-o-fado.negocio.site%2F%3Futm_source%3Dgmb%26utm_medium%3Dreferral%23menu&s=10&e=m" alt="Generador de Códigos QR Codes"/>
                        <br/><a href="https://www.codigos-qr.com/en/qr-code-generator/" target="_blank" id="qrgenerator">Qr Code Generator</a>
                        </div>
                        </td>
                    <tr>
                    <table width="200px" height="auto">
                        <thead>
                            <th>Horario</th>
                            <tr>
                                <td><?php $res->$horario?></td>
                            </tr>
                    </table>
                    </tr>
                    <tr>
                    <table width="200px" height="auto">
                        <thead>
                            <th>Ocupación</th>
                            <tr><!--Meter la ocupación total al final del día, sacándo el porcentaje en relación al número del clientes que se pasaron por allí-->
                                <td>Lunes</td><td>Martes</td><td>Miércoles</td><td>Jueves</td><td>Viernes</td><td>Sábado</td><td>Domingo</td>
                            </tr>
                            <tr>
                                <td>{{<?php echo  $hisOcupacion->Lunes ?>}}</td><td>{{<?php echo  $hisOcupacion->Martes ?>}}</td><td>{{<?php echo  $hisOcupacion->Miercoles ?>}}</td><td>{{<?php echo  $hisOcupacion->Jueves ?>}}</td><td>{{<?php echo  $hisOcupacion->Viernes ?>}}</td><td>{{<?php echo  $hisOcupacion->Sabado ?>}}</td><td>{{<?php echo  $hisOcupacion->Domingo ?>}}</td>
                            </tr>
                    </table>
                    </tr>
                    @endforeach
                </table>
                {{<?php $res->render()?> }}
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h1>BARES<h1><a href="categoria/create"><button>Nuevo</button></a>
            @include('search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Valoración</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Sitio Web</th>
                        <th>Juegos de mesa</th>
                        <th>Eventos</th>
                    </thead>
                    @foreach($bares as $bar)
                    <tr>
                        <td>{{<?php $bar->Nombre?> }}</td>
                        <td>{{<?php $bar->Valoración?> }}</td>
                        <td>{{<?php $bar->Dirección?> }}</td>
                        <td>{{<?php $bar->Telefono?> }}</td>
                        <td>{{<?php $bar->SitioWeb?> }}</td>
                        <td>{{<?php $bar->JuegosDeMesa?> }}</td>
                        <td>{{<?php $bar->Eventos?> }}</td>
                        <td><!--Esto que solo se pueda hacer en mi sesión, como administrador del sitio web-->
                            <a href=""><button class="btn btn-info">Editar</button></a>
                            <a href=""><button class="btn btn-info">Eliminar</button></a>
                        </td>

                    </tr>
                    <table width="200px" height="auto">
                        <thead>
                            <th>Horario</th>
                            <tr>
                                <td>{{<?php $bar->horario?>}}</td>
                            </tr>
                    </table>
                    </tr>
                    <tr>
                    <table width="200px" height="auto">
                        <thead>
                            <th>Ocupación</th>
                            <tr>
                                <td>Lunes</td><td>Martes</td><td>Miércoles</td><td>Jueves</td><td>Viernes</td><td>Sábado</td><td>Domingo</td>
                            </tr>
                            <tr>
                                <td>{{<?php echo  $hisOcupacion->Lunes ?>}}</td><td>{{<?php echo  $hisOcupacion->Martes ?>}}</td><td>{{<?php echo  $hisOcupacion->Miercoles ?>}}</td><td>{{<?php echo  $hisOcupacion->Jueves ?>}}</td><td>{{<?php echo  $hisOcupacion->Viernes ?>}}</td><td>{{<?php echo  $hisOcupacion->Sabado ?>}}</td><td>{{<?php echo  $hisOcupacion->Domingo ?>}}</td>
                            </tr>
                    </table>
                    </tr>
                    @endforeach
                </table>
        </div>
    </div>
@endsection