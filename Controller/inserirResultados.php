<?php

require_once("../Model/bancoResultados.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(insereResultados($conexao, $codjogosrodadaFK, $golsmandante, $golsvisitante)){
   
    $_SESSION["msg"] = "<div class='alert alert-success' role='alert'>Seu resultado foi cadastrado com sucesso!</div>";
    header("Location: ../View/cadastroResultados.php");

}else{

   echo ("Seu resultado não foi cadastrado!");    
}

?>

