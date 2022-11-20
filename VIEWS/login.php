<?php
    require_once './CONTROLLERS/users.php';
    $user = new Users;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../VIEWS/CSS/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Logo</h1>
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-i"><a href="../index.html" class="nav-lnk">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <h1 id="title-login">ACESSAR A TELA DE CUPONS</h1>

    <div id="form-login-center">
        <form class="form-login" method="POST">
            <label class="label-login">CPF do Cliente:</label>
            <input class="input-login" id="icpf" type="text" name="ncpf" autocomplete="off" maxlength="11" placeholder="Digite apenas números">

            <label class="label-login">Senha:</label>
            <input class="input-login" id="ipass" type="password" name="npass" autocomplete="off" maxlength="8" placeholder="Digite sua senha">

            <a href="#" id="forgot-pass">Esqueceu a senha?</a>

            <input class="input-login" id="access" type="submit" value="Acessar" name="access">
            <a href="../MODELS/database-client.php" id="first"><strong>É o seu primeiro cupom? Clique aqui.</strong></a>
        </form>
    </div>

    <!-- Scrit js - separar depois em um arquivo js -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

        <script>
            $('#icpf').mask('000.000.000-00');
        </script>

<!-- <?php
//      // Verifica se clicou no botão ACESSAR.
// if(isset($_POST['ncpf']))
// {

//     $cpf = addslashes($_POST['ncpf']);
//     $pass = addslashes($_POST['npass']);
// }

// //Verifica se não há campos vazios.

// if(!empty($cpf) && !empty($pass))
// {

// }else
// {
// echo "Digite CPF e senha";
// }
?> -->
</body>
</html>