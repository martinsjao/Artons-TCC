@extends('layout')
@section('container')

<link rel="stylesheet" href="/css/contEscrito.css">



<!--conteúdo-->
<div class="containermat" style="max-width: 70%; margin-left: 60px; margin-top: 100px;">
    <h1 class="tit">{{$nome}}</h1>
    <p style="margin-top: 30px; font-family: 'Outfit'; font-size: 20px;">{{$texto}}</p>
    <p class="tit2" style="margin-top: 30px; font-family: 'Outfit'; font-size: 30px;">Saiba mais sobre {{$nome}}:</p>

    @foreach($conteudos as $conteudos)
    <ul style="width: 100%;" class="list-group list-group-flush">
      <li class="list-group-item"><a href="{{$conteudos["route_texto_cont"]}}">{{$nome}}</a></li>
    </ul>
    @endforeach

</div>
    <!--fim do conteúdo-->

@endsection
