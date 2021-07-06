<?php
include_once("../Model/bancoTime.php");
//liberaAcesso();
include('header.php');
?>



<div class="container">

  <form action="../Controller/inserirTime.php" method="POST" class="row g-3">

    <div class="col-md-8">
      <label for="inputTime" class="form-label">Time</label>
      <input type="text" name="time" class="form-control" id="inputTime">
    </div>

    <div class="col-md-4">
            <label for="inputEstado" class="form-label">Estado</label>
            <select name="nomeestado" class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Escolha o estado:</option>
                <option value="acre">Acre</option>
                <option value="alagoas">Alagoas</option>
                <option value="amapa">Amapá</option>
                <option value="amazonas">Amazonas</option>
                <option value="bahia">Bahia</option>
                <option value="ceara">Ceará</option>
                <option value="distritofederal">Distrito Federal</option>
                <option value="espiritosanto">Espirito Santo</option>
                <option value="goias">Goiás</option>
                <option value="maranhao">Maranhão</option>
                <option value="matogrosso">Mato Grosso</option>
                <option value="matogrossodosul">Mato Grosso do Sul</option>
                <option value="minasgerais">Minas Gerais</option>
                <option value="para">Pará</option>
                <option value="paraiba">Paraíba</option>
                <option value="parana">Paraná</option>
                <option value="pernambuco">Pernambuco</option>
                <option value="piaui">Piauí</option>
                <option value="riodejaneiro">Rio de Janeiro</option>
                <option value="riograndedonorte">Rio Grande do Norte</option>
                <option value="riograndedosul">Rio Grande do Sul</option>
                <option value="rondonia">Rondônia</option>
                <option value="roraima">Roraima</option>
                <option value="santacatarina">Santa Catarina</option>
                <option value="saopaulo">São Paulo</option>
                <option value="sergipe">Sergipe</option>
                <option value="tocantins">Tocantins</option>
            </select>

        </div>

    <div class="col-md-12">
      <label for="inputEscudo" class="form-label">Escudo</label>
      <input type="text" name="escudo" class="form-control" id="inputEscudo">
    </div>

    <div class="form-floating">
      <textarea class="form-control" name="sobretime" placeholder="Comente aqui" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Sobre o Time</label>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastro</button>
    </div>

</div>

</form>


<?php
include('footer.php');
?>