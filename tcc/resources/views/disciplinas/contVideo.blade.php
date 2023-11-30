@extends('layout')
@section('container')

<link rel="stylesheet" href="{{asset('css/contVideo.css')}} ">
<!--conteúdo-->
<div style="margin-left: 60px; margin-top: 100px;display: flex;flex-direction: column;align-items: flex-start;text-align: left;" class="resp-tit">
    <h1 class="tit">{{$nome}}</h1>
    </div>

    <div class="containermat">

    <!--incorporar video youtube-->
    @foreach($conteudos as $conteudos)
    <div class="video" style="margin-top: 40px; ">

        <iframe  src="{{$conteudos["video_cont"]}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    @endforeach
    </div>
    <!--fim do conteúdo-->

@endsection
