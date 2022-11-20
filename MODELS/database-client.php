<?php
    include_once '../CONTROLLERS/users.php';
    $user = new Users;

// TESTE PARA VERIFICAR SE OS DADOS ESTÃO CHEGANDO NOS PRINT_r

// IF(isset($_POST['nsubmit']))
// {
//     print_r($_POST['ncpf']);
//     print_r('<br>');
//     print_r($_POST['nname']);
//     print_r('<br>');
//     print_r($_POST['naddress']);
//     print_r('<br>');
//     print_r($_POST['nnumber']);
//     print_r('<br>');
//     print_r($_POST['ncompl']);
//     print_r('<br>');
//     print_r($_POST['ndistrict']);
//     print_r('<br>');
//     print_r($_POST['ncity']);
//     print_r('<br>');
//     print_r($_POST['nstate']);
//     print_r('<br>');
//     print_r($_POST['nzipcode']);
//     print_r('<br>');
//     print_r($_POST['ncell']);
//     print_r('<br>');
//     print_r($_POST['nemail']);
//     print_r('<br>');
//     print_r($_POST['nbirthday']);
//     print_r('<br>');
//     print_r($_POST['npassword']);
//     print_r('<br>');
//     print_r($_POST['ncpassword']);
// }

// $cpf = $_POST['ncpf'];
// $name = $_POST['nname'];
// $address = $_POST['naddress'];
// $number = $_POST['nnumber'];
// $compl = $_POST['ncompl'];
// $district = $_POST['ndistrict'];
// $city = $_POST['ncity'];
// $state = $_POST['nstate'];
// $zipcode = $_POST['nzipcode'];
// $cell = $_POST['ncell'];
// $email = $_POST['nemail'];
// $birthday = $_POST['nbirthday'];
// $password = $_POST['npassword'];
// $cpassword = $_POST['ncpassword'];

