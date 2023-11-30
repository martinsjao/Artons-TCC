@extends('layout')
@section('container')


<!--dentro da wave-->
<div>
    <!--wave-->
    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
          <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
          <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
          <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
        </div>
      </div>
    <!--fim wave-->

    <!--texto-->
    <div style="display: table;" class="mt-5">
        <div id="texto-inicial" style="vertical-align: middle; display: table-cell; height: 600px;">
               <div class="d-flex">
                <div>
                    <h2 class="title-wave">Artons</h2>
                    <p class="text-wave">Pense no Artons como um amigo!
                        Ele vai te ajudar a estudar e vai ser seu guia rumo ao sucesso nos vestibulares.
                        Aqui você resolverá provas antigas, responderá questionários, assistirá vídeo-aulas, terá acesso à diversos conteúdos e obras literárias e muito mais para garantir sua aprovação.
                        Não precisa temer, Artons estará sempre com você!
                        Bora estudar?</p>

                    <!--botão-->
                    <div>
                        <a href="{{asset('/pplogins')}}">
                            <button class="btn-wave">Vamos começar</button>
                        </a>
                    </div>
                    <!--fim botão-->
                </div>
                <img src="{{asset('img/artons.png')}}" alt="" class="img-divl img-artons">
            </div>
        </div>
    </div>
    <!--fim texto-->
    </div>
    <!--fim dentro da wave-->


    <!--divisão 1-->
    <div style="height: 450px; display: table; width: 100%;">
        <div style="vertical-align: middle; display: table-cell;">
        <h2 id="title-div1" class="title-div1">Quem somos ?</h2>
        <p id="text-div1" class="text-div1">Somos como você, vestibulandos!
            Este site foi desenvolvido ainda durante o terceiro ano do ensino médio por estudantes de Desenvolvimento de Sistemas. Diante das dificuldades enfrentadas por nós nessa jornada rumo a aprovação, queremos fazer a diferença aos nossos e aos seus estudos!</p>
        </div>
    </div>
    <!--fim divisão 1-->

    <!--divisão 2-->
    <div class="section-progresso" style="background-color: #a2d9e0; height: 450px; display: table; width: 100%;">
        <div style="vertical-align: middle; display: table-cell;">
        <!--align img and text-->
        <div class="responsive" style="display: flex; align-items: center;">
        <!--text-->
        <div id="textos-div2" class="textosl">
        <h2 class="title-div2">Acompanhe seu progresso !</h2>
        <p class="text-div2">Nosso site permite que você acompanhe seu progresso de forma automática!
            Chega de ficar quebrando a cabeça, o Artons irá te mostrar todo seu desempenho facilitando sua organização!</p>
        </div>
        <!--img-->
        <img class="img-divl" id="img-1" src="{{asset('./img/trofeu.png')}}" alt="">
        </div>
        </div>
    </div>
    <!--fim divisão 2-->

    <!--divisão 3-->
    <div style="margin-top: 0%; height: 450px; display: table; width: 100%;">
        <div style="vertical-align: middle; display: table-cell;">
        <!--align img and text-->
        <div class="responsive" style="display: flex; align-items: center;">
        <!--img-->
        <img class="img-divr" id="img-2" src="{{asset('./img/estude-cont-relevantes.png ')}}" alt="">
        <!--text-->
        <div id="textos-div3" class="textosr">
        <h2 class="title-div3">Estude os conteúdos mais relevantes !</h2>
        <p class="text-div3">Aqui no Artons você encontrará conteúdos realmente relevantes para melhorar o seu desempenho nos estudos!
            Separamos com carinho cada uma das opções de estudo para que você tenha o melhor resultado possível, desde provas antigas de diferentes vestibulares, até vídeo aulas e conteúdos escritos com questionários para que a matéria cole na sua mente e não saia mais!</p>
        </div>
        </div>
        </div>
    </div>
    <!--fim divisão 3-->

    <!--divisão 4-->
    <div class="section-questoes" style="background-color: #a2d9e0; height: 450px; display: table; width: 100%;">
        <div style="vertical-align: middle; display: table-cell;">
        <!--align img and text-->
        <div class="responsive" style="display: flex; align-items: center;">
        <!--text-->
        <div id="textos-div4" class="textosl">
        <h2 class="title-div4">Resolva questões !</h2>
        <p class="text-div4">Chega de ficar parado na frente do seu computador apenas lendo e lendo sem entender uma palavra, vamos colocar a mão na massa!
            Aqui você terá a opção de sempre se testar e ver o seu desempenho em cada matéria!
            </p>
        </div>
        <!--img-->
        <img class="img-divl" id="img-3" src="{{asset('./img/resolva-questoes.png')}}" alt="">
        </div>
        </div>
    </div>
    <!--fim divisão card 4-->

    <!--divisão 5-->
    <div style="margin-top: 0%; height: 450px; display: table; width: 100%;">
        <div style="vertical-align: middle; display: table-cell;">
        <!--align img and text-->
        <div class="responsive" style="display: flex; align-items: center;">
        <!--img-->
        <img class="img-divr" id="img-4" src="{{asset('./img/acesse-obras-classicas.png')}} " alt="">
        <!--text-->
        <div id="textos-div5" class="textosr">
        <h2 class="title-div5">Acesse as mais diversas obras clássicas !</h2>
        <p class="text-div5">Achou que tinha acabado? Além de todas as aulas e conteúdos,
            no Artons você também encontra as obras clássicas cobradas nos vestibulares!
            Artons também é cultura rsrs</p>
        </div>
        </div>
        </div>
    </div>
    <!--fim divisão 5-->

    <!--divisão 6-->
    <div class="section-mecanismos" style="background-color:  #a2d9e0; height: 600px; display: table; width: 100%;">
        <div style="vertical-align: middle; display: table-cell;">
            <h2 class="title-div6">+ Mecanismos para maximizar seu potencial de aprendizado</h2>

            <div class="container">
                <div class="row justify-content-center" style="margin: auto;">
            <!--card esquerda-->
            <div id="card-esquerda" class="col-lg-4 col-md-6 col-xs-12">
            <div class=" meucard2">
                <div class="d-flex justify-content-center align-items-center">
                <img src="{{asset('./img/provas antigas.png')}}" class=" imgcard2 img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title title-card-esq">provas antigas</h5>
                  <p class="card-text text-card-esq">Amplie o seu conhecimento através da resolução de provas já passadas, das mais antigas às mais recentes.
                    Afinal, devemos sempre respeitar os mais velhos não é mesmo?</p>
                </div>
              </div>
              </div>
              <!--fim card esquerda-->

            <!--card centro-->
            <div id="card-centro" class="col-lg-4 col-md-6 col-xs-12">
            <div class="card meucard">
                <img src="{{asset('./img/cronograma.png')}}" class=" imgcard" alt="...">
                <div class="card-body">
                  <h5 class="card-title title-card-centro">cronograma</h5>
                  <p class="card-text text-card-centro">No nosso site você não precisa se preocupar com sua rotina!
                    Aproveite as nossas opções e crie um cronograma personalizado que se adeque ao seu dia a dia!</p>
                </div>
              </div>
              </div>
              <!--fim card centro-->

              <!--card direita-->
            <div id="card-direita" class="col-lg-4 col-md-6 col-xs-12">
            <div class="meucard3">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('./img/editais.png')}}" class=" imgcard3 img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title title-card-dir">editais</h5>
                  <p class="card-text text-card-dir">Através do nosso site você terá acesso aos mais diversos editais para poupar seu tempo de pesquisa, afinal, cada segundo conta quando se é um vestibulando não é mesmo?</p>
                </div>
              </div>
              </div>
              <!--fim card direita-->
              </div>
              </div>
        </div>
    </div>
    <!--fim divisão 6--->

    <!--divisão 7-->
    <div style="margin-top: 0%; height: 450px; display: table;  width: 100%;">
        <div style="vertical-align: middle; display: table-cell;">
        <!--feedbacks-->
    <section class="testimonials">
        <div class="containerf">
            <img class="setinha" src="{{asset('img/setinha.png')}}" alt="" srcset="">
            <div class="section-header">
                <h2 class="title-feedbacks">Feedbacks</h2>
            </div>

            <div class="testimonials-content">
                <div style="height: 300px;" class="swiper testimonials-slider js-testimonials-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="{{asset('./img/perfil 1.jpg')}}" alt="">
                                <div class="text-box">
                                    <h3 class="name">Amanda Mello</h3>
                                    <span class="job">Estudante | Unicamp</span>
                                </div>
                            </div>
                            <p  style="color: rgb(68, 68, 68); margin-top: 10px;">Os materiais são bem estruturados e as aulas em vídeo com questionarios são maravilhosas. Recomendo a todos os vestibulandos!</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="{{asset('./img/perfil 2.jpg')}}" alt="">
                                <div class="text-box">
                                    <h3 class="name">Cleiton Cardoso</h3>
                                    <span class="job">Estudante | USP</span>
                                </div>
                            </div>
                            <p style="color: rgb(68, 68, 68); margin-top: 10px;">O Artons é incrível! Seus materiais de estudo são de alta qualidade e me ajudaram a entrar na USP em apenas um ano de estudos.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="{{asset('./img/perfil 3.jpg')}}" alt="">
                                <div class="text-box">
                                    <h3 class="name">Valéria Santos</h3>
                                    <span class="job">Formada | Unicamp</span>
                                </div>
                            </div>
                            <p style="color: rgb(68, 68, 68); margin-top: 10px;">Sou formada pela Unicamp e pretendo fazer mais uma graduação, estou utilizando a plataforma a 3 meses e adoro a variedade de recursos que eles oferecem.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="{{asset('./imgs/perfil 4.jpg')}}" alt="">
                                <div class="text-box">
                                    <h3 class="name">José Soares</h3>
                                    <span class="job">Estudante | UNESP</span>
                                </div>
                            </div>
                            <p style="color: rgb(68, 68, 68); margin-top: 10px;">O Artons tornou minha preparação para os vestibulares muito mais eficaz. Seus materiais são excelentes e me deram uma compreensão mais profunda dos tópicos</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="swiper-pagination js-testimonials-pagination"></div>
            </div>
        </div>
    </section>
    <!--fim feedbacks-->
        </div>
    </div>
    <!--fim divisão 7-->

    @endsection
