@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<h1 class="mt-4">Cadastrastro Palestrante</h1>

<div class="col-md-6">
    <form action="/palestrant" method="POST" enenctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="nome">Titulo</label>
            <input 
                type="text"
                class="form-control" 
                id="nome" 
                name="nome"
                placeholder="Digite o nome do Palestrante"
            />
        </div>
        <div class="form-group mb-3">
            <label for="idade">Idade</label>
            <input 
                type="text"
                class="form-control" 
                id="idade" 
                name="idade"
                placeholder="Digite a idade do Palestrante"
            />
        </div>
        <div class="form-group mb-3">
            <label for="formacao">Digite a formação do palestrante</label>
            <textarea 
                type="text"
                class="form-control" 
                id="formacao" 
                name="formacao"
                placeholder="Digite a idade do Palestrante"
            ></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar um palestrante">
    </form>
</div>

@endsection
