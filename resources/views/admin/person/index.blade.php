@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="float-left" >Usuarios</h1>
                    <a class="btn btn-primary float-right" href="{{ route('admin.people.create') }}">Crear</a>
                </div>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Fecha Nacimiento</th>
                          <th colspan="3" class="text-center">Botones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($people as $person)
                            <tr>
                                <th scope="row">{{ $person->id }}</th>
                                <td>{{ $person->name }}</td>
                                <td>{{ $person->surname }}</td>
                                <td>{{ $person->birthday }}</td>
                                <td><a class="btn btn-success" href="{{ route('admin.people.show', $person->id) }}">ver</a></td>
                                <td><a class="btn btn-warning" href="{{ route('admin.people.edit', $person->id) }}">Editar</a></td>
                                <td>
                                    <form action="{{ route('admin.people.destroy',$person->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$people->links()}}                                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
