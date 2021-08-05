@extends('layouts.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Paquete Table</h3>
              <a class="btn btn-success btn-sm float-right" href="{{ route('paquete.create') }}">Crear Nuevo
                Paquete</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>                    
                    {{-- <th>CI</th> --}}
                    <th>Descripcion</th>
                    <th>Nombre</th>
                    {{-- <th>Apellido</th>
                    <th>Fecha de Nacimiento</th> --}}
                    <th>Precio</th>
                    {{-- <th>Direccion</th>
                    <th>Email</th> --}}
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($paquetes as $paquete)
                  <tr>
                    {{-- <td>{{$cliente->ci}}</td> --}}
                    <td>{{$paquete->descripcion}}</td>
                    <td>{{$paquete->nombre}}</td>
                    {{-- <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->fechan}}</td> --}}
                    <td>{{$paquete->precio}}</td>
                    {{-- <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->email}}</td> --}}
                    <td class="project-actions text-left">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-primary btn-sm"
                            href="{{ route('paquete.edit', $paquete->id) }}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('paquete.destroy', $paquete->id) }}"
                            method="post" style="display: inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                  </tr>  
                  @endforeach                                                    
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</section>
@endsection