@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Clientes</h3> <br>
        <a href="{{ url('/cliente/crear')}}" class="btn btn-primary">Crear</a>
    </div>
    <div style="padding:20px">
        <form name="frmRegistrar" method="POST" action="{{ url('/cliente/guardar')}}">
            @csrf
            <div class="form-group">
                <label for="nombre">tipoDocumento: </label> <br>
                <input type="text" id="tipoDocumento" name="tipoDocumento">

            </div>
            <div class="form-group">
                <label for="nombre">documento: </label><br>
                <input type="text" id="documento" name="documento">
            </div>
            <div class="form-group">
                <label for="nombre">nombres: </label><br>
                <input type="text" id="nombres" name="nombres">
            </div>
            <div class="form-group">
                <label for="nombre">apellidos: </label><br>
                <input type="text" id="apellidos" name="apellidos">
            </div>
            <br>
            <div class="form-group">
                <label for="nombre">direccion: </label><br>
                <input type="text" id="direccion" name="direccion">
            </div>
            <div class="form-group">
                <label for="nombre">telefono: </label><br>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="nombre">genero: </label><br>
                <input type="text" id="genero" name="genero">
            </div>
            <div class="form-group">
                <label for="nombre">fechaNacimiento: </label><br>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento">
            </div>
            <div class="form-group">
                <label for="nombre">estadoCivil: </label><br>
                <input type="text" id="estadoCivil" name="estadoCivil">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
@endsection