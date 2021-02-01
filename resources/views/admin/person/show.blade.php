@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="float-left">Ver Atleta</h1>
                    <a class="btn btn-primary float-right" href="{{ route('admin.people.index') }}">Listar</a>
                </div>
            <form>
                <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                            value="{{$person->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Apellido"
                            value="{{$person->surname}}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI"
                            value="{{$person->dni}}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección"
                            value="{{$person->direccion}}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad"
                            value="{{$person->city}}" readonly>
                        </div>                        
                        <div class="form-group">
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Fecha de Nacimiento"
                            value="{{$person->birthday}}" readonly>
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
                                disabled="none">
                                <label class="custom-control-label" for="hombre">Caballero</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="mujer" name="genero" class="custom-control-input" value="Mujer"
                                @if (old('genero')=="Mujer")
                                    checked
                                @elseif ($person['genero']=="Mujer")
                                    checked     
                                @endif
                                disabled="none">
                                <label class="custom-control-label" for="mujer">Dama</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"
                            value="{{$person->telefono}}" readonly>
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
                                disabled="none">
                                <label class="custom-control-label" for="activo">Activo</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="baja" name="status" class="custom-control-input" value="baja"
                                @if (old('status')=="baja")
                                    checked
                                @elseif ($person['status']=="baja")
                                    checked     
                                @endif
                                disabled="none">
                                <label class="custom-control-label" for="baja">Baja</label>
                            </div>
                        </div>
                </div> {{-- card-body --}}
                <div class="card-footer">
                    <a class="btn btn-warning" href="{{ route('admin.people.edit', $person->id) }}">Editar</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
