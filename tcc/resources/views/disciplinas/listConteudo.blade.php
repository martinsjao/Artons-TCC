@extends('layout')
@section('container')


<link rel="stylesheet" href="/css/conteudo.css">


<form action="" method="get">

<!--conteúdo-->
<div class="containerpesq">
    <div class="search_wrap search_wrap_1">
      <div class="search_box">
            <input type="text" class="input" id="search_cont" name="search_cont" value="" placeholder="busque um conteúdo...">
        <div class="btn btn_common">
          <i class="bi bi-search"></i>
        </div>
      </div>
    </div>
</div>

</form>
<div class="resp-tit">
    <h1 class="tit">{{$nome}}</h1>
</div>

    @foreach($conteudos as $conteudos)
      <div style="margin: 0 60px" class="card mb-5">
        <div class="card-body">
          <div class="conteudo">
            <div class="d-flex align-items-center justify-content-between">
              <p class="conteudo-titulo">{{$conteudos["nome_cont"]}}</p>
              <div class="btns-conteudo">
                <input type="checkbox" class="toggle-card-checkbox">
                <i class="fa fa-chevron-down fa-lg"></i>
              </div>
            </div>
            <div class="cards">
              <div class="d-flex justify-content-evenly mb-5 w-100">
                <a class="card" style="text-decoration: none;" href="/contEscrito/{{$conteudos->pk_cod_cont}}">
                  <img class="img" src="{{asset('img/material escrito.png')}}" alt="">
                  <h1 class="textdisc">Material escrito</h1>
                  </a>

                  <a class="card" style="text-decoration: none;" href="/contVideo/{{$conteudos->pk_cod_cont}}">
                    <img class="img" src="{{asset('img/conteudo em video.png')}}" alt="">
                    <h1 class="textdisc">Video</h1>
                    </a>


                    <a class="card" style="text-decoration: none;" href="/questoes/{{$conteudos->pk_cod_cont}}">
                    <img class="img" src="{{asset('img/questoes.png')}}" alt="">
                    <h1 class="textdisc">Questões</h1>
                    </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach

@endsection
