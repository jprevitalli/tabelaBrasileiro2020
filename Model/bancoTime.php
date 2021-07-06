<?php

function insereTime($conexao, $nometime, $estadotime, $escudotime){
    $query = "insert into tbtimes(nometime, estadotime, escudotime) values('{$nometime}', '{$estadotime}', '{$escudotime}')";
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

