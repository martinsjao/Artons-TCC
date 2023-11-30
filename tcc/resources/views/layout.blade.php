<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>

    <!--link meu css-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <!--outros links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- menu -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8" ></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .filtrar {
            margin-bottom: 10px;
    padding: 10px 20px; /* Espaçamento interno do botão */
    background-color: #5ab9c600;
    color: #727272;
    border: none;
    cursor: pointer;
    font-family: 'Outfit', sans-serif;
    margin-left: 45px;


}

.filtrar:hover{
    color: #8d8d8d;
}
    </style>s
</head>

<body>
    <!--inicio da nav-->
    <nav class="shadow-sm p-3 mb-5 bg-body-tertiary rounded menusup">
        <!--logo-->
        <div class="logo">
            <a href="{{asset('/')}}">
                <div class="container">
                <img class="imglogo" src="{{asset('img/logo.png')}}" alt="">
                <!--<h1 class="txtlogo">Artons</h1>-->
                </div>
            </a>
        </div>
        <!--fim logo-->

        <div>
            @if (auth()->user() == null)
                <div>
                    <a href="{{ asset('/pplogins') }}">
                        <button class="entrar-button"><i class="bi bi-box-arrow-in-right"></i>Entrar</button>
                    </a>
                </div>
            @elseif (auth()->user())
                <span style="font-weight: bold; font-family: 'Outfit', sans-serif; color: #727272;" class="welcome-message">
                    Olá, {{ auth()->user()->name }}
                </span>
            @endif
        </div>

        <!--menu lateral-->
        <div class="menu-btn">
            <i class="bi bi-list"></i>
          </div>
          <div class="side-bar">
            <div class="menu">
              <div class="item"><a href="{{asset('/inicial')}}"><i class="bi bi-house-door"></i>Home</a></div>
              <div class="item">
                <a class="sub-btn"><i class="bi bi-pencil"></i>Disciplinas<i style="font-size: 18px;" class="bi bi-chevron-right dropdown cor"></i></a>
                <div class="sub-menu">
                  <a style="margin-bottom: 1px;" href="{{asset('diciplinas')}}" class="sub-item">Ver todas</a>
                  <hr style="color: #727272; margin: auto; width: 85%; height: 2px;">
                  <a style="margin-top: 1px;" href="/disciplinas/1" class="sub-item">Português</a>
                  <a href="/disciplinas/2" class="sub-item">Matemática</a>
                  <a href="/disciplinas/3" class="sub-item">Química</a>
                  <a href="/disciplinas/4" class="sub-item">Física</a>
                  <a href="/disciplinas/5" class="sub-item">Biologia</a>
                  <a href="/disciplinas/6" class="sub-item">História</a>
                  <a href="/disciplinas/7" class="sub-item">Geografia</a>
                  <a href="/disciplinas/8" class="sub-item">Filosofia</a>
                  <a href="/disciplinas/9" class="sub-item">Sociologia</a>
                  <a href="/disciplinas/10" class="sub-item">Literatura</a>
                  <a href="/disciplinas/11" class="sub-item">Inglês</a>
                </div>
              </div>
              <div class="item">
                  <form action="/vest" method="POST">
                      @csrf
                  <a class="sub-btn"><i class="bi bi-card-checklist" ></i>Vestibulares<i style="font-size: 18px;" class="bi bi-chevron-right dropdown cor"></i></a>
                  <div class="sub-menu">
                  <a style="margin-bottom: 1px; color: #158291; font-weight: bold;" href="{{asset('vest')}}" class="sub-item">FILTROS</a>
                  <hr style="color: #727272; margin: auto; width: 85%; height: 2px;">
                  <a style="margin-top: 1px; color: #158291; text-align: left;" href="" class="sub-item">Vestibular</a>
                  <!---------------------------->
                  <div style="margin-left: 29px;" class="form-check">
                    <input class="form-check-input" type="checkbox" name="vest[]" checked onclick= 'checkUncheck(this)' id="todosCheckbox">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">Todos</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input class="form-check-input" type="checkbox" name="vest[]" value="enem" onclick= 'checkUnchecked(this)' id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">ENEM</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="vest[]" value="unicamp" onclick= 'checkUnchecked(this)' id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">UNICAMP</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="vest[]" value="fuvest" onclick= 'checkUnchecked(this)' id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">FUVEST</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="vest[]" value="unesp" onclick= 'checkUnchecked(this)' id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">UNESP</label>
                  </div>

                  <!---------------------------->
                  <a style="margin-top: 1px; color: #158291; text-align: left;" class="sub-item">Ano</a>
                  <!---------------------------->
                  <div style="margin-left: 29px;" class="form-check">
                    <input class="form-check-input" type="checkbox" name="ano[]" checked onclick= 'checkUncheckAno(this)' id="todosCheckboxAno">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">Todos</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input class="form-check-input" type="checkbox" name="ano[]" onclick= 'checkUncheckedAno(this)' value="2017" id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">2017</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="ano[]" onclick= 'checkUncheckedAno(this)' value="2018" id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">2018</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="ano[]" onclick= 'checkUncheckedAno(this)' value="2019" id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">2019</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="ano[]" onclick= 'checkUncheckedAno(this)' value="2020" id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">2020</label>
                  </div>

                  <div style="margin-left: 29px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="ano[]" onclick= 'checkUncheckedAno(this)' value="2021" id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">2021</label>
                  </div>

                  <div style="margin-left: 29px; padding-bottom: 30px;" class="form-check">
                    <input  class="form-check-input" type="checkbox" name="ano[]" onclick= 'checkUncheckedAno(this)' value="2022" id="flexCheckDefault">
                    <label style="margin-left: 5px;" class="form-check-label sub-item" for="flexCheckDefault">2022</label>
                  </div>
                  <!---------------------------->
                  <button class="filtrar" type="submit"><i class="bi bi-filter"></i>Filtrar</button>
                  </div>


                </form>
                </div>
              <div style="margin-bottom: 1px;" class="item"><a href="{{asset('obra')}}"><i class="bi bi-book"></i>Obras</a></div>
              <hr style="color: #727272; margin: auto; width: 85%; height: 2px;">
              <div style="margin-top: 1px;" class="item"><a href="{{asset('/contas')}}"><i class="bi bi-person-circle"></i>Sua conta</a></div>
              <div class="item"><a href="{{asset('')}}"><i class="bi bi-arrow-counterclockwise"></i>Seu progresso</a></div>
              <div style="margin-bottom: 1px;" class="item"><a href="{{asset('/semanas')}}"><i class="bi bi-calendar-week"></i>Seu cronograma</a></div>
              <div style="margin-bottom: 100px;" class="item"><a href="{{asset('/logout')}}"><i class="bi bi-box-arrow-in-left "></i>Sair</a></div>

            </div>
          </div>
        <!--fim do menu lateral-->
    </nav>
    <!--fim da nav-->



    @yield('container')




