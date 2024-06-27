
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif


                </div>
            </div>
            <br><br>
            <div class="card p-5">


<form method="POST" action="{{ route('guardaproducto') }}" id="formulario">

    @csrf
    <h1>Argregar artículo</h1>
    <br><br>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" aria-describedby="nombre de articulo" name='nombre' placeholder="Nombre de Articulo" >
        @if ($errors->has('nombre'))
            <span class="text-danger">El nombre es requerido</span>
        @endif
      </div>


    <br>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" aria-describedby="descripcion de articulo" name='descripcion' placeholder="Descripcion de Articulo" value="">
        @if ($errors->has('descripcion'))
            <span class="text-danger">La descripción es requerida</span>
        @endif
    </div>
    <br>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" id="precio" aria-describedby="precio de articulo" name='precio' placeholder="Precio de Articulo" value="">
        @if ($errors->has('precio'))
        <span class="text-danger">El precio es requerido</span>
    @endif
    </div>
    <br>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" class="form-control" id="cantidad" aria-describedby="cantidad de articulo" name='cantidad' placeholder="Cantidad de Articulo" value="">
        @if ($errors->has('cantidad'))
            <span class="text-danger">La cantidad es requerida</span>
        @endif
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href='{{ route('home') }}' class=" btn btn-danger">Regresar</a>
  </form>
  @if (session('status2'))
    <div class="alert alert-success">
        {{ session('status2') }}
    </div>
    @endif


</div>
</div>
</div>
</div>
@endsection
