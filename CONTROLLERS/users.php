<?php

class Users
{
    private $pdo;
    public $msgErro = "";
    
    public function connect($name, $host, $user, $password)
    {
        try
        {
        global $pdo;
        global $msgErro;
        
        $pdo = new PDO("mysql: dbname=".$name.";host=".$host,$user,$password);
        } catch(PDOException $e){
            $msgErro = $e->getMessage();
        }
    }

    public function register($ncpf, $nname, $naddress, $nnumber, $ncompl, $ndistrict, $ncity, $nstate, $nzipcode, $ncell, $nemail, $nbirthday, $npassword)
    {
        global $pdo;

        // Verficar se existe usuário.

        $sql = $pdo->prepare("SELECT idusuario FROM usuarios WHERE cpf = :cpf");
        $sql->bindValue(":cpf", $ncpf);
        $sql->execute();

        if($sql->rowCount() > 0)
        {
            return false; // já cadastrado
        }
        else{
            
            // Caso não, cadastrar.

            $sql = $pdo->prepare("INSERT INTO usuarios(cpf, nome, endereco, numero, compl, bairro, cidade, uf, cep, celular, email, datanasc, senha) VALUES (':cpf', ':name_cli', ':address_cli', ':num', ':compl', ':district', ':city', ':state_cli', ':zipcode', ':cell', ':email', ':birthday', ':passwordcli')");

            $sql->bindValue(":cpf", $ncpf);
            $sql->bindValue(":name_cli", $nname);
            $sql->bindValue(":address_cli", $naddress);
            $sql->bindValue(":num", $nnumber);
            $sql->bindValue(":compl", $ncompl);
            $sql->bindValue(":district", $ndistrict);
            $sql->bindValue(":city", $ncity);
            $sql->bindValue(":state_cli", $nstate);
            $sql->bindValue(":nzipcode", $nzipcode);
            $sql->bindValue(":ncell", $ncell);
            $sql->bindValue(":email", $nemail);
            $sql->bindValue(":birthday", $nbirthday);
            $sql->bindValue(":password_cli", md5($npassword));
            $sql->execute();
            return true; //cadastro efetuado com sucesso.
        }
    }
    
    public function login($ncpf, $npassword)
    {

        global $pdo;

        // Verifica se o CPF está cadastrado.

        $sql = $pdo->prepare("SELECT idusuario FROM usuarios WHERE ncpf = :cpf AND npassword = :password_cli");
        $sql->bindValue(":ncpf", "$ncpf");
        $sql->bindValue(":password_cli", md5($npassword));
        $sql->execute();
        if($sql->rowCount() > 0)
        {

            // Está cadastrada. Criar uma sessão.

            $data = $sql->fetch();
            session_start();
            $_SESSION['id_user'] = $data['idusuario'];
            return true; //logado com sucesso.
        } else
        {
            return false; // Não conseguiu logar.
        }
    }
}