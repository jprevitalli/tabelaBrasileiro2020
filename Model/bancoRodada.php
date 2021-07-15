<?php


function insereRodada($conexao, $rodada, $timemandante, $timevisitante, $dtjogo, $horario){
    $query = "insert into tbrodada(rodada, timemandantejogos, timevisitantejogos, dtjogosrodada, horariojogosrodada) values('{$rodada}', '{$timemandante}', '{$timevisitante}', '{$dtjogo}', '{$horario}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;

};


function visuRodada($conexao, $timev, $timem){

    if($timev == ""){
        $query = "Select * from tbrodada where timemandantejogos like '%{$timem}%'";
    }elseif($timem){
    
    $query = "Select * from tbrodada where timevisitantejogos like '%{$timev}%'";
    
    }else{
       
    $query = "Select * from tbrodada where timevisitantejogos like '%{$timev}%' or timemandantejogos = '%{$timem}%'";
    
    }
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;

}

function visuCodigoJogoRodada($conexao, $codjogosrodada){

    $query = "Select * from tbrodada where codjogosrodada={$codjogosrodada}";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;

}

function alteraRodada($conexao, $codjogosrodada, $rodada, $timemandantejogos, $timevisitantejogos, $dtjogosrodada, $horariojogosrodada){

    $query = "update tbrodada set rodada='{$rodada}', timemandantejogos='{$timemandantejogos}', timevisitantejogos='{$timevisitantejogos}', dtjogosrodada='{$dtjogosrodada}', horariojogosrodada='{$horariojogosrodada}' where codjogosrodada='{$codjogosrodada}'";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;
}

function deleteTime($conexao, $codjogosrodada){

    $query = "delete from tbrodada where codjogosrodada='{$codjogosrodada}'";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;

}



