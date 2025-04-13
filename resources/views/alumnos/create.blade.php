@extends('layout.template')

@section('title','Registrar alumno | Escuela')
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Registrar alumno</h2>

        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close"></button>
            </div>
        @endif
                
        <form action="{{url('alumnos')}}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="matricula"
                        value="{{old('matricula')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre"
                        value="{{old('nombre')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="fecha" id="fecha"
                        value="{{old('fecha')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telefono" id="telefono"
                        value="{{old('telefono')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="text" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email" id="email"
                        value="{{old('email')}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Nivel:</label>
                <div class="col-sm-5">
                    <select name="nivel" id="nivel" class="form-select" required>
                        <option value="">Seleccionar nivel</option>
                        @foreach ($niveles as $nivel)
                            <option value="{{$nivel->id}}">{{$nivel->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <a href="alumnos" class="btn btn-secondary">Regresar</a> --}}
            <a href="{{url('alumnos')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>
@endsection