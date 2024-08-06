@extends('layouts.main')

@section('title', 'Palestrantes oficiais')

@section('content')
<div class="container row mt-4">
    <h1>Palestrantes</h1>
    <a href="/events/palestrante" class="link-success text-decoration-none link-hover d-block mb-4">Cadastar participantes</a>
    @foreach($palestrantes as $palestrante)
    <div class="card col-md-3 me-4  mb-4">
      <img src="/img/foto-perfil.jpg" class="card-img-top w-100" />
      <div class="card-body">
        <h5 class="card-title">{{$palestrante->nome}}</h5>
        <strong class="text-danger">{{$palestrante->idade}} Anos</strong>
        <p class="card-text">{{$palestrante->formacao}}</p>
        <a href="/" class="btn btn-primary">Voltar para Home</a>
      </div>
    </div>
    @endforeach
</div>

@endsection