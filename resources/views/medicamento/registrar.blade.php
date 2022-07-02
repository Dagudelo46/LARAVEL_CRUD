@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">medicamentos</h3> <br>
        <a href="{{ url('/medicamento/crear')}}" class="btn btn-primary">Crear</a>
    </div>
    <div style="padding:20px">
        <form name="frmRegistrar" method="POST" action="{{ url('/medicamento/guardar')}}">
            @csrf
            <div class="form-group">
                <label for="nombre">precio: </label><br>
                <input type="text" id="precio" name="precio">
            </div>
            <div class="form-group">
                <label for="nombre">nombre: </label><br>
                <input type="text" id="nombre" name="nombre">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
@endsection