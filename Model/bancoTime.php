<?php

function insereTime($conexao, $time, $nomeestado, $escudo, $sobretime){
    $query = "insert into tbtimes(nometime, estadotime, escudotime, historiatime) values('{$time}', '{$nomeestado}', '{$escudo}', '{$sobretime}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;

};

function visuNomeTime($conexao, $nometime){

    $query = "Select * from tbtimes where nometime like '%{$nometime}%'";
    $resultado = mysqli_query ($conexao, $query);
    
    
    return $resultado;

}

function visuCodigoTime($conexao, $codigo){

    $query = "Select * from tbtimes where codtime={$codigo}";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;

}

function alteraTime($conexao, $codtime, $time, $estado, $escudo, $sobretime){

    $query = "update tbtimes set nometime='{$time}', estadotime='{$estado}', escudotime='{$escudo}', historiatime='{$sobretime}' where codtime='{$codtime}'";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;
}

function deleteTime($conexao, $codtime){

    $query = "delete from tbtimes where codtime='{$codtime}'";
    $resultado = mysqli_query ($conexao, $query);
    return $resultado;

}

