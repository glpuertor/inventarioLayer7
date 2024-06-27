@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Lista de inventario
                    <a href="{{ route('crearArticulo') }}" type="button" class="btn btn-success mx-5" id=""  data-bs-target="#exampleModal">
                        <i class="fa fa-pencil"></i>
                    </a>
                </div>

                <div class="card-body">

                    <div class="alert " id="alertElimin"></div>




                </div>
            </div>
            <div class="card">
                <table class="table dataTable">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Creador
                            </th>
                            <th>
                                Detalles
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dato as $item)
                        <tr>
                            <td>
                                {{$item->id}}
                            </td>
                            <td>
                                {{$item->nombre}}
                            </td>
                            <td>
                                {{$item->descripcion}}
                            </td>
                            <td>
                                {{$item->cantidad}}
                            </td>
                            <td>
                                {{$item->precio}}
                            </td>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('editArticulo',['id'=>$item->id]) }}"><i class="fa fa-edit"></i></a>
                                <a type="button" class="btn btn-danger elimin" id="elimin" data-id="{{$item->id}}" data-bs-target="#exampleModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>





            </div>
        </div>
    </div>
</div>
@endsection
