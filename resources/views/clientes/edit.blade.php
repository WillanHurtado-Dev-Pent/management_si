@extends('layouts.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('cliente.update', $cliente->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputText1">Carnet de Identidad</label>
                  <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter ..." name="ci" value="{{$cliente->ci}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter ..." name="nombre" value="{{$cliente->nombre}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">Apellido</label>
                  <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter ..." name="apellido" value="{{$cliente->apellido}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">Fecha de Nacimiento</label>
                  <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter ..." name="fechan" value="{{$cliente->fechan}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputNumber1">Telefono</label>
                  <input type="number" class="form-control" id="exampleInputNumber1" placeholder="Enter ..." name="telefono" value="{{$cliente->telefono}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">Direccion</label>
                  <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter ..." name="direccion" value="{{$cliente->direccion}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter ..." name="email" value="{{$cliente->email}}" required>
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter ...">
                </div> --}}
                {{-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Modificar</button>
                <a class="btn btn-secondary" href="{{ route('cliente.index')}}">Cancelar</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</section>
@endsection