@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" offset-md-2>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card text-center">
                        <h3 class="card-title">Atletas</h3>
                        <div class="card-body">
                            <a href="{{ route('admin.people.index') }}">
                                <img src="https://picsum.photos/300/200" class="img-thumbnail" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <h3 class="card-title">Organizador</h3>
                        <div class="card-body">
                            <a href="#">
                                <img src="https://picsum.photos/300/200" class="img-thumbnail" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-center">
                        <h3 class="card-title">Evento</h3>
                        <div class="card-body">
                            <a href="#">
                                <img src="https://picsum.photos/300/200" class="img-thumbnail" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
