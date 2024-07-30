@extends('layouts.main')

@section('title', 'Destaques do cursos')

@section('content')

<div class="container">
  <h1>destaques</h1>
  @foreach($destaques as $destaque)
   <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">{{$destaque->title}}</h5>
        <strong class="text-danger">{{$destaque->subtitle}}</strong>
        <p class="card-text">{{$destaque->description}}</p>
        <a href="/" class="btn btn-primary">Voltar para Home</a>
      </div>
    </div>
  @endforeach
</div>

@endsection