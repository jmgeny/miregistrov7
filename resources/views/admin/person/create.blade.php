@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Crear Atleta</h1>
                    <a class="btn btn-primary float-right" href="{{ route('admin.people.index') }}">Listar</a>
                </div>
                <div class="card-body">
                	<form>
                		<h5>El atleta se crea al momento de Registrarse</h5> <br>
                        @guest
                            <a href="{{ route('register') }}" class="btn btn-primary">Resitrarse</a>
                        @else
                            <h3>{{ Auth::user()->name }}</h3>
                            <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest    
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
