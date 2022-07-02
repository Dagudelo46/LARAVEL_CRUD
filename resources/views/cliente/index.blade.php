@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">CLientes</h3> <br>
          <a href="{{ url('/cliente/crear')}}">Crear</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 2%">
                          ID: 
                      </th>
                      <th style="width: 11%">
                          Documento
                      </th>
                      <th style="width: 11%">
                          TipoDocumento
                      </th>
                      <th style="width: 11%">
                          Nombres
                      </th>
                      <th style="width: 11%">
                          Apellido
                      </th>
                      <th style="width: 11%">
                          Direccion
                      </th>
                      <th style="width: 11%">
                          Telefono
                      </th>
                      <th style="width: 11%">
                          Genero
                      </th>
                      <th style="width: 11%" >
                          FechaNatal
                      </th>
                      <th style="width: 11%">
                          EstadoCivil
                      </th>
                  </tr>
              </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->documento }}</td>
                <td>{{ $cliente->tipoDocumento }}</td>
                <td>{{ $cliente->nombres }}</td>
                <td>{{ $cliente->apellidos }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->genero }}</td>
                <td>{{ $cliente->fechaNacimiento }}</td>
                <td>{{ $cliente->estadoCivil }}</td>
                <td class="project-actions text-right">
                    <form action="{{ url('/cliente/eliminar',$cliente) }}" method="POST">
                        @csrf
                        <a class="btn btn-info btn-sm" href="{{url ('/cliente/editar', $cliente->id )}}">
                            <i class="fas fa-pencil-alt">  </i>
                              Editar
                        </a>
                        @method('DELETE')
                        <button type="submit "class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"> </i>
                            Eliminar
                        </button>
                    </form>    
                </td>
            </tr>
            @endforeach
        </tbody>

</table>
@endsection