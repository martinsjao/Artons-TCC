@extends('layout')
@section('container')

    <!--link meu css-->
    <link rel="stylesheet" href="./css/stylei.css">

<div class="tela_toda">
    <div style="margin-top: 110px; margin-bottom: 30px; max-width: 1200px; height: 200px; background-color: #d4eaec; border-radius: 20px; text-align: left;" class="container">
        <div style="float: left; width: 80%;">
          <h1><span style="font-size: 70px; font-family: 'Lobster'; margin-left: 40px; color: #158291;">Bem vindo(a), {{auth()->user()->name }}</span></h1>
          <p style="margin-left: 40px; color: #727272; padding-top: 10px;">Bora arregaçar as mangas e começar a trabalhar!</p>
        </div>
          <img style="width: 370px; height: 370px; margin-left: auto;" src="./img/artons.png" alt="" class="img-fluid">
    </div>

    <div class="container d-flex justify-content-center align-items-center ">
      <div class="row">


          <div style="height: 300px; min-width: 350px;" class="col-lg-6 col-md-6 my-3">
              <div style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card card-link h-100 text-center">
                  <div class="text-reset text-decoration-none">
                      <img src="./img/leitura.png" class="img card-img-top p-2" alt="">
                      <div class="card__overlay">


          <div style="background-color: #d4eaec;" class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
            <h1  class="card-title textdisc">Continue sua leitura</h1>
          </div>
          <a style="text-decoration: none;" href="{{asset('/obras')}}">
          <p class="card__description">Não desista agora, prossiga com sua leitura de uma maravilhosa obra da nossa literatura clássica!</p>
          <i style="color: #5ab9c6;" class="bi bi-arrow-right"></i>
        </a>
        </div>

      </div>
              </div><!--fim do card-->
          </div><!--fim da coluna-->

          <div style="height: 300px; min-width: 350px;" class="col-lg-6 col-md-6 my-3">
            <div style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card card-link h-100 text-center">
                <div class="text-reset text-decoration-none">
                    <img src="./img/simulado.png" class="img card-img-top p-2" alt="">
                    <div class="card__overlay">


        <div style="background-color: #d4eaec;" class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
          <h1  class="card-title textdisc">Continue resolvendo simulado</h1>
        </div>
        <a style="text-decoration: none;" href="{{asset('/vest')}}">
        <p class="card__description">Não desista agora, complete seu simulado para ficar 101% preparado(a)!</p>
        <i style="color: #5ab9c6;" class="bi bi-arrow-right"></i>
      </a>
      </div>

    </div>
            </div><!--fim do card-->
        </div><!--fim da coluna-->
</div>
</div>
</div>


<!--EDITAIS-->
<div class="start-after-full" style="background-color: #a2d9e0; height:500px; margin-bottom: 110PX;">
<div class="container">
  <div class="row justify-content-center" style="margin: auto;">
    <div style="height:500px ; align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" >
<div class="wrapper">
  <div class="outer">


    <!--enem-->
    <div class="cardve" style="--delay:-1;">
      <div class="contentve">
        <div class="img"><img src="./img/enem.png" alt=""></div>
        <div class="details">
          <span class="name">ENEM</span>
          <p>Confira o edital do ENEM</p>
        </div>
      </div>
      <button class="btnc">Vamos lá</button>
    </div>

    <!--unicamp-->
    <div class="cardve" style="--delay:0;">
      <div class="contentve">
        <div class="img"><img src="./img/unicamp.png" alt=""></div>
        <div class="details">
          <span class="name">UNICAMP</span>
          <p>Confira o edital da UNICAMP</p>
        </div>
      </div>
      <button class="btnc">Vamos lá</button>
    </div>

    <!--usp-->
    <div   class="cardve" style="--delay:1;">
      <div class="contentve">
        <div class="img"><img src="./img/fuvest.png" alt=""></div>
        <div class="details">
          <span class="name">FUVEST</span>
          <p>Confira o edital da USP</p>
        </div>
      </div>
      <button class="btnc">Vamos lá</button>
    </div>

    <!--unesp-->
    <div   class="cardve" style="--delay:2;">
      <div class="contentve">
        <div class="img"><img src="./img/unesp.png" alt=""></div>
        <div class="details">
          <span class="name">UNESP</span>
          <p>Confira o edital da UNESP</p>
        </div>
      </div>
      <button class="btnc">Vamos lá</button>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>




<div style="display: inline-block;  position: relative;">
<div style="height: 200px; width: 250px; background-color: #ececec; padding: 10px; border-radius: 15px; position: absolute; top: 230px; left: 440px; border: 1px solid #727272;">
  <header>
      <div id="prevMonth"><i style="font-size: 30px; color: #727272; cursor: pointer;" class="bi bi-arrow-left-short"></i></div>
      <h1 style="font-size: 20px; font-family: 'Outfit', sans-serif; color: #727272;" id="currentMonthYear"></h1>
      <div id="nextMonth"><i style="font-size: 30px; color: #727272; cursor: pointer;" class="bi bi-arrow-right-short"></i></div>
  </header>
  <table>
      <thead>
          <tr>
              <th style="padding-left: 8px;">DOM</th>
              <th>SEG</th>
              <th>TER</th>
              <th>QUA</th>
              <th>QUI</th>
              <th>SEX</th>
              <th>SAB</th>
          </tr>
      </thead>
      <tbody id="calendarBody">
      </tbody>
  </table>
</div>
<div style="margin-top: 10px; padding-top: 10px; margin-bottom: 40px; max-width: 800px; margin-left: 120px;">
  <img src="./img/cr.png" alt="" class="img-fluid">
</div>
</div>

<div style="text-align: center; display: inline-block; vertical-align: middle; margin-left: 100px; margin-bottom: 30px;">
<h1><span style="font-size: 70px; font-family: 'Outfit'; margin-left: 40px; color: #727272;">Crie ou Acesse</span></h1>
<h1><span style="font-size: 70px; font-family: 'Outfit'; margin-left: 40px; color: #727272;">seu</span></h1>
<h1><span style="font-size: 70px; font-family: 'Lobster'; margin-left: 40px; color: #5ab9c6;">cronograma</span></h1>

<a href="{{asset('/semanas')}}" ><button class="btn-cron-prog" >Vamos lá</button></a>
</div>





<div style="margin-bottom: 40px;">
<div style="text-align: center; display: inline-block; vertical-align: middle; margin-left: 100px; margin-bottom: 30px; margin-right: 30px;">
<h1><span style="font-size: 70px; font-family: 'Outfit'; margin-left: 40px; color: #727272;">Fique de olho</span></h1>
<h1><span style="font-size: 70px; font-family: 'Outfit'; margin-left: 40px; color: #727272;">no seu</span></h1>
<h1><span style="font-size: 70px; font-family: 'Lobster'; margin-left: 40px; color: #5ab9c6;">progresso</span></h1>

<a href="{{asset('/progresso')}}" ><button class="btn-cron-prog" >Vamos lá</button></a>
</div>

<div style="display: inline-block;  position: relative; margin-top: 50px;">
<div style="margin-top: 10px; padding-top: 10px; margin-bottom: 40px; max-width: 800px; margin-left: 120px;">
  <img src="./img/pr.png" alt="" class="img-fluid">
</div>
</div>
</div>



@endsection
