@extends('layout')

@section('container')
<div style="margin: 150px;"class="card ">

    <div style="background-color: #5ab9c6;" class="card-header text-white">
      <h2 style="font-size: 21px; padding-top: 10px;">Adicionar um novo conteúdo na {{$nome}}</h2>
    </div>


    <form action="{{ url('semana/add') }}" method="post">
        @csrf


    <div class="card-body p-4 px-5">


        <!-- semana-->
        <div class="mb-2">

          <input type="hidden" name="semana_id" value="{{ $crono[0]->pk_cod_semana }}" selected disable>
        </div>

        <!-- conteudo-->
        <div class="mb-2">
          <label class="form-label">Conteudo</label>
          <select class="form-control" name="cont_id" required>
            <option value="" selected disabled>Selecione um conteúdo</option>
            @forelse($conteudos as $cont)
              <option value="{{ $cont->pk_cod_cont }}">{{ $cont->nome_cont }}</option>
            @empty
            @endforelse
          </select>
        </div>
        <!-- Botões -->
        <div class="mt-3 text-end">
          <button class="entrar-button" type="submit">adicionar</button>
        </div>
      </form>
    </div>
  </div>
@endsection
