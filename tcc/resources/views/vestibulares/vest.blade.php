@extends('layout')
@section('container')

    <!--link meu css-->
    <link rel="stylesheet" href="./css/stylev.css">



<div class="container geral">
    <div class="row justify-content-center">
@forelse($enems as $enems)
        
      <div class="col-lg-6 col-md-12 col-xs-12 my-3 ">
        <div style="border: none; position: relative; border-radius: 0; align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card h-100">
            <div style="position: absolute; top: 0; text-align: center;">
                <h1 class="enem">ENEM</h1>
                <p class="ano">{{$enems['ano_vest']}}</p>
            </div>
            <div style="display: flex; justify-content: space-between;">

        <!--card 1-->
      <div style="min-height: 330px;  min-width: 250px;  margin: 80px 15px 10px 15px;"><!--rr-->
        <div style="display: flex; flex-direction: column; align-items: center;" class="card  h-100">
            <img src="{{asset($enems['img_vest'])}}" class="img card-img-top p-2" alt="">
            <h1 style="color: #158291; padding-top: 10px;" class="card-title textdisc">Primeiro dia</h1>
            <h1 style="color: #158291;  padding: 0 27px;" class="card-title textdisc">Linguagens e Ciências Humanas</h1>

            <div style="display: flex; justify-content: center; align-items: center; padding-top: 25px; padding-bottom: 5px;">
                <ul style="list-style: none; margin: 0; padding: 0;">
                    <li><a href="/vest/baixar1/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Amarelo</h1></button></a></li>
                    <li><a href="/vest/baixar2/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Azul</h1></button></a></li>
                    <li><a href="/vest/baixar3/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Branco</h1></button></a></li>
                    <li><a href="/vest/baixar4/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Rosa</h1></button></a></li>
                </ul>
            </div>
        </div><!--fim do card-->
    </div><!--fim da coluna-->

    <!--card 2-->
    <div style="min-height: 330px;  min-width: 250px;  margin: 80px 15px 10px 15px; ">
      <div style="display: flex; flex-direction: column; align-items: center;" class="card  h-100">
          <img src="{{asset($enems['img_vest'])}}" class="img card-img-top p-2" alt="">
          <h1 style="color: #158291; padding-top: 10px;" class="card-title textdisc">Segundo dia</h1>
          <h1 style="color: #158291; padding: 0 15px;" class="card-title textdisc">Ciências da Natureza e Matemática</h1>

          <div style="display: flex; justify-content: center; align-items: center; padding-top: 25px; padding-bottom: 5px;">
              <ul style="list-style: none; margin: 0; padding: 0;">
                <li><a href="/vest/baixar5/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Amarelo</h1></button></a></li>
                <li><a href="/vest/baixar6/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Azul</h1></button></a></li>
                <li><a href="/vest/baixar7/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Branco</h1></button></a></li>
                <li><a href="/vest/baixar8/{{$enems['facu_vest']}}/{{$enems['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Rosa</h1></button></a></li>
              </ul>
          </div>
      </div>
    </div>

    </div>
    </div>
    </div>
@empty

@endforelse


    <!-- FUVEST -->

@forelse($fuvests as $fuvests)
    
  <div class="col-lg-3 col-md-6 col-xs-12 my-3 ">
    <div style="border: none; position: relative; border-radius: 0; align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card h-100">
        <div style="position: absolute; top: 0; text-align: center;">
            <h1 class="enem">FUVEST</h1>
            <p class="ano">{{$fuvests['ano_vest']}}</p>
        </div>
        <div style="display: flex; justify-content: space-between;">

  <!--card 1-->
  <div style="min-height: 310px;  min-width: 250px;  margin: 80px 15px 10px 15px;">
    <div style="display: flex; flex-direction: column; align-items: center;" class="card  h-100">
        <img style="margin-left: 80px; margin-right: 80px;" src="{{asset($fuvests['img_vest'])}}" class="img card-img-top p-2" alt="">
        <h1 style="color: #158291; padding-top: 10px; " class="card-title textdisc">Primeira fase</h1>
            <ul style="list-style: none; margin: 0; padding: 0;">
                <li><a href="/vest/baixar1/{{$fuvests['facu_vest']}}/{{$fuvests['ano_vest']}}"><button style="border:none; background-color: white;" type="submit"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Primeira Fase</h1></button></a></li>
            </ul>

            <h1 style="color: #158291; text-align: center; padding-top: 5px;" class="card-title textdisc">Segunda fase</h1>
                        <ul style="list-style: none; margin: 0; padding: 0; padding-bottom: 15px;">
                            <li><a href="/vest/baixar2/{{$fuvests['facu_vest']}}/{{$fuvests['ano_vest']}}"><button style="border:none; background-color: white;" type="submit"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Primeiro Dia</h1></button></a></li>
                            <li><a href="/vest/baixar3/{{$fuvests['facu_vest']}}/{{$fuvests['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Segundo Dia</h1></button></a></li>
                            <li>
                                @if($fuvests['ano_vest'] == '2017')
                                    <!--Display the image for the first two items-->
                                    <li><a href="/vest/baixar4/{{$fuvests['facu_vest']}}/{{$fuvests['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Terceiro Dia</h1></button></a></li>                                   

                                @endif
                            </li>
                            <li>
                                @if($fuvests['ano_vest'] == '2018')
                                    <!--Display the image for the first two items-->
                                    <li><a href="/vest/baixar4/{{$fuvests['facu_vest']}}/{{$fuvests['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Terceiro Dia</h1></button></a></li>                                   

                                @endif
                            </li>
                        </ul>
                        </ul>
    </div>
