@extends('layouts.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Categoria Table</h3>
              <a class="btn btn-success btn-sm float-right" href="{{ route('categoria.create') }}">Crear Nuevo
                Categoria</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>                    
                    <th>Codigo Categoria</th>
                    <th>Nombre</th>
                    {{-- <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Email</th> --}}
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categorias as $categoria)
                  <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombre}}</td>
                    {{-- <td>{{$categoria->nombre}}</td>
                    <td>{{$categoria->apellido}}</td>
                    <td>{{$categoria->fechan}}</td>
                    <td>{{$categoria->telefono}}</td>
                    <td>{{$categoria->direccion}}</td>
                    <td>{{$categoria->email}}</td> --}}
                    <td class="project-actions text-left">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-primary btn-sm"
                            href="{{ route('categoria.edit', $categoria->id) }}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('categoria.destroy', $categoria->id) }}"
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