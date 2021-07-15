
<?php

require_once("../Model/bancoRodada.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(insereRodada($conexao, $rodada, $timemandante, $timevisitante, $dtjogo, $horario)){
    //$_SESSION["msg"] = "<div class='alert alert-success' role='alert'>Rodada cadastrada com sucesso!</div>";
    //header("Location: ../View/cadastroJogos.php");
   echo ("Sua rodada foi cadastrada!");
}else{
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Rodada não foi cadastrada!</div>";
    header("Location: ../View/cadastroJogos.php");
}