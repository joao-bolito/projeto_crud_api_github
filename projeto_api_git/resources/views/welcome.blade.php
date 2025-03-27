<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <title>Registro admins</title>
</head>
<body>
    <div class="wrapper">
        <a href="#"></a><h2>Registro de admins</h2>
        <form id="formCadastro" name="formulario" action="">
            <div class="input-box">
                <input type="text" id="userName" placeholder="Insira seu nome" required>
            </div>
            <div class="input-box">
                <input type="email" id="email" placeholder="insira seu email" required>
            </div>
            <div class="input-box">
                <input id="txtSenha" type="password" placeholder="Crie uma senha" minlength="5" required> <!-- minlength e maxlenght são usadas para limitar caracteres em um campo input-->
            </div>
            <div class="input-box">
                <input id="repetir_senha" type="password" placeholder="Repita a senha" required>
            </div>
            {{-- <div class="policy">
                <input type="checkbox" required>
                <h3>Aceito todos os termos e condições</h3>
            </div> --}}
            <div class="input-box button">
                <input type="submit" value="Confirmar">
            </div>
            <div class="text">
                <h3>Já possui conta? <a href="#">Login</a></h3>
            </div>
        </form>
    </div>
</body>
</html>
