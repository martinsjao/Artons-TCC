<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/b753e5926c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <!--first-content-->
        <div class="content first-content">
            <!--first-column-->
            <div class="first-column">
                <h2 class="title title-primary">Seja bem vindo de volta!</h2>
                <p class="description description-primary">Acesse sua conta para dar continuidade</p>
                <p class="description description-primary">aos estudos.</p>
                <button id="signin" class="btn btn-primary">login</button>
            </div>
            <!--second-column-->
            <div class="second-column">
                <h2 class="title title-second">Criar conta</h2>
                <!--midias de conexão-->
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#"><li class="item-social-media"><i class="fa-brands fa-facebook-f"></i></li></a>
                        <a class="link-social-media" href="#"><li class="item-social-media"><i class="fa-brands fa-google"></i></li></a>
                        <a class="link-social-media" href="#"><li class="item-social-media"><i class="fa-brands fa-linkedin-in"></i></li></a>
                    </ul>
                </div>

                <!--Formulário cadastro-->
                <p class="description description-second">ou use seu e-mail para se cadastrar:</p>

                <form class="form" action="/register" method="post">
                    @csrf
                    <!--nome-->
                    <label class="label-input" for="">
                        <i class="fa-regular fa-user icon-modify"></i>
                        <input class="input-width" type="text" name="name" placeholder="Nome">
                    </label>
                    <!--email-->
                    <label class="label-input" for="">
                        <i class="fa-regular fa-envelope icon-modify"></i>
                        <input class="input-width" type="email" name="email" placeholder="E-mail">
                    </label>
                    <!--senha-->
                    <label class="label-input" for="">
                        <i class="fa-solid fa-lock icon-modify"></i>
                        <input type="password" name="password" placeholder="Senha">
                    </label>
                    <button class="btn btn-second" type="submit">cadastrar</button>
                </form>
            </div>
        </div>


        <!--second-content-->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Falta pouco para iniciar seus estudos!</h2>
                <p class="description description-primary">Cadastre-se para iniciar sua jornada</p>
                <p class="description description-primary">rumo a aprovação.</p>
                <button id="signup" class="btn btn-primary">cadastrar</button>
            </div> 
            <div class="second-column">
                <h2 class="title title-second">Já tem uma conta? Faça seu login</h2>
                <!--midias de conexão-->
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#"><li class="item-social-media"><i class="fa-brands fa-facebook-f"></i></li></a>
                        <a class="link-social-media" href="#"><li class="item-social-media"><i class="fa-brands fa-google"></i></li></a>
                        <a class="link-social-media" href="#"><li class="item-social-media"><i class="fa-brands fa-linkedin-in"></i></li></a>
                    </ul>
                </div>
                
                 <!--Formulário login-->
                 <p class="description description-second">ou use seu e-mail para logar:</p>
                 <form class="form" action="/auth" method="post">
                     @csrf
                     <label class="label-input" for="">
                         <i class="fa-regular fa-envelope icon-modify"></i>
                         <input class="input-width" type="text" name="email" placeholder="E-mail">
 
                         @error('email')
                             <span>{{ $message }}</span>
                         @enderror
 
                     </label>
                     <label class="label-input" for="">
                         <i class="fa-solid fa-lock icon-modify"></i>
                         <input type="password" name="password" placeholder="Senha">
 
                         @error('senha')
                             <span>{{ $message }}</span>
                         @enderror
 
 
                     </label>
                     <a class="password" href="#">Esqueceu sua senha?</a>
                     <button class="btn btn-second" type="submit">Login</button>
 
                     @error('error')
                         <span>{{ $message }}</span>
                     @enderror 
                 </form>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>