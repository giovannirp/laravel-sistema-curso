@extends('layouts.main')

@section('title', 'Cursos e eventos')

@section('content')

    <h1>{{ $nome }}</h1>

    <p>O nome é {{ $nome }} e ele tem {{ $idade}} anos</p>

    <div id="search-container" class="col-md-12">
        <h1 class="text-danger">Busque um evento</h1>

        <form action="">
            <input type="text" id="search" class="form-control" placehoder="Procurar..." />
        </form>
    </div>
@endsection
