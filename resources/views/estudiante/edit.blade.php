@extends('welcome')

@section('titulo', 'Editar Estudiantes')

@section('contenido')

<h1>Editar Estudiantes</h1>

<form action="/estudiantes/{{$estudiante->id}}" method="post">
    @method('PUT')
    @csrf
    <div>
        <label for="" class="form-label">Matricula</label>
        <input type="text" name="matricula" id="matricula" class="form-control" value="{{$estudiante->matricula}}">
        <br>
        @error('matricula')
            <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$estudiante->nombre}}">
        <br>
        @error('nombre')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Apellido Paterno</label>
        <input type="text" name="apellidopaterno" id="apellidopaterno" class="form-control" value="{{$estudiante->apellidopaterno}}">
        <br>
        @error('apellidopaterno')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Apellido Materno</label>
        <input type="text" name="apellidomaterno" id="apellidomaterno" class="form-control" value="{{$estudiante->apellidomaterno}}">
        <br>
        @error('apellidomaterno')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Correo</label>
        <input type="email" name="correo" id="correo" class="form-control" value="{{$estudiante->correo}}">
        <br>
        @error('correo')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <a href="/estudiantes" class="btn btn-danger text-light">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>


@endsection