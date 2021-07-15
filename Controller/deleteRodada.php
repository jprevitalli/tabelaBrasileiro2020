<?php

include_once("../View/header.php");
include_once("../Model/bancoRodada.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteTime($conexao, $codjogosrodada)){
     
    echo("<div class='alert alert-success' role='alert'>O jogo foi excluído</div>");
    
}else{
    echo("<div class='alert alert-danger' role='alert'>O jogo não foi excluído</div>");
}


include_once("../View/footer.php");

?>