<?php
include_once("../Model/bancoUsuario.php");
//liberaAcesso();
include_once('header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoTime.php');

$codigotime = $_GET["codigo"];

$resul = visuCodigoTime($conexao, $codigotime);
$time = mysqli_fetch_assoc($resul);

?>

<div class="container">

  <form action="../Controller/alteraTime.php" method="POST" class="row g-3">

  <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$time['codtime']?>" name="codtime" class="form-control" id="inputCodigo">
    </div>

    <div class="col-md-8">
      <label for="inputTime" class="form-label">Time</label>
      <input type="text" value="<?=$time['nometime']?>"name="time" class="form-control" id="inputTime">
    </div>

    <div class="col-md-3">
            <label for="inputEstado" class="form-label">Estado</label>
            <select required name="estado" class="form-select form-select" aria-label=".form-select-lg example">
                <option value="<?=$time['estadotime']?>" selected ><?=$time['estadotime']?></option>
                
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
            </select>

        </div>

    <div class="col-12">
      <label for="inputEscudo" class="form-label">Escudo</label>
      <input type="text" value="<?=$time['escudotime']?>" name="escudo" class="form-control" id="inputEscudo">
    </div>
    
    <div class="form-floating">
      <textarea class="form-control" name="sobretime" placeholder="Comente aqui" id="floatingTextarea2" style="height: 100px"><?=$time['historiatime']?></textarea>
      <label for="floatingTextarea2">Sobre o Time:</label>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

</div>

</form>


<?php
include('footer.php');
?>