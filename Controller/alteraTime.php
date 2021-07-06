<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoTime.php');

extract($_REQUEST, EXTR_OVERWRITE);


if(alteraTime($conexao, $codtime, $time, $estado, $escudo, $sobretime)){
    echo("<p class='alert alert-primary' role='alert'>O time foi alterado com sucesso!</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>O time não foi alterado!</p>");
}


include_once('../View/footer.php');

?>