</div>

</div>
</div>
</div>
@empty

@endforelse


<!-- UNESP -->


@forelse ($unesps as $unesp)

    
    @if($unesp["ano_vest"] === "2020")
<div class="col-lg-3 col-md-6 col-xs-12 my-3 ">
  <div style="border: none; position: relative; border-radius: 0; align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card h-100">
      <div style="position: absolute; top: 0; text-align: center;">
          <h1 class="enem">UNESP</h1>
          <p class="ano">{{$unesp['ano_vest']}}</p>
      </div>
      <div style="display: flex; justify-content: space-between;">

<!--card 1-->
<div style="min-height: 310px;  min-width: 250px;  margin: 80px 15px 10px 15px;">
  <div style="display: flex; flex-direction: column; align-items: center;" class="card  h-100">
      <img style="margin-left: 80px; margin-right: 80px;" src="{{asset($unesp['img_vest'])}}" class="img card-img-top p-2" alt="">
      <h1 style="color: #158291; padding-top: 10px; " class="card-title textdisc">Unesp-2020</h1>

          <ul style="list-style: none; margin: 0; padding: 0; padding-bottom: 116px;">
            <li><a href="/vest/baixar1/{{$unesp['facu_vest']}}/{{$unesp['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Unesp-2020</h1></button></a></li>
          </ul>
  </div>
</div>

</div>
</div>
</div>

    @else

<div class="col-lg-3 col-md-6 col-xs-12 my-3 ">
  <div style="border: none; position: relative; border-radius: 0; align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card h-100">
      <div style="position: absolute; top: 0; text-align: center;">
          <h1 class="enem">UNESP</h1>
          <p class="ano">{{$unesp['ano_vest']}}</p>
      </div>
      <div style="display: flex; justify-content: space-between;">

<!--card 1-->
<div style="min-height: 310px;  min-width: 250px;  margin: 80px 15px 10px 15px;">
  <div style="display: flex; flex-direction: column; align-items: center;" class="card  h-100">
      <img style="margin-left: 80px; margin-right: 80px;" src="{{asset($unesp['img_vest'])}}" class="img card-img-top p-2" alt="">
      <h1 style="color: #158291; padding-top: 10px; " class="card-title textdisc">Primeira fase</h1>

          <ul style="list-style: none; margin: 0; padding: 0;">
            <li><a href="/vest/baixar1/{{$unesp['facu_vest']}}/{{$unesp['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Primeira fase</h1></button></a></li>
          </ul>

          <h1 style="color: #158291; text-align: center; padding-top: 5px;" class="card-title textdisc">Segunda fase</h1>
            <ul style="list-style: none; margin: 0; padding: 0; padding-bottom: 60px;">
                <li><a href="/vest/baixar2/{{$unesp['facu_vest']}}/{{$unesp['ano_vest']}}"><button type="submit"style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Segunda fase</h1></button></a></li>            </ul>
  </div>
</div>

</div>
</div>
</div>

@endif
@empty

@endforelse


<!-- UNICAMPS -->
@forelse ($unicamps as $unicamp)

    
<div class="col-lg-3 col-md-6 col-xs-12 my-3 ">
  <div style="border: none; position: relative; border-radius: 0; align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;" class="card h-100">
      <div style="position: absolute; top: 0; text-align: center;">
          <h1 class="enem">UNICAMP</h1>
          <p class="ano">{{$unicamp['ano_vest']}}</p>
      </div>
      <div style="display: flex; justify-content: space-between;">

<!--card 1-->
<div style="min-height: 310px;  min-width: 250px;  margin: 80px 15px 10px 15px;">
  <div style="display: flex; flex-direction: column; align-items: center;" class="card  h-100">
      <img style="margin-left: 80px; margin-right: 80px;" src="{{asset($unicamp['img_vest'])}}" class="img card-img-top p-2" alt="">
      <h1 style="color: #158291; padding-top: 10px; " class="card-title textdisc">Primeira fase</h1>
      <ul style="list-style: none; margin: 0; padding: 0; padding-bottom: 20px;">
        <li><a href="/vest/baixar1/{{$unicamp['facu_vest']}}/{{$unicamp['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Primeira fase</h1></button></a></li>

        </ul>


        <h1 style="color: #158291; text-align: center; padding-top: 5px;" class="card-title textdisc">Segunda fase</h1>
                <ul style="list-style: none; margin: 0; padding: 0; padding-bottom: 60px;">
                <li><a href="/vest/baixar2/{{$unicamp['facu_vest']}}/{{$unicamp['ano_vest']}}"><button type="submit" style="border:none; background-color: white;"><h1 class="card-title textenem"><i style="margin-right: 7px; color: #727272;" class="bi bi-download"></i>Segunda fase</h1></button></a></li>
                </ul>
  </div>
</div>

</div>
</div>
</div>
@empty

@endforelse
</div>
</div>

@endsection
