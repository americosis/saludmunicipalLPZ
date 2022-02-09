@extends('layouts/salud')
@section ('titulopagina','Establecimientos de Salud')
@section('contenido')

<div class="container">
    <div class="row">
        <table class="table table-sm table-bordered">
            <thead>
                <th>Red de Salud</th>
                <th>Centro de Salud</th>
                <th>Zona</th>
                <th>Detalles</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach ($establecimientos as $item)
                <tr>
                    <td>{{$item->idRed_Salud}}</td>
                    <td>{{$item->nomCentro_Salud}}</td>
                    <td>{{$item->zonCentro_Salud}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Detalles</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Opciones</a>
                    </td>
                </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection