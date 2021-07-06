<?php

include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");


$nome = $_POST ["nome"];
$login = isset($_POST["login"])?strtolower($_POST["login"]):"";
$senha = $_POST["senha"];
$pin = $_POST["pin"];

if(insereUsuario($conexao, $nome, $login, $senha, $pin)){
    header("Location: ../View/areaUsuario.php");
}else{
    header("Location: ../View/areaUsuario.php");
}