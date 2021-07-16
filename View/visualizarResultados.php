<?php
include_once("../Model/bancoUsuario.php");
//liberaAcesso();
include_once("header.php");
include_once("../Model/bancoResultados.php");
include_once("../Model/conexao.php");

?>

<div class="container">

    <form action="" method="POST" class="row g-3">


        <div class="col-12">
            <label class="form-label">Digite o código do jogo para visualizar o resultado:</label>
            <input type="text" name="codjogosrodada" class="form-control">
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>

    </form>

    <?php
    $codjogosrodada = isset($_POST["codjogosrodada"]) ? $_POST["codjogosrodada"] : "";
    $dado = visuResultados($conexao, $codjogosrodada);
    if (!$codjogosrodada) {
    } else {


        foreach ($dado as $dados) :

    ?>
            <div class="container">
                <form action="" method="POST" class="row g-3">

                    <div class="col-1">
                        <label class="form-label">Código:</label>
                        <input type="text" readonly name="codjogosrodadaFK" value="<?= $dados["codjogosrodada"] ?>" class="form-control">
                    </div>

                    <div class="col-6">
                        <label class="form-label">Rodada:</label>
                        <input type="img" readonly name="rodada" value="<?= $dados["rodada"] ?>" class="form-control">
                    </div>

                    <!-- Como fazer para colocar o escudo aqui de outra tabela?  
                <div class="col-2">
                    
                    <input type="" readonly name="escudotime" value="<?= $dados["escudotime"] ?>" class="form-control">
                </div>
                -->

                    <div class="col-6">
                        <label class="form-label">Time mandante:</label>
                        <input type="text" readonly name="timemandante" value="<?= $dados["timemandantejogos"] ?>" class="form-control">
                    </div>

                    <div class="col-6">
                        <label class="form-label">Time visitante:</label>
                        <input type="text" readonly name="timevisitante" value="<?= $dados["timevisitantejogos"] ?>" class="form-control">
                    </div>

                     <!-- Como fazer para colocar os gols aqui de outra tabela?  
                    <div class="col-6">
                        <label class="form-label">Gols Mandante:</label>
                        <input type="text" readonly name="golsmandante" value="<?= $dados["golsmandante"] ?>" class="form-control">
                    </div>

                    <div class="col-6">
                        <label class="form-label">Gols Visitante</label>
                        <input type="text" readonly name="golsvisitante" value="<?= $dados["golsvisitante"] ?>" class="form-control">
                    </div>

                    -->

                    <div class="col-4">
                        <label class="form-label">Data do jogo:</label>
                        <input type="date" readonly name="datajogorodada" value="<?= $dados["dtjogosrodada"] ?>" class="form-control">
                    </div>

                    <div class="col-4">
                        <label class="form-label">Horário do Jogo:</label>
                        <input type="text" readonly name="horariojogo" value="<?= $dados["horariojogosrodada"] ?>" class="form-control">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>


                </form>
            </div>



            <tbody>

                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
        <?php
        endforeach;
    }
        ?>

            </tbody>
            </table>

</div>

<?php
include_once("footer.php");
?>