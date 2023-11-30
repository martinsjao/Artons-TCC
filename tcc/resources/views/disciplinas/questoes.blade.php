@extends('layout')
@section('container')

<link rel="stylesheet" href="/css/questoes.css">

<div class="resp-tit">
    <h1 class="tit">{{$nome}}</h1>
    <p style="margin-top: 10px; font-family: 'Outfit'; font-size: 20px; color: #727272; ">Hora de testar seus conhecimentos!!!</p>
</div>

    @foreach($questoes as $questao)
    <div style="margin: 30px 60px;" class="card">
        <div class="card-body">
          <h5 style="color: #5e3d3d; font-size: 22px;" class="card-title">{{$questao["nome_quest"]}}</h5>
          <p class="card-text">{{$questao["enunciado_quest"]}}</p>

            {{-- @foreach($alternativas->where('quest_id', $questao->pk_cod_quest) as $alternativa)
                <p class="card-text"><span style="font-weight: bold; margin-right: 5px;" class="card-text">(A){{$alternativa->texto_alt}}</span> </p>
            @endforeach --}}

            @foreach($alternativas->where('quest_id', $questao->pk_cod_quest) as $index => $alternativa)
              <p class="card-text @if($alternativa->resp_alt) correta @endif" id="alternativa_{{ $index }}"><span style="font-weight: bold; margin-right: 5px;" class="card-text" > - {{$alternativa->texto_alt}}</span> </p>
            @endforeach

          <button class="btn-resp" onclick="handleButtonClick(this)">Ver resposta</button>
        </div>

    </div>
    @endforeach


@endsection

<script>
  function handleButtonClick(button) {
      var questionBlock = button.closest('.card-body'); // Encontrar o bloco da pergunta pai do botão clicado
      var correta = questionBlock.querySelector('.correta');

      if (correta) {
          correta.style.backgroundColor = 'greenyellow'; // Alterar a cor de fundo da resposta correta
      } else {
          alert("Nenhuma resposta correta encontrada.");
      }
  }
</script>