<!--footer-->
<footer style="background-color: #ececec;" class="text-dark pt-5 pb-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">


            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold title-footer">Sobre nós</h5>
                <hr class="mb-4">
                <p style="text-align: justify;">Artons é um site que foi inteiramente desenvolvido durante um Trabalho de Conclusão de Curso na Etec João Belarmino. Nosso objetivo com o seu desenvolvimento é proporcionar ao usuário uma maior facilidade nos estudos para o ENEM e vestibulares.</p>
            </div>

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold title-footer">Etec J.B.</h5>
                <hr class="mb-4">
                <p class="text-dark" style="text-align: justify;">
                     A Etec João Belarmino é uma escola técnica que capacita profissionais capazes de desempenhar as competências exigidas pelo mercado de trabalho atual.
                </p>
                <p style="text-align: center;">
                    <a href="https://www.etecjoaobelarmino.com.br/" >www.etecjoaobelarmino.com.br</a>
                </p>
                <p class="text-dark">
                    (19) 3807-2288 | 3807-8982 | 3808-1016
                </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold title-footer">Contato</h5>
                <hr class="mb-4">
                <p>
                    <li class="fas fa-home mr-3"></li>  Amparo SP, BR
                </p>
                <p>
                    <li class="fas fa-envelope mr-3"></li>  artons255@gmail.com
                </p>
                <p>
                    <li class="fas fa-phone mr-3"></li>  +55 (19) 99999-9999
                </p>
            </div>

            <hr class="mb-4">
            <div class="row d-flex justify-content-center">
                <div>
                    <p>
                        Todos os direitos reservados à Etec João Belarmino :
                        <a href="#" style="text-decoration: none;">>
                            <strong class="title-footer">Artons</strong>
                        </a>
                    </p>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="" class="text-dark"><li style="cursor: pointer;" class="fab fa-instagram"></li></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="text-dark"><li style="cursor: pointer;" class="fas fa-envelope"></li></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
<!--fim do footer-->

<script>
    function checkUncheck(checkBox) {
    get = document.getElementsByName('vest[]');
    for(var i=0; i<get.length; i++) {
    get[i].checked = checkBox.checked;}
}

function checkUnchecked(checkBox) {
    // Desmarcar a checkbox "todos" se uma outra checkbox for desmarcada
    document.getElementById('todosCheckbox').checked = false;
}


function checkUncheckAno(checkBox) {
    get = document.getElementsByName('ano[]');
    for(var i=0; i<get.length; i++) {
    get[i].checked = checkBox.checked;}
}

function checkUncheckedAno(checkBox) {
    // Desmarcar a checkbox "todos" se uma outra checkbox for desmarcada
    document.getElementById('todosCheckboxAno').checked = false;
}
</script>

    <!------------------------------------------------------------------------------------------------------>
     <!------------------------------------------------------------------------------------------------------>
     <script src="{{asset('js/menu.js')}}"></script>
     <script src="{{asset('js/calendar.js')}}"></script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

     <!--feedbacks-->
     <script>
         const swiper = new Swiper('.js-testimonials-slider', {
             grabCursor: true,
             spaceBetween:10,
             pagination:{
                 el: 'js-testimonials-pagination',
                 clickable:true
             },
             breakpoints:{
                 767:{
                     slidesPerView:3
                 }
             }
         });

         // Cria um novo observador de interseção
         let observer = new IntersectionObserver((entries, observer) => {
             entries.forEach(entry => {
                 if (entry.isIntersecting) {
                     entry.target.classList.add('show-transition');
                     observer.unobserve(entry.target);
                 }
             });
         });

     <!--fim feedbacks-->

     let elements = document.querySelectorAll('#img-1, #img-2, #img-3, #img-4, #texto-inicial, #title-div1, #text-div1, #textos-div2, #textos-div3, #textos-div4, #textos-div5, #card-esquerda, #card-centro, #card-direita');
     elements.forEach(element => {
         observer.observe(element);
 });

 $(document).ready(function() {
   // Quando alguém clica em um título de conteúdo
   $('.conteudo').click(function() {
     // Encontre os cards associados a esta div de conteúdo
     var cards = $(this).find('.cards');

     // Alternar a classe "show" nos cards (adicionar/remover)
     cards.slideToggle("slow");
   });
 });
</script>


     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
