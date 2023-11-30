@extends('layout')
@section('container')

<link rel="stylesheet" href="./css/styled.css">

<div class="container geral">
<div class="row justify-content-center">

  @foreach ($disciplinas as $disciplina)
  <div style="height: 300px;" class="col-lg-3 col-md-6 col-xs-12 my-3 ">    
    <div style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card card-link h-100">
      <a href="/disciplinas/{{$disciplina->pk_cod_disc}}" class="text-reset text-decoration-none">
        <img src="{{asset( $disciplina['img_disc'])}}" class="img card-img-top p-2" alt="">
        <div class="card-body">
          <h1 class="card-title textdisc">{{$disciplina["nome_disc"]}}</h1>
        </div><!--fim do card-body-->
      </a>
    </div><!--fim do card-->
</div><!--fim da coluna-->

  @endforeach
</div>
</div>
@endsection