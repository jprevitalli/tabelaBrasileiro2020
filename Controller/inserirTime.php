
<?php

require_once("../Model/bancoTime.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(insereTime($conexao, $time, $nomeestado, $escudo, $sobretime)){
    echo("Time cadastrado com sucesso");
}else{
    echo("O Time não foi para o banco de dados");
}