<?php
include_once("../Model/bancoUsuario.php");
//liberaAcesso();
include_once("header.php");
include_once("../Model/bancoRodada.php");
include_once("../Model/conexao.php");

?>

<div class="container">

  
    <form action="" method="POST" class="row g-3">

        
        <div class="col-12">
            <label class="form-label">Digite o time mandante:</label>
            <input type="text" name="timemandantejogos" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">Digite o time visitante:</label>
            <input type="text" name="timevisitantejogos" class="form-control">
        </div>

        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>

    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Código do Jogo</th>
                <th scope="col">Rodada</th>
                <th scope="col">Time Mandante</th>                
                <th scope="col">Time Visitante</th>                
                <th scope="col">Data do Jogo</th>
                <th scope="col">Horário do Jogo</th>
                <th scope="col">Alterar</th>
                <th scope="col">Apagar</th>

            </tr>
        </thead>
        <tbody>


    <?php
            $timev = isset($_POST["timevisitantejogos"]) ? $_POST["timevisitantejogos"] : "";
            $timem = isset($_POST["timemandantejogos"]) ? $_POST["timemandantejogos"] : "";

            $dado = visuRodada($conexao, $timev, $timem);
            if(!$timev and !$timem){

            }else{

            
            foreach ($dado as $dados) :

            ?>
               
             
                <tr>
                    <th scope="row"><?= $dados["codjogosrodada"] ?></th>
                    <td><?= $dados["rodada"] ?></td>
                    <td><?= $dados["timemandantejogos"] ?></td>            
                    <td><?= $dados["timevisitantejogos"] ?></td>
                    <td>
                    <?php
                    $dateBR = implode( '/', array_reverse( explode( '-', $dados["dtjogosrodada"] ) ) );
                     echo ($dateBR);
                     ?>
                    </td>
                    <td><?= $dados["horariojogosrodada"] ?></td>
                    <td>
                        <a class="btn btn-primary" href="alterarRodada.php?codigo=<?= $dados["codjogosrodada"] ?>">Alterar</a>
                    </td>
                    <td>
                        <form action="../Controller/deleteRodada.php" method="Post">
                            <input type="hidden" name="codjogosrodada" value="<?= $dados["codjogosrodada"] ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach;
            }
            ?>
        </tbody>
    </table>


    <?php
    include_once("footer.php");
    ?>