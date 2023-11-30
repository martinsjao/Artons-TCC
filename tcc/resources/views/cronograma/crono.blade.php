
@extends('layout')

@section('container')

<link rel="stylesheet" href="./css/crono.css">
<style>

.btn-list{
  border: none;
  background-color: rgba(21, 131, 145, 0);
  display: block;
  color: #8b8b8b;
  font-size: 15px;
  margin-top: 5px;
  margin-bottom: 10px;
  width: 100%;
  padding: 5px;
  text-align: left;
}
.btn-list:hover{
  background-color: #e6e6e68c;
}

.itemi{
  color: #8b8b8b;
  font-size: 20px;
}

.card {
  min-width: 420px;
  min-height: 100px;
  height: max-content;
  margin: 10px;
  border: 1px solid #ccc;
  border-radius: 12px;
  display: inline-block;
  vertical-align: top;
  position: relative;
  margin-bottom: 70px;
  padding-bottom: 50px;
}


.minha-classe {
  color: #158291; /* Defina a cor desejada */
  font-size: 25px;
  padding: 10px;
}



#cardsContainer{
display: flex; /* Usando display: flex; para alinhar os cards lado a lado */
flex-wrap: nowrap; /* Impede que os cards quebrem para a próxima linha */
overflow-x: auto; /* Adiciona uma barra de rolagem horizontal quando necessário */

}

/* Estilos para o botão Nova Semana */
#novaSemanaButton {
  display: block;
  margin: 10px;
  padding: 20px 40px;
  border-radius: 10px;
  background-color: #e6e6e68c;
  color: #8b8b8b;
  font-size: 15px;
  border: none;
  cursor: pointer;
}

  #novaSemanaButton:hover{
    background-color: #ececec8c;
  }

/* Estilos para o botão Excluir */
.deleteButton {
  position: absolute;
  top: 15px;
  right: 10px;
  background-color: #5ab9c6;
  color: white;
  border: none;
  padding: 2px 10px;
  font-size: 11px;
  cursor: pointer;
  border-radius: 4px;
}

.deleteButton:hover{
  background-color: rgba(90, 185, 198, 0.9);
}



/* Estilos para o botão Adicionar Conteúdo */
.addContentButton {
  margin: 10px;
  padding: 8px;
  border-radius: 5px;
  color: #8b8b8b;
  border: none;
  background-color: white;
  cursor: pointer;
  position: absolute;
  bottom: 0;
  font-size: 15px;
  left: 0;
  margin-top: 10px;
}
.addContentButton:hover {
  background-color: #ececec;
}

/* Estilos para a lista de itens */
#contentList {
  display: none;
  position: absolute;
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 10px;
  max-height: 350px; /* Defina a altura máxima desejada */
  overflow-y: auto;
  width: 300px;
}


.minha-classe-item-tit{
  font-size: 1.20rem;
  color: #8b8b8b;
  font-weight: 100;
  margin-bottom: 0px;
  margin-top: 5px;
}

.minha-classe-item{
  color: #8b8b8b;
  font-size: 0.8rem;
  margin-bottom: 35px;
}

.btn-exc{
background-color:#FF4A4A;
height: 25px;
width: 25px;
border-radius: 50%;
border: none;
display: inline-block;
margin-left: auto;
right: 0;
margin-bottom: 50px;
cursor: pointer;
}

.btn-exc:hover{
background-color: #ff3b3b;
}

.img-e{
height: 12px;
width: 12px;
align-items: center;
justify-content: center;
margin-left: 2px;
margin-bottom: 1px;
}

.check{
  margin-top: 5px;
margin-right: 10px;
}
</style>



    <div class="resp-tit">
        <h1 class="tit">Seu cronograma</h1>
    </div>

        <form action="crono/new" method="get">
            <button id="novaSemanaButton" type="submit">+ Adicionar nova semana</button>
        </form>

    <div id="cardsContainer">
        @forelse ($semana as $itemi)
            <div class="card">
                <div style="padding-top: 10px; padding-left: 10px; color: #464646;" class="ml-5">{{ $itemi->nome_semana }}</div>

                {{-- Verifica se há algum conteúdo associado --}}
                @if ($itemi->cont_crono->isNotEmpty())
                    {{-- Itera sobre a coleção --}}
                    @foreach ($itemi->cont_crono as $cont)
                    <div style="margin-top: 20px;  display: flex;">
                    <input style="display: inline-block; margin-top: 7px; margin-left: 10px; margin-right: 5px;" class="form-check-input" type="checkbox">
                        <div style="display: inline-block; " class="itemi">{{ $cont->conteudo->nome_cont }}</div>
                        <form action="{{ url('crono/'.$itemi->pk_cod_semana.'/'.$cont->cont_id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button style="display: block; float: right; position: absolute; margin-right: 10px;" class="btn-exc" type="submit">                            
                              <img style="display: block; width: 15px; height: 15px; margin-left: 7px; " src="{{asset('img/lixo.png')}}" alt="">
                          </button>
                          
                        </form>
                      </div> 

                    @endforeach
                @else
                    <div class="itemi">Sem conteúdo associado</div>
                @endif
 

                <form style="margin-top: 20px;" action="semana/{{ $itemi->pk_cod_semana }}" method="get">
                    <button class="addContentButton" type="submit">adicionar</button>
                </form>

                <form action="delete/{{$itemi->pk_cod_semana}}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="deleteButton" type="submit">deletar</button>
                </form>
            </div>
        @empty
            <div style="margin: 10px;" class="itemi">Ainda não há nenhuma semana adicionada...</div>
        @endforelse
    </div>





<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection

