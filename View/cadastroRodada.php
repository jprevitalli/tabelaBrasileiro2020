<?php
include_once("../Model/bancoUsuario.php");
//liberaAcesso();
include('header.php');
?>

<div class="container">

    <form action="../Controller/inserirRodada.php" method="POST" class="row g-3">


        <div class="col-12">
            <label for="inputRodada" class="form-label">Rodada</label>
            <select required name="rodada" class="form-select form-select" aria-label=".form-select-lg example">
                <option disabled selected>Escolha a Rodada:</option>
                <option value="Rodada 1">Rodada 1</option>
                <option value="Rodada 2">Rodada 2</option>
                <option value="Rodada 3">Rodada 3</option>
                <option value="Rodada 4">Rodada 4</option>
                <option value="Rodada 5">Rodada 5</option>
                <option value="Rodada 6">Rodada 6</option>
                <option value="Rodada 7">Rodada 7</option>
                <option value="Rodada 8">Rodada 8</option>
                <option value="Rodada 9">Rodada 9</option>
                <option value="Rodada 10">Rodada 10</option>
                <option value="Rodada 11">Rodada 11</option>
                <option value="Rodada 12">Rodada 12</option>
                <option value="Rodada 13">Rodada 13</option>
                <option value="Rodada 14">Rodada 14</option>
                <option value="Rodada 15">Rodada 15</option>
                <option value="Rodada 16">Rodada 16</option>
                <option value="Rodada 17">Rodada 17</option>
                <option value="Rodada 18">Rodada 18</option>
                <option value="Rodada 19">Rodada 19</option>
                <option value="Rodada 20">Rodada 20</option>
                <option value="Rodada 21">Rodada 21</option>
                <option value="Rodada 22">Rodada 22</option>
                <option value="Rodada 23">Rodada 23</option>
                <option value="Rodada 24">Rodada 24</option>
                <option value="Rodada 25">Rodada 25</option>
                <option value="Rodada 26">Rodada 26</option>
                <option value="Rodada 27">Rodada 27</option>
                <option value="Rodada 28">Rodada 28</option>
                <option value="Rodada 29">Rodada 29</option>
                <option value="Rodada 30">Rodada 30</option>
                <option value="Rodada 31">Rodada 31</option>
                <option value="Rodada 32">Rodada 32</option>
                <option value="Rodada 33">Rodada 33</option>
                <option value="Rodada 34">Rodada 34</option>
                <option value="Rodada 35">Rodada 35</option>
                <option value="Rodada 36">Rodada 36</option>
                <option value="Rodada 37">Rodada 37</option>
                <option value="Rodada 38">Rodada 38</option>
            </select>
        </div>

        <div class="col-12">
            <label for="inputTimeMandante" class="form-label">Time Mandante</label>
            <select required name="timemandante" class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Escolha o time:</option>
                <option value="Am??rica Mineiro">Am??rica Mineiro</option>
                <option value="Athletico Paranaense">Athletico Paranaense</option>
                <option value="Atl??tico-MG">Atl??tico-MG</option>
                <option value="Atl??tico-GO">Atl??tico-GO</option>
                <option value="Bahia">Bahia</option>
                <option value="Cear??">Cear??</option>
                <option value="Chapecoense">Chapecoense</option>
                <option value="Corinthians">Corinthians</option>
                <option value="Cuiab??">Cuiab??</option>
                <option value="Flamengo">Flamengo</option>
                <option value="Fluminense">Fluminense</option>
                <option value="Fortaleza">Fortaleza</option>
                <option value="Gr??mio">Gr??mio</option>
                <option value="Internacional">Internacional</option>
                <option value="Juventude">Juventude</option>
                <option value="Palmeiras">Palmeiras</option>
                <option value="RedBull Bragantino">RedBull Bragantino</option>
                <option value="Santos">Santos</option>
                <option value="S??o Paulo">S??o Paulo</option>
                <option value="Sport">Sport</option>
            </select>
        </div>

        <div class="col-12">
            <label for="inputTimeVisitante" class="form-label">Time Visitante</label>
            <select required name="timevisitante" class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Escolha o time:</option>
                <option value="Am??rica Mineiro">Am??rica Mineiro</option>
                <option value="Athletico Paranaense">Athletico Paranaense</option>
                <option value="Atl??tico-MG">Atl??tico-MG</option>
                <option value="Atl??tico-GO">Atl??tico-GO</option>
                <option value="Bahia">Bahia</option>
                <option value="Cear??">Cear??</option>
                <option value="Chapecoense">Chapecoense</option>
                <option value="Corinthians">Corinthians</option>
                <option value="Cuiab??">Cuiab??</option>
                <option value="Flamengo">Flamengo</option>
                <option value="Fluminense">Fluminense</option>
                <option value="Fortaleza">Fortaleza</option>
                <option value="Gr??mio">Gr??mio</option>
                <option value="Internacional">Internacional</option>
                <option value="Juventude">Juventude</option>
                <option value="Palmeiras">Palmeiras</option>
                <option value="RedBull Bragantino">RedBull Bragantino</option>
                <option value="Santos">Santos</option>
                <option value="S??o Paulo">S??o Paulo</option>
                <option value="Sport">Sport</option>
            </select>
        </div>


        <div class="datajogo col-md-6">
            <label for="inputData" name="dtjogo" class="form-label">Escolha a data do Jogo:</label>
            <input id="inputData" type="date" required>
        </div>

        <div class="horariojogo col-md-6">
            <label for="inputHorarioJogo">Escolha o hor??rio do Jogo:</label>
            <input type="time" id="inputHorarioJogo" name="horario" min="00:01" max="23:59" required>
        </div>



        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>




    </form>
</div>

<?php
include('footer.php');
?>