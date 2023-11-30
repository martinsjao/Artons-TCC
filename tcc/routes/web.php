<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiscController;
use App\Http\Controllers\ObrasController;
use App\Http\Controllers\listController;
use App\Http\Controllers\ContController;
use App\Http\Controllers\VestsController;
use App\Http\Controllers\CronoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('inicial', function () {
    return view('inicial');
});

Route::get('login', [RegisterController::class, 'index']);//acessa a pasta login e pega o arquivo login
Route::get('login/new', [RegisterController::class,'create']);
Route::post('register', [RegisterController::class,'store']);

//ROTAS DE AUTENTICAÇÃO
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LoginController::class,'destroy']);
Route::post('auth', [LoginController::class,'auth']);

//PAGINA PRINCIPAL
Route::get('pplogin', [HomeController::class, 'index']);
Route::get('pplogins', [HomeController::class,'create']);

//MENUUU
//disciplinas
Route::get('diciplina', [HomeController::class, 'indexd']);
Route::get('diciplinas', [HomeController::class,'created']);
Route::get('diciplinas', [DiscController::class,'chamada']);//chamando cards da pagina disciplinas

//vestibulares
Route::post('vest', [VestsController::class, 'index']);
Route::get('/vest/baixar1/{rota}/{ano}', [VestsController::class,'download1']);//chamando cards da pagina vests
Route::get('/vest/baixar2/{rota}/{ano}', [VestsController::class,'download2']);
Route::get('/vest/baixar3/{rota}/{ano}', [VestsController::class,'download3']);
Route::get('/vest/baixar4/{rota}/{ano}', [VestsController::class,'download4']);
Route::get('/vest/baixar5/{rota}/{ano}', [VestsController::class,'download5']);
Route::get('/vest/baixar6/{rota}/{ano}', [VestsController::class,'download6']);
Route::get('/vest/baixar7/{rota}/{ano}', [VestsController::class,'download7']);
Route::get('/vest/baixar8/{rota}/{ano}', [VestsController::class,'download8']);


//conta
Route::get('conta', [HomeController::class, 'indexc']);
Route::get('contas', [HomeController::class,'createc'])->middleware('auth');
Route::post('edit/{id}', [UserController::class,'edit']);

//obra
Route::get('obra', [HomeController::class, 'indexo']);
Route::get('obras', [HomeController::class,'createo']);
Route::get('obras', [ObrasController::class,'chamada']);//chamando cards da pagina obras
Route::get('obras/pesquisa', [ObrasController::class,'pesquisa']);//chamando cards da pagina obras
Route::get('/obras/baixar/{rota}', [ObrasController::class,'download']);//rota para download de obras
Route::get('/obras/view/{id}', [ObrasController::class,'viewfile']);//rota para download de obras

//progresso
Route::get('progress', [HomeController::class, 'indexp']);
Route::get('progresso', [HomeController::class,'createp']);

Route::get('semanas', [CronoController::class,'index'])->middleware('auth');
Route::get('crono/new', [CronoController::class,'create']);
Route::post('semana', [CronoController::class,'store']);
Route::get('semana/{id}', [CronoController::class,'cont']);
Route::post('semana/add', [CronoController::class,'add']);
Route::delete('crono/{id}/{contId}', [CronoController::class, 'destroy']);
Route::delete('delete/{id}', [CronoController::class, 'delete']);

//conteudos
Route::controller(listController::class)->group(function(){
    Route::get('/disciplinas/{id}','inf');
});



Route::controller(ContController::class)->group(function(){
    Route::get('/contEscrito/{id}','inf');
    Route::get('/contVideo/{id}','video');
    Route::get('/questoes/{id}','quest');
});







