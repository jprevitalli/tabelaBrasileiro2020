<?php

include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");


$nome = $_POST ["nome"];
$login = isset($_POST["login"])?strtolower($_POST["login"]):"";
$senha = $_POST["senha"];
$pin = $_POST["pin"];

if(insereUsuario($conexao, $nome, $login, $senha, $pin)){
    $_SESSION["msg"] = "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
    header("Location: ../View/acessoMain.php");
}else{
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Usuário não foi cadastrado!</div>";
    header("Location: ../View/cadastroUsuario.php");
}