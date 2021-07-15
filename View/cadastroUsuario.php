<?php

include('header.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Projeto Tabela Brasileirão - Brazilian Football</title>
</head>

<body>



<div class="container">

    <form action="../Controller/inserirUsuario.php" method="POST" class="row g-3">

        <div class="col-12">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" required name="nome" class="form-control" id="inputNome">
        </div>


        <div class="col-12">
            <label for="inputLogin" class="form-label">E-mail</label>
            <input type="email" required name="login" class="form-control" id="inputLogin">
        </div>

        <div class="col-md-6">
            <label for="inputSenha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputSenha">
        </div>

        <div class="col-md-6">
            <label for="inputPin" class="form-label">PIN (Número com 5 dígitos)</label>
            <input type="number" min="00001" max="99999" name="pin" class="form-control" id="inputPin">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-primary" href="areaUsuario.php">Voltar</a>

        </div>

        
        
       
    </form>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>

</html>

