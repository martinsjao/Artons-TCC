@extends('layout')
@section('container')

<link rel="stylesheet" href="./css/styleo.css">

<form action="obras" method="get">

<div class="containerpesq">
  <div class="search_wrap search_wrap_1">
    <div class="search_box">
        <input type="text" class="input" id="search_obra" name="search_obra" value="" placeholder="busque um titúlo...">
      <div class="btn btn_common">
        <i class="bi bi-search"></i>
      </div>
    </div>

  </div>
  </div>

</form>
<div class="container geral">
  <div class="row justify-content-center">

    @forelse($obras as $obra)
      <div class="col-lg-{{ count($obras) > 1 ? '3' : '12' }} col-md-{{ count($obras) > 1 ? '6' : '12' }} col-xs-12 my-3">
        <div style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card card-link h-100">
          <div style="height: 300px; width: 260px;">
            <img class="img" src="{{ asset($obra['img_obra']) }}" alt="">
            <div class="card-body">
              <h1 class="card-title textdisc">{{ $obra['nome_obra'] }}</h1>
              <p class="textdisc2">{{ $obra['autor_obra'] }}</p>
            </div><!--fim do card-body-->
            <div style="text-align: center;">
              <a href="/obras/view/{{ $obra['nome_obra'] }}"><button class="leiturabtn" type="submit">ler agora</button></a>
              <a href="/obras/baixar/{{ $obra['nome_obra'] }}"><button class="leiturabtn" type="submit">baixar</button></a>
            </div>
          </div>
        </div><!--fim do card-->
      </div><!--fim da coluna-->
    @empty 
      <div class="col-lg-12 col-md-12 col-xs-12 my-3"> 
      </div>
    @endforelse

  </div>
</div>


<!--pagination
<nav style="margin-bottom: 70px;" aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a style="text-decoration: none; color: #6b6b6b;" class="page-link" href="../obras1/index.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a style="text-decoration: none; color: #6b6b6b;" class="page-link" href="../obras1/index.php">1</a></li>
    <li class="page-item"><a style="text-decoration: none; color: #6b6b6b;" class="page-link" href="../obras2/index.php">2</a></li>
    <li class="page-item">
      <a style="text-decoration: none; color: #6b6b6b;" class="page-link" href="../obras2/index.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
-->

@endsection
