<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoRodada.php');

extract($_REQUEST, EXTR_OVERWRITE);


if(alteraRodada($conexao, $codjogosrodada, $rodada, $timemandantejogos, $timevisitantejogos, $dtjogosrodada, $horariojogosrodada)){
    echo("<p class='alert alert-primary' role='alert'>O jogo da rodada foi alterado com sucesso!</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>O jogo da rodada não foi alterado!</p>");
}


include_once('../View/footer.php');

?>