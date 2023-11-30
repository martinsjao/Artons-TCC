

@extends('layout')

@section('container')

<link rel="stylesheet" href="{{asset('css/styles.css')}}">

 

<div style="margin: 150px;" class="card">

    <div style="background-color: #5ab9c6; " class="card-header text-white">
      <h2 style="font-size: 21px; padding-top: 10px;">Adicionar Nova Semana</h2>
    </div>


    <form action="/semana" method="post">
        @csrf


    <div class="card-body p-4 px-5">

        @csrf
        <!-- semana-->
        <div class="mb-2 option-style">
          <label class="form-label">Nome da semana</label>
          <input class="form-control" name="nome_semana" value="{{ old('nome_semana') }}" required/>
        </div>
        <!-- conteudo-->
        <div class="mb-2 ">
          <label class="form-label">Conteudo</label>
          <select class="form-select dropdown" name="cont_id" required>
            <option value="" selected disabled>Selecione um conteúdo</option>
            @forelse($conteudos as $cont)
              <option value="{{ $cont->pk_cod_cont }}">{{ $cont->nome_cont }}</option>
            @empty
            @endforelse
          </select>
        </div>
        <!-- Botões -->
        <div class="mt-3 text-end">
          <button class=" entrar-button" type="submit">Salvar</button>
        </div>
      </form>
    </div>
  </div>

@endsection
