@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')


<div class="col-md-6">
    <h3 class="mt-4 mb-4">Crie um evento</h3>
    <form action="/events" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3 back">
        <label for="title">Nome do curso</label>
        <input type="text" class="form-control border border-primary" placeholder="Digite o nome do curso" id="title" name="title" />
      </div>

      <div class="form-group mb-3 back">
        <label for="city">Cidade</label>
        <input type="text" class="form-control border border-primary" placeholder="Digite a Cidade" id="city" name="city" />
      </div>

      <div class="form-group mb-3 back">
        <label for="description">Privado</label>
        <input type="checkbox" name="private" id="private" value="1" />
      </div>

      <div class="form-group mb-3 back">
        <label for="description">Descricao</label>
        <textarea type="text" class="form-control border border-primary" placeholder="O que vai acontecer no evento" id="description" name="description"></textarea>
      </div>

      <input type="submit" class="btn btn-primary" value="Criar Evento" />
    </form>
   

  </div>

@endsection
