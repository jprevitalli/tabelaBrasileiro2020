<?php

session_start();

function insereUsuario($conexao, $nome, $login, $senha, $pin)
{

    $option = ['cost' => 8];

    $senhacryp = password_hash($senha, PASSWORD_BCRYPT, $option);

    $query = "insert into tbusuario(nomeusu, loginusu, senhausu, pinusu) values('{$nome}','{$login}','{$senhacryp}','{$pin}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}



function buscarAcesso($conexao, $login, $senha)
{

    $query = "select * from tbusuario where loginusu= '{$login}'";

    $resultado = mysqli_query($conexao, $query);


    if (mysqli_num_rows($resultado) > 0) {
        $linha = mysqli_fetch_assoc($resultado);
        if (password_verify($senha, $linha["senhausu"])) {

            $_SESSION["login"] = $linha["loginusu"];
            $_SESSION["codusu"] = $linha["codusu"];

            $_SESSION["nome"] = $linha["nomeusu"];


            return $linha["loginusu"];
        } else {

            return $linha["Senha não confere"];
        }
    }
    return "E-mail não cadastrado!";
}

function trocarsenhausuario($conexao, $email, $novasenha, $pin)
{
    //verificar se o email e o pin estão corretos
    $query = "Select * from tbusuario where loginusu='{$email}' and pinusu='{$pin}'";
    $retorno = mysqli_query($conexao, $query);

    if (mysqli_num_rows($retorno) > 0) {
        $retornoArray = mysqli_fetch_assoc($retorno);
        $codusu = $retornoArray["codusu"];

        //criptografar a senha
        $option = ['cost' => 8];
        $senha = password_hash($novasenha, PASSWORD_BCRYPT, $option);
        //alterar a senha no banco  
        $query = "update tbusuario set senhausu='{$senha}' where codusu ='{$codusu}'";
        $resultado = mysqli_query($conexao, $query);

        return $resultado;
    } else {
        $resultado = "erro";
        return $resultado;
    }
}

function logout()
{
    return session_destroy();
}


function liberaAcesso()
{

    $email = isset($_SESSION["email"]);

    if (!$email) {
        $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Faça login para ter acesso ao sistema!</div>";
        header("Location: ../View/acessoMain.php");
        die();
    }
}


function visuEmailUsuario($conexao, $usuario)
{

    $query = "Select * from tbusuario where loginusu like '%{$usuario}%'";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}





function visuCodigoUsuario($conexao, $codigo)

{

    $query = "Select * from tbusuario where codusu={$codigo}";

    $resultado = mysqli_query($conexao, $query);



    return $resultado;
}




function deleteUsuario($conexao, $codusu)
{

    $query = "delete from tbusuario where codusu='{$codusu}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
