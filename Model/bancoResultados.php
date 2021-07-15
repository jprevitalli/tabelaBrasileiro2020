<?php


function visuResultados($conexao, $codjogosrodada){

    $query = "Select * from tbrodada where codjogosrodada = '{$codjogosrodada}'";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;



}

function visuResultadosJogos($conexao, $codresultadorodada){
    $query = "Select * from tbresultados where codresultado = '{$codresultadorodada}'";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;

}



function insereResultados($conexao, $codjogosrodadaFK, $golsmandante, $golsvisitante){
    $query = "insert into tbresultados(codjogosrodadaFK, golsmandante, golsvisitante) values('{$codjogosrodadaFK}','{$golsmandante}', '{$golsvisitante}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;

};







