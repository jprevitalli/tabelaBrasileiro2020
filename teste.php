<?php
 
function gera_jogos($times) {
    $num_times = count($times);
 
    $jogo = array();
    foreach ($times as $m) {
        foreach ($times as $v) {
            if ($m != $v AND !in_array(array('m' => $v, 'v' => $m), $jogo)) {
                $jogo[] = array('m' => $m, 'v' => $v);
            }
        }
    }
 
    $rodada = array();
    $times_usados = array();
    $jogos_usados = array();
 
    $num_rodadas = $num_times - 1;
    $num_jogos = $num_times * $num_rodadas / 2;
    $num_jogos_realizados = 0;
 
    $rodada = array();
    shuffle($jogo);
    for ($i = 1; $i <= $num_rodadas; $i++) {
        foreach ($jogo as $c => $j) {
            if (!in_array($j['v'], $times_usados) AND !in_array($j['m'], $times_usados) AND !in_array($j, $jogos_usados)) {
                $rodada[$i][] = $j;
 
                $times_usados[] = $j['v'];
                $times_usados[] = $j['m'];
 
                $jogos_usados[] = $j;
 
                $num_jogos_realizados++;
            }
        }
 
        $times_usados = array();
    }
 
    
    if ($num_jogos_realizados == $num_jogos) {
        return $rodada;
    } else {
        return false;
        
        //$tentativa++;
    }
}
 
$times = array(
    'Time A',
    'Time B',
    'Time C',
    'Time D',
    'Time E',
    'Time F',
    'Time G',
    'Time H',
    'Time I',
    'Time J',
    );
 
$rodada = array();
 
while ($rodada == false) {
    $rodada = gera_jogos($times);
    $tentativa++;
}
 
foreach ($rodada as $c => $v) {
    echo "<h2>Rodada $c</h2>";
    foreach ($v as $i) {
        echo $i['m'], ' x ', $i['v'], '<br />';
    }
}