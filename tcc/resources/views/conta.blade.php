{{-- @extends('layout')

@section('container')

<link rel="stylesheet" href="css/conta.css'">

<div style="margin-top: 100px;" class="container text-center">
    <h1 class="mb-5 mt-5 Font">Sua conta</h1>
  </div>

    <div class="container ">

          <!---------------------------------------------------------------------------------------------------------------------------------->
            <div class="col-md-8">
              <form id="meuForm">
                  <div class="mb-3">
                    <label class="form-label">{{ auth()->user()->name }}</label>
                      <input type="text" class="form-control form-control-lg  mx-auto shadow-sm placeholder-text" id="Nome" placeholder="Nome">
                  </div>


                  <div class="mb-3">
                      <input type="email" class="form-control form-control-lg  mx-auto shadow-sm placeholder-text" id="E-mail" placeholder="E-mail">
                  </div>

                  <div  class="mb-3 position-relative">
                      <input type="password" class="form-control form-control-lg   mx-auto shadow-sm placeholder-text" id="Senha" placeholder="Senha">
                      <i  class="bi bi-eye-slash toggle-password position-absolute" id="togglePassword" style="right: 18px; top: 27%; transform: translateY(-50%); cursor: pointer;"></i>
                  </div>

                  <div class="d-flex justify-content-end">
                      <button type="button" class="entrar-button">Alterar dados</button>
                  </div>
              </form>

            </div>
          <!---------------------------------------------------------------------------------------------------------------------------------->


    </div>


@endsection --}}

@extends('layout')
@section('container')

<link rel="stylesheet" href="css/conta.css'">

<div style="margin-top: 100px;" class="container text-center">
    <h1 class="mb-5 mt-5 Font">Sua conta</h1>
</div>

<div class="container">
    <div class="col-md-8">
        <form id="meuForm" action="/edit/{{ auth()->user()->id }}" method="post">
            @csrf
            <div class="mb-3">

                <input type="text" class="form-control form-control-lg mx-auto shadow-sm placeholder-text" id="name"
                name="name" placeholder="Nome" value="{{ auth()->user()->name }}" >
            </div>

            <div class="mb-3">

                <input type="email" class="form-control form-control-lg mx-auto shadow-sm placeholder-text" id="email"
                name="email"  placeholder="E-mail" value="{{ auth()->user()->email }}" >
            </div>

            <div class="mb-3 position-relative">
                <input type="password" class="form-control form-control-lg mx-auto shadow-sm placeholder-text" id="password"
                    placeholder="Senha">
                <i class="bi bi-eye-slash toggle-password position-absolute" id="togglePassword"
                    style="right: 18px; top: 27%; transform: translateY(-50%); cursor: pointer;"></i>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="entrar-button">Alterar dados</button>
            </div>
        </form>
    </div>
</div>

@endsection
