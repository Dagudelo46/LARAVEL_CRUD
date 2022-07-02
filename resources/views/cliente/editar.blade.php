@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Cliente</h3> <br>
        <a href="{{ url('/cliente/crear')}}" class="btn btn-primary">Editar</a>
    </div>
    <div style="padding:20px">
        <form name="frmRegistrar" method="POST" action="{{ url('/cliente/actualizar',$cliente->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">documento: </label><br>
                <input type="text" id="documento" name="documento" value="{{ $cliente->documento}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">tipoDocumento:</label><br>
                <input type="text" id="tipoDocumento" name="tipoDocumento" value="{{ $cliente->tipoDocumento}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">nombres: </label><br>
                <input type="text" id="nombres" name="nombres" value="{{ $cliente->nombres}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">apellidos: </label><br>
                <input type="text" id="apellidos" name="apellidos" value="{{ $cliente->apellidos}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">direccion: </label><br>
                <input type="text" id="direccion" name="direccion" value="{{ $cliente->direccion}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">telefono: </label><br>
                <input type="text" id="telefono" name="telefono" value="{{ $cliente->telefono}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">genero: </label><br>
                <input type="text" id="genero" name="genero" value="{{ $cliente->genero}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">fechaNacimiento: </label><br>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="{{ $cliente->fechaNacimiento}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">estadoCivil: </label><br>
                <input type="text" id="estadoCivil" name="estadoCivil" value="{{ $cliente->estadoCivil}}" style="width:80%">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection