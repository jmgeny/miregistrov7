@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Usuarios</h1>
                    <a class="btn btn-primary float-right" href="{{ route('admin.people.index') }}">Regresar</a>
                </div>
                <div class="card-body">
                	<form action="">
                    	<input type="text" value="{{ auth()->user()->id }}" name="user_id" hidden>
                		<strong>Formulario de creación No existiria ya que se crea con el usuario</strong>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
