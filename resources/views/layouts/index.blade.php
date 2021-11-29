@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h1>RESTAURANTES</h1><a href="categoria/create"><button>Nuevo</button></a>
            @include('search')
        </div>
    </div>
    <!-- Añadiendo la estructura que va tener la vista -->
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
                    <tr>
                    <table width="200px" height="auto">
                        <thead>
                            <th>Horario</th>
                            <tr>
                                <td>Lunes</td><td>Martes</td><td>Miércoles</td><td>Jueves</td><td>Viernes</td><td>Sábado</td><td>Domingo</td>
                            </tr>
                            <tr>
                                <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
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
                                <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                            </tr>
                    </table>
                    </tr>
                </table>
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
                    <tr>
                    <table width="200px" height="auto">
                        <thead>
                            <th>Horario</th>
                            <tr>
                                <td>Lunes</td><td>Martes</td><td>Miércoles</td><td>Jueves</td><td>Viernes</td><td>Sábado</td><td>Domingo</td>
                            </tr>
                            <tr>
                                <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
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
                                <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                            </tr>
                    </table>
                    </tr>
                </table>
        </div>
    </div>
@endsection