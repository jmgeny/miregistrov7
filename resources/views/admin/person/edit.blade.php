@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="float-left">Editar Usuarios</h1>
                    <a class="btn btn-primary float-right" href="{{ route('admin.people.index') }}">Regresar</a>
                </div>
                <form action="{{ route('admin.people.update',$person->id) }}" method="POST">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        {{-- <input type="text" value="{{ auth()->user()->id }}" name="user_id"> --}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                            value="{{ old('name',$person->name) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Apellido"
                            value="{{ old('surname',$person->surname) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI"
                            value="{{ old('dni',$person->dni) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección"
                            value="{{ old('direccion',$person->direccion) }}">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Fecha de Nacimiento"
                            value="{{ old('birthday',$person->birthday) }}">
                        </div>
                        {{-- genero --}}
                        <div class="form-group">    
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="hombre" name="genero" class="custom-control-input" value="Hombre"
                                @if (old('genero')=="Hombre")
                                checked
                                @elseif ($person['genero'] =="Hombre")
                                checked 
                                @endif   
                                >
                                <label class="custom-control-label" for="hombre">Caballero</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="mujer" name="genero" class="custom-control-input" value="Mujer"
                                @if (old('genero')=="Mujer")
                                checked
                                @elseif ($person['genero']=="Mujer")
                                checked     
                                @endif
                                >
                                <label class="custom-control-label" for="mujer">Dama</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"
                            value="{{ old('telefono',$person->telefono) }}">
                        </div>
                        {{-- estado --}}
                        <div class="form-group">    
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="activo" name="status" class="custom-control-input" value="activo"
                                @if (old('status')=="activo")
                                checked
                                @elseif ($person['status'] =="activo")
                                checked 
                                @endif
                                >
                                <label class="custom-control-label" for="activo">Activo</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="baja" name="status" class="custom-control-input" value="baja"
                                @if (old('status')=="baja")
                                checked
                                @elseif ($person['status']=="baja")
                                checked     
                                @endif
                                >
                                <label class="custom-control-label" for="baja">Baja</label>
                            </div>
                        </div>              
                        
                    </div> {{-- card-body --}}
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </form>
            </div>{{--card--}}
        </div>
    </div>
</div>
@endsection