// $result = mysqli_query($connect, "INSERT INTO usuarios(cpf, nome, endereco, numero, compl, bairro, cidade, uf, cep, celular, email, datanasc, senha) VALUES ('$cpf', '$name', '$address', '$number', '$compl', '$district', '$city', '$state', '$zipcode', '$cell', '$email', '$birthday', '$password')");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../VIEWS/CSS/style.css">
    <title>Compra Premiada - Campanha de Natal 2022</title>
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
                    <li class="nav-i"><a href="../VIEWS/login.php" class="nav-lnk">Voltar</a></li>

                </ul>
            </div>
        </nav>
    </header>

    <div class="form-box">
        <form action="./database-client.php" method="POST">
            <fieldset>
                <legend><b>Cadastre seus dados pessoais.</b><br><br>
                    <div class="input-data">
                        <label class="label-user" for="icpf">CPF:</label>
                        <input type="text" name="ncpf" id="icpf" class="input-user" autocomplete="off" maxlength="11" placeholder="Apenas números" style="width: 185px; height: 38px;" required>
                        <label class="label-user" for="iname">NOME COMPLETO:</label>
                        <input type="text" name="nname" id="iname" class="input-user" autocomplete="off" maxlength="50" placeholder="Nome completo" style="text-transform: uppercase; width: 785px; height: 38px;" required>
                    </div>
                    <br>
                    <div class="input-data">
                        <label class="label-user" for="iaddress">ENDEREÇO:</label>
                        <input type="text" name="naddress" id="iaddress" class="input-user" autocomplete="off" maxlength="50" placeholder="Endereço sem abreviações" style="text-transform: uppercase; width: 650px; height: 38px;"required>
                        <label class="label-user" for="inumber">NÚMERO:</label>
                        <input type="text" name="nnumber" id="inumber" class="input-user" size="6" maxlength="6" autocomplete="off" placeholder="Nº" style="width: 95px; height: 38px;" required>
                        <label class="label-user" for="icompl">COMPL.:</label>
                        <input type="text" name="ncompl" id="icompl" class="input-user" autocomplete="off" maxlength="10" placeholder="AP/BL" style="text-transform: uppercase; width: 132px; height: 38px;">

                    </div>
                    <br>
                    <div class="input-data">
                        <label class="label-user" for="idistrictt">BAIRRO:</label>
                        <input type="text" name="ndistrict" id="idistrict" class="input-user" autocomplete="off" maxlength="20" placeholder="Bairro" style="text-transform: uppercase; width: 378px; height: 38px;" required>
                        <label class="label-user" for="icity">CIDADE:</label>
                        <input type="text" name="ncity" id="icity" class="input-user" maxlength="30" placeholder="Cidade" style="text-transform: uppercase; width: 300px; height: 38px;" required>
                        <label class="label-user" for="istate">ESTADO:</label>
                        <input type="text" name="nstate" id="istate" class="input-user" size="2" maxlength="2" placeholder="UF" style="text-transform: uppercase; width: 42px; height: 38px;" required>
                        <label class="label-user" for="izipcode">CEP:</label>
                        <input type="text" name="nzipcode" id="izipcode" class="input-user" autocomplete="off" maxlength="8" placeholder="números" style="width: 134px; height: 38px;" required>
                    </div>
                    <br>
                    <div class="input-data">
                        <label class="label-user" for="icell">CELULAR:</label>
                        <input type="tel" name="ncell" id="icell" class="input-user" autocomplete="off" maxlength="15" placeholder="DDD + Número" style="width: 180px; height: 38px;" required>
                        <label class="label-user" for="iemail">E-MAIL:</label>
                        <input type="email" name="nemail" id="iemail" class="input-user" maxlength="50" placeholder="E-mail principal" style="text-transform: lowercase; width: 809px; height: 38px;" required>
                    </div>
                    <br>
                    <div class="input-data">
                        <label class="label-user" for="ibirthday">DATA DE NASC.:</label>
                        <input type="date" name="nbirthday" id="ibirthday" class="input-user" required>
                        <label class="label-user" for="ipassword">CRIE UMA SENHA:</label>
                        <input type="password" name="npassword" id="ipassword" class="input-user" autocomplete="off" maxlength="8" placeholder="Até 8 dígitos" size="8" maxlength="8" style="width: 185px; height: 38px;" required>
                        <label class="label-user" for="icpassword">CONFIME A SENHA:</label>
                        <input type="password" name="ncpassword" id="icpassword" class="input-user"autocomplete="off" placeholder="Digite novamente" size="8" maxlength="8" style="width: 185px; height: 38px;" required>
                    </div>
                    <br>
                </legend><br>
                <div class="input-register-client">
                    <input class="input-register" type="submit" value="CADASTRAR" name="nsubmit" id="isubmit-save-data" >
                </div>
            </fieldset>
        </form>
    </div>

    <!-- Scrit js - separar depois em um arquivo js -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

        <script>
            $('#icpf').mask('000.000.000-00');
            $('#izipcode').mask('00000-000');
            $('#icell').mask('(00) 00000-0000');
        </script>




<?php

    // Verifica se clicou no botão ACESSAR.

      if(isset($_POST['ncpf']))
     {
         $ncpf = addslashes($_POST['ncpf']);
         $nname = addslashes($_POST['nname']);
         $naddress = addslashes($_POST['naddress']);
         $nnumber = addslashes($_POST['nnumber']);
         $ncompl = addslashes($_POST['ncompl']);
         $ndistric = addslashes($_POST['ndistrict']);
         $ncity = addslashes($_POST['ncity']);
         $nstate = addslashes($_POST['nstate']);
         $nzipcode = addslashes($_POST['nzipcode']);
         $ncell = addslashes($_POST['ncell']);
         $nemail = addslashes($_POST['nemail']);
         $nbirtday = addslashes($_POST['nbirthday']);
         $npassword = addslashes($_POST['npassword']);
         $ncpassword = addslashes($_POST['ncpassword']);
     }

    // //Verifica se não há campos vazios.

     if(!empty($cpf) && !empty($password))
     {
         $user->connect("sorteio_natal_2022","localhost","usuarios","root","");
         if($user->$msgErro == "")  //Preenchimento do formulário correto
         {
             if($npassword === $ncpassword)
             {
                 if($user->register($ncpf, $nname, $naddress, $nnumber, $ncompl, $ndistrict, $ncity, $nstate, $nzipcode, $ncell, $nemail, $nbirthday, $npassword))
                 {
                     echo "Cadastro efetuado com sucesso. Acesse a sessão LOGIN.";
                 }
                 else
                 {
                     echo "CPF já cadastrado.";   
                 }
             }
             else
             {
                 echo "Senha e confirmar senha estão diferentes.";
             }
         }
         else
         {
         } 
     }else
     {
     echo "Digite CPF e senha";
     }
?> 
</body>
</html>