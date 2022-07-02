@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">medicamento</h3> <br>
        <a href="{{ url('/medicamento/crear')}}" class="btn btn-primary">Editar</a>
    </div>
    <div style="padding:20px">
        <form name="frmRegistrar" method="POST" action="{{ url('/medicamento/actualizar',$medicamento->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="precio">precio: </label><br>
                <input type="text" id="precio" name="precio" value="{{ $medicamento->precio}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">nombre:</label><br>
                <input type="text" id="nombre" name="nombre" value="{{ $medicamento->nombre}}" style="width:80%">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection