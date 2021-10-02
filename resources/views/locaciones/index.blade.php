@extends('adminlte::page')

@section('title', 'Locaciones')

@section('content_header')

@stop

@section('content')

        <div class="well well-sm text-right">
            <h1 class="page-header" style="float:left; margin:auto; padding:auto;">Listado de Locaciones</h1>
            <a class="btn btn-primary agregar" href='{{url('/locaciones/create')}}'>Agregar Locación</a>
        </div>


        <div >
        <table id="locaciones" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Capacidad</th>
                    <th>Dirección</th>
                    <th>Correo de Contacto</th>
                    <th>Valor de Alquiler</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $locacion)

                <tr>
                    <td>{{$locacion->tipoLocacion}}</td>
                    <td>{{$locacion->nombreLocacion}}</td>
                    <td>{{$locacion->nombreCiudad}}</td>
                    <td>{{$locacion->capacidad}}</td>
                    <td>{{$locacion->direccion}}</td>
                    <td>{{$locacion->correoContacto}}</td>
                    <td>{{$locacion->valorAlquiler}}</td>

                    <td>
                        <form action="{{route('locaciones.destroy', $locacion->idLocacion)}}" method="post" class="formAcciones">
                            @csrf
                            @method('DELETE')
                        <a href="/locaciones/{{$locacion->idLocacion}}/edit" class="btn btn-link btnEditar"><i class="fas fa-pencil-alt iconos"></i>&nbsp; Editar</a>
                        <button type="submit" class="btn btn-link"><i class="fas fa-trash-alt iconos"></i>&nbsp; Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="../datatablesBT5/Buttons-2.0.1/css/buttons.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css" href="../datatablesBT5/dataTables-1.11.2.css">

    <link rel="stylesheet" href="/css/misEstilos.css">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/4de87f4a32.js" crossorigin="anonymous"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src=" https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>


    <script type="text/javascript" src="../datatablesBT5/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/pdfmake-0.1.36/vfs_fonts.js"></script>
    <!--
    <script type="text/javascript" src="../datatablesBT5/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"></script>
    -->
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="../js/descargas.js"></script>
@stop
