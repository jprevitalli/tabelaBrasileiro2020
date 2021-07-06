<?php
include_once("../Model/bancoUsuario.php");
//liberaAcesso();
include_once("header.php");
include_once("../Model/bancoTime.php");
include_once("../Model/conexao.php");

?>

<div class="container">

    <form action="" method="POST" class="row g-3">

        <div class="col-12">
            <label class="form-label">Digite o Nome do Time:</label>
            <input type="text" required name="time" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">Escolha o Estado(região) do Time:</label>
            <input type="text" required name="estadoTime" class="form-control">
        </div>
        
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>

    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Time</th>
                <th scope="col">Estado</th>
                <th scope="col">Escudo</th>              
                <th scope="col">Alterar</th>
                <th scope="col">Apagar</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $time = isset($_POST["time"]) ? $_POST["time"] : "";
            $dado = visuNomeTime($conexao, $time);
            foreach ($dado as $dados) :

            ?>
                <tr>
                    <th scope="row"><?= $dados["codtime"] ?></th>
                    <td><?= $dados["nometime"] ?></td>
                    <td><?= $dados["estadotime"] ?></td>
                    <td><img src="<?= $dados["escudotime"] ?>" width="70"></td>
                    <td>

                        <a class="btn btn-primary" href="alterarTime.php?codigo=<?= $dados["codtime"] ?>">Alterar</a>
                    </td>
                    <td>
                        <form action="../Controller/deletetime.php" method="Post">
                            <input type="hidden" name="codtime" value="<?= $dados["codtime"] ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>


    <?php
    include_once("footer.php");
    ?>