
<?php

require_once("../Model/bancoTime.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(insereTime($conexao, $time, $estadotime, $escudo, $sobretime)){
    $_SESSION["msg"] = "<div class='alert alert-success' role='alert'>Time cadastrado com sucesso!</div>";
    header("Location: ../View/cadastroTime.php");
}else{
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Time não foi cadastrado!</div>";
    header("Location: ../View/cadastroTime.php");
}