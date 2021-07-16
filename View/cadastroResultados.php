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
            <label class="form-label">Digite o código do jogo para cadastrar o resultado:</label>
            <input type="text" name="codjogosrodada" class="form-control">
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>

    </form>
    <hr>
    <?php
    $codjogosrodada = isset($_POST["codjogosrodada"]) ? $_POST["codjogosrodada"] : "";
    $dado = visuResultados($conexao, $codjogosrodada);
    if (!$codjogosrodada) {
    } else {


        foreach ($dado as $dados) :

    ?>

            <form action="../Controller/inserirResultados.php" method="POST" class="row g-3">


                <div class="col-2">
                    <label class="form-label">Código do Jogo:</label>
                    <input type="text" readonly name="codjogosrodadaFK" value="<?= $dados["codjogosrodada"] ?>" class="form-control">
                </div>

                <div class="col-10">
                    <label class="form-label">Rodada:</label>
                    <input type="text" readonly name="rodada" value="<?= $dados["rodada"] ?>" class="form-control">
                </div>

                <div class="col-6">
                    <label class="form-label">Time mandante:</label>
                    <input type="text" readonly name="timemandante" value="<?= $dados["timemandantejogos"] ?>" class="form-control">
                </div>

                <div class="col-6">
                    <label class="form-label">Time visitante:</label>
                    <input type="text" readonly name="timevisitante" value="<?= $dados["timevisitantejogos"] ?>" class="form-control">
                </div>

                <div class="col-4">
                    <label class="form-label">Data do jogo:</label>
                    <input type="date" readonly name="datajogorodada" value="<?= $dados["dtjogosrodada"] ?>" class="form-control">
                </div>

                <div class="col-4">
                    <label class="form-label">Horário do Jogo:</label>
                    <input type="text" readonly name="horariojogo" value="<?= $dados["horariojogosrodada"] ?>" class="form-control">
                </div>


                <div class="col-md-6">
            <label for="inputResultado" class="form-label">Mandante:</label>
            <select required name="golsmandante" class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Escolha o placar:</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

            </select>
            </div>
            <div class="col-md-6">
            <label for="inputResultado" class="form-label">Visitante:</label>
            <select required name="golsvisitante" class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Escolha o placar:</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

            </select>
        </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>


            </form>

            <?php
        endforeach;
    }
            ?>

              

</div>

<?php
include_once("footer.php");
?>




