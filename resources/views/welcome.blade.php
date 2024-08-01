@extends('layouts.main')

@section('title', 'Cursos e eventos')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1 class="text-danger mt-4">Busque um evento</h1>

        <form action="">
            <input type="text" id="search" class="form-control" placehoder="Procurar..." />
        </form>
    </div>

  
    <div class="cards-container row mt-5">
        @foreach($events as $event)
        <div class="card col-md-3 me-4">
            <img src="/img/img-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text"> {{ $event->description }}</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